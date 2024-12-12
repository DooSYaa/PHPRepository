<?php
/* Smarty version 5.4.1, created on 2024-12-10 07:29:25
  from 'file:_header.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6757edd5bd2c00_46702567',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9bc34900ecd92329110669f71679215a28d243eb' => 
    array (
      0 => '_header.tpl',
      1 => 1733815643,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6757edd5bd2c00_46702567 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/ddosyaa/PhpstormProjects/PHPRepository/templates';
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home page</title>
    <style>
        header {
            color: white;
            padding: 15px 30px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        nav ul a {
            color: white;
            text-decoration: none;
            font-size: 36px;
            transition: color 0.3s;
            margin: 20px;
        }

        nav ul a:hover {
            color: #a8a7a7; /* Эффект наведения */
        }
    </style>
</head>
<body>
<header>
    <div class="navbar">
        <nav>
            <ul>
                <a href="index.php?page=home">Main</a>
                <a href="index.php?page=login">Login</a>
                <a href="index.php?page=logout">Logout</a>
                <a href="index.php?page=access_link">Access_link</a>
                <a href="index.php?page=email_notification">Email_not...</a>
                <a href="index.php?page=directory">Directory</a>
            </ul>
        </nav>
    </div>
</header>
</body>
</html><?php }
}
