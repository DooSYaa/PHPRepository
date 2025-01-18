<?php
session_start();

use Smarty\Smarty;

require __DIR__ . '/../core/DatabaseConnector.php';


$smarty = new Smarty();

$db = new DatabaseConnector();
$conn = $db->getConnection();

$time = date("H:i:s");

if($_SERVER['HTTPS'] == true) {
    $smarty->assign('message', "Ok");

    if(!isset($_SESSION['login_attempts'])){
        $_SESSION["login_attempts"] = 5;
    }

    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        try {
            $stmt = $conn->prepare("SELECT * FROM kakaUser WHERE email = :email AND password = :password");
            $stmt->execute(['email' => $email, 'password' => $password]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log($e->getMessage());
        }

        if ($user) {
            header('Location: /index.php');
            $_SESSION['userEmail'] = $user['Name'];
            $_SESSION['login_attempts'] = 5;
        } else {
            $smarty->assign('message', 'Wrong data. You have ' . $_SESSION['login_attempts'] . ' attempts.');
            $_SESSION['login_attempts']--;

            if ($_SESSION['login_attempts'] <= 0) {
                $userId = $user['Id'];
                $stmt = $conn->prepare("select * from block_time where UserId = :userId");
                $stmt->execute(['UserId' => $userId]);
                $user = $stmt->fetch(PDO::FETCH_ASSOC);
                if($userId['time_left'] == null){
                    $stmt = $conn->prepare("insert into block_time (time_left)");
                }
                $smarty->assign('message', "You haven't attempts to login.");
            }
        }

    }
}
else
{
    $smarty->assign('message','<script> alert("Connection not sequre") </script>');
}
