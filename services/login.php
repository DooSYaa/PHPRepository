<?php
session_start();
require __DIR__ . '/../core/DatabaseConnector.php';

$db = new DatabaseConnector();
$conn = $db->getConnection();
echo "TEST";

if(isset($_POST['submit']) && $_SERVER['HTTPS'] == true) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    try {
        $stmt = $conn->prepare("SELECT * FROM kakaUser WHERE email = :email AND password = :password");
        $stmt->execute(['email' => $email, 'password' => $password]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
    }
    catch (PDOException $e) {
        error_log($e->getMessage());
    }

    if($user)
    {
        echo "OK";
        #die();
        $smarty->assign('username',$user);
        $smarty->assign('message','ok');
        #header('Location: /PHPRepository/index.php');
    }
    else
    {
        echo "ERR";
        #die();
        $smarty->assign('message','Wrong data');
    }

}
else
{
    $smarty->assign('message','connection not sequre!');
}

/*
#--------------------------It's test------------------------------------------------
    $email = 'olek@example.com';
    $password = 'qwerty123456';

    $stmt = $conn->prepare("SELECT * FROM kakaUser WHERE email = :email AND password = :password");
    $stmt->execute([':email' => $email, ':password' => $password]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if($user)
    {
       # header('Location: /PHPRepository/index.php');
    }
    else
    {
        return '<script>alert("Wrong trying login");</script>';
    }
#------------------------------------------------------------------------------------


/**/