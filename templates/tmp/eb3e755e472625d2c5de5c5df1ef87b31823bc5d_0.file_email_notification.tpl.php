<?php
/* Smarty version 5.4.1, created on 2024-11-10 13:08:14
  from 'file:email_notification.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6730b03e2bcce6_27837484',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb3e755e472625d2c5de5c5df1ef87b31823bc5d' => 
    array (
      0 => 'email_notification.tpl',
      1 => 1731244019,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_header.tpl' => 1,
  ),
))) {
function content_6730b03e2bcce6_27837484 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/ddosyaa/PhpstormProjects/App/templates';
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email Notification</title>
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
            color: #a8a7a7;
        }
        body{
            font-family: 'Custom';
            background-color: black;
            color: white;
            text-align: center;
            justify-content: center;
        }
    </style>
</head>
<body>
<?php $_smarty_tpl->renderSubTemplate("file:_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <h1>Email notification</h1>
<h3>Event Notification</h3>
<p>Event Name: <?php echo $_smarty_tpl->getValue('event_name');?>
</p>
<p>Date: <?php echo $_smarty_tpl->getValue('event_date');?>
</p>
<p>Location: <?php echo $_smarty_tpl->getValue('event_location');?>
</p>
<p>Name: <?php echo $_smarty_tpl->getValue('user_first_name');?>
 <?php echo $_smarty_tpl->getValue('user_last_name');?>
</p>
<p>Thank you for your attention!"</p>
</body>
</html><?php }
}
