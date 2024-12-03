<?php
/* Smarty version 5.4.1, created on 2024-11-19 10:52:37
  from 'file:login.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_673c6df52619c1_81847787',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0dd9cb7cd0cb720475eaaf32999e9aa4deac18bf' => 
    array (
      0 => 'login.tpl',
      1 => 1732013097,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_header.tpl' => 1,
  ),
))) {
function content_673c6df52619c1_81847787 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/ddosyaa/PhpstormProjects/App/templates';
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <style>
        @font-face {
            font-family: 'Custom';
            src: url('templates/fonts/pc-senior/pcsenior.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }
        .login-form{
            display: flex;
            justify-content: center;
            color: grey;
        }
        .main-text{
            font-size: 500%;
            color: #869ca1;
            text-align: center;
        }
        body{
            font-family: 'Custom';
            background-color: black;
        }
        .login-form input[type="text"],
        .login-form input[type="email"],
        .login-form input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            box-sizing: border-box;
            border-radius: 4px;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>
<?php $_smarty_tpl->renderSubTemplate("file:_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <h1 class="main-text">Login Page</h1>
<div class="login-form">
    <form action="/services/login.php" method="post">
        <input type="text" name="username" placeholder="Username" /> <br>
        <input type="email" name="email" placeholder="email" /> <br>
        <input type="password" name="password" placeholder="password" /> <br>
        <a href="">Forgot password?</a>
        <input type="submit" value="Login" class="login-button" />
        <h6>New user? <a href="">Create new account</a></h6>
    </form>
</div>
</body>
</html><?php }
}
