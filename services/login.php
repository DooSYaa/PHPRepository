<?php
session_start();
require __DIR__ . '/../core/DatabaseConnector.php';

$db = new DatabaseConnector();
$conn = $db->getConnection();

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = :email AND password = :password");
    $stmt->execute(['email' => $email, 'password' => $password]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if($user)
    {
        header('Location: index.php');
    }
    else
    {
        echo "Wrong username or password";
    }

}