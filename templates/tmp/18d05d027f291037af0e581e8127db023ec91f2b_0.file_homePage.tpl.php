<?php
/* Smarty version 5.4.1, created on 2024-11-09 22:02:24
  from 'file:homePage.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_672fdbf0bc6480_70767977',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18d05d027f291037af0e581e8127db023ec91f2b' => 
    array (
      0 => 'homePage.tpl',
      1 => 1731189743,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_header.tpl' => 1,
  ),
))) {
function content_672fdbf0bc6480_70767977 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/ddosyaa/PhpstormProjects/App/templates';
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home page</title>
    <style>
        @font-face {
            font-family: 'Custom';
            src: url('templates/fonts/pc-senior/pcsenior.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }
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
        body{
            font-family: 'Custom';
            background-color: black;
            text-align: center;
            justify-content: center;
            color: white;
        }
    </style>
</head>
<body>
    <?php $_smarty_tpl->renderSubTemplate("file:_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <h1>Welcome to Home page</h1>
</body>
</html><?php }
}
