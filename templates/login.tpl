<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
{include file="_header.tpl"}
    <h1 class="main-text">Login Page</h1>
<div class="login-form">
    <form action="index.php?page=login" method="post">
        <input type="email" name="email" placeholder="email" /> <br>
        <input type="password" name="password" placeholder="password" /> <br>
        <a href="">Forgot password?</a>
        <input type="submit" value="Login" class="login-button" name="submit"/>
        <h6>New user? <a href="">Create new account</a></h6>
    </form>
    <form method="POST">
        <label>Enter your token:</label>
        <input type="text" name="token" required>
        <button type="submit" name="verify_token">Verify Token</button>
    </form>
</div>
{$message}
</body>
</html>