<?php
//session_start();
//date_default_timezone_set('Europe/Warsaw');
//use Smarty\Smarty;
//
//require __DIR__ . '/../core/DatabaseConnector.php';
//
//$smarty = new Smarty();
//
//$db = new DatabaseConnector();
//$conn = $db->getConnection();
//
//$time = date("H:i:s");
//
//if ($_SERVER['HTTPS'] == true) {
//    $smarty->assign('message', "Ok");
//
//    if (!isset($_SESSION['login_attempts'])) {
//        $_SESSION["login_attempts"] = 5;
//    }
//
//    if (isset($_POST['submit'])) {
//        $email = $_POST['email'];
//        $password = $_POST['password'];
//
//        try {
//            $stmt = $conn->prepare("SELECT * FROM kakaUser WHERE email = :email");
//            $stmt->execute(['email' => $email]);
//            $user = $stmt->fetch(PDO::FETCH_ASSOC);
//
//            if ($user) {
//                $userId = $user['Id'];
//
//                // Проверяем, заблокирован ли пользователь
//                $stmt = $conn->prepare("SELECT time_left FROM block_time WHERE UserId = :userId");
//                $stmt->execute(['userId' => $userId]);
//                $blockInfo = $stmt->fetch(PDO::FETCH_ASSOC);
//
//                if ($blockInfo && strtotime($blockInfo['time_left']) > time()) {
//                    // Пользователь заблокирован
//                    $smarty->assign('message', "You are blocked until " . $blockInfo['time_left']);
//                } else {
//                    // Проверяем пароль
//                    if ($user['password'] === $password) {
//                        // Успешный вход
//                        $_SESSION['userName'] = $user['Name'];
//                        $_SESSION['login_attempts'] = 5;
//
//                        // Удаление блокировки, если она была
//                        $stmt = $conn->prepare("DELETE FROM block_time WHERE UserId = :userId");
//                        $stmt->execute(['userId' => $userId]);
//
//                        header('Location: /index.php');
//                        exit();
//                    }else {
//                        // Неправильный пароль
//                        $_SESSION['login_attempts']--;
//                        $smarty->assign('message', 'Wrong data. You have ' . $_SESSION['login_attempts'] . ' attempts.');
//
//                        // Если попытки закончились, блокируем пользователя
//                        if ($_SESSION['login_attempts'] <= 0) {
//                            $blockTime = date('Y-m-d H:i:s', strtotime('+15 minutes')); // Блокировка на 15 минут
//                            $stmt = $conn->prepare("REPLACE INTO block_time (UserId, time_left) VALUES (:userId, :time_left)");
//                            $stmt->execute(['userId' => $userId, 'time_left' => $blockTime]);
//                            $smarty->assign('message', "You are blocked until " . $blockTime);
//                        }
//                    }
//                }
//            } else {
//                // Пользователь не найден
//                $smarty->assign('message', 'User not found.');
//            }
//        } catch (PDOException $e) {
//            error_log($e->getMessage());
//        }
//    }
//} else {
//    $smarty->assign('message', '<script> alert("Connection not secure") </script>');
//}


session_start();
date_default_timezone_set('Europe/Warsaw');

use Smarty\Smarty;

require __DIR__ . '/../core/DatabaseConnector.php';
require __DIR__ . '/mailing.php'; // Подключаем TokenService

$smarty = new Smarty();

$db = new DatabaseConnector();
$conn = $db->getConnection();

$time = date("H:i:s");

if ($_SERVER['HTTPS'] == true) {
    $smarty->assign('message', "Ok");

    if (!isset($_SESSION['login_attempts'])) {
        $_SESSION["login_attempts"] = 5;
    }

    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        try {
            $stmt = $conn->prepare("SELECT * FROM kakaUser WHERE email = :email");
            $stmt->execute(['email' => $email]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user) {
                $userId = $user['Id'];

                // Проверяем, заблокирован ли пользователь
                $stmt = $conn->prepare("SELECT time_left FROM block_time WHERE UserId = :userId");
                $stmt->execute(['userId' => $userId]);
                $blockInfo = $stmt->fetch(PDO::FETCH_ASSOC);

                if ($blockInfo && strtotime($blockInfo['time_left']) > time()) {
                    // Пользователь заблокирован
                    $smarty->assign('message', "You are blocked until " . $blockInfo['time_left']);
                } else {
                    // Проверяем пароль
                    if ($user['password'] === $password) {
                        // Успешный первый этап аутентификации
                        $_SESSION['userId'] = $userId;
                        $_SESSION['login_attempts'] = 5;

                        // Генерируем токен и отправляем email
                        $tokenService = new TokenService();
                        $token = $tokenService->generateToken();
                        $_SESSION['auth_token'] = $token;

                        if ($tokenService->sendToken($email, $token)) {
                            $smarty->assign('message', "Token sent to your email. Please enter it to complete authentication.");
                            $_SESSION['auth_stage'] = 'token_verification';
                        } else {
                            $smarty->assign('message', "Failed to send token. Please try again later.");
                        }
                    } else {
                        // Неправильный пароль
                        $_SESSION['login_attempts']--;
                        $smarty->assign('message', 'Wrong data. You have ' . $_SESSION['login_attempts'] . ' attempts.');

                        // Если попытки закончились, блокируем пользователя
                        if ($_SESSION['login_attempts'] <= 0) {
                            $blockTime = date('Y-m-d H:i:s', strtotime('+15 minutes')); // Блокировка на 15 минут
                            $stmt = $conn->prepare("REPLACE INTO block_time (UserId, time_left) VALUES (:userId, :time_left)");
                            $stmt->execute(['userId' => $userId, 'time_left' => $blockTime]);
                            $smarty->assign('message', "You are blocked until " . $blockTime);
                        }
                    }
                }
            } else {
                // Пользователь не найден
                $smarty->assign('message', 'User not found.');
            }
        } catch (PDOException $e) {
            error_log($e->getMessage());
        }
    }

    // Проверяем токен (второй этап)
    if (isset($_POST['verify_token'])) {
        $inputToken = $_POST['token'];

        if ($_SESSION['auth_stage'] === 'token_verification' && $inputToken === $_SESSION['auth_token']) {
            // Успешная верификация токена
            unset($_SESSION['auth_token']);
            unset($_SESSION['auth_stage']);
            $smarty->assign('message', "Authentication successful!");
            header('Location: /index.php');
            exit();
        } else {
            $smarty->assign('message', "Invalid token. Please try again.");
        }
    }
} else {
    $smarty->assign('message', '<script> alert("Connection not secure") </script>');
}

