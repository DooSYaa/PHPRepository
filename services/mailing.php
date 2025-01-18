<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/../vendor/autoload.php';

class TokenService {
    // Генерация токена
    public function generateToken() {
        return bin2hex(random_bytes(4)); // Генерация 8-значного токена
    }

    // Отправка токена на email
    public function sendToken($email, $token) {
        $mail = new PHPMailer(true);

        try {
            // Настройки SMTP
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com'; // Сервер SMTP
            $mail->SMTPAuth = true;
            $mail->Username = 'eurosting73@gmail.com'; // Ваш email
            $mail->Password = 'qytf uklx eutk ltbj '; // Пароль приложения
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port = 465;

            // Настройка сообщения
            $mail->setFrom('eurosting73@gmail.com', 'Your App');
            $mail->addAddress($email);

            $mail->isHTML(true);
            $mail->Subject = 'Ваш код подтверждения';
            $mail->Body = "Ваш код подтверждения: <strong>$token</strong>";

            $mail->send();
            return true;
        } catch (Exception $e) {
            error_log("Ошибка отправки email: " . $mail->ErrorInfo);
            return false;
        }
    }
}
?>
