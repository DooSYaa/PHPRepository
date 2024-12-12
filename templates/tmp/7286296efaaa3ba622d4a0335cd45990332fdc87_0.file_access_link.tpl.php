<?php
/* Smarty version 5.4.1, created on 2024-12-11 14:48:04
  from 'file:access_link.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6759a62492c359_92910924',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7286296efaaa3ba622d4a0335cd45990332fdc87' => 
    array (
      0 => 'access_link.tpl',
      1 => 1733815643,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_header.tpl' => 1,
  ),
))) {
function content_6759a62492c359_92910924 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/ddosyaa/PhpstormProjects/PHPRepository/templates';
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Access link</title>
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
            color: white;
            text-align: center;
            justify-content: center;
        }
    </style>
</head>
<body>
<?php $_smarty_tpl->renderSubTemplate("file:_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <h1>Access Links</h1>
<h3>Resource Access</h3>.
<p>You have accessed <?php echo $_smarty_tpl->getValue('resource_name');?>
.</p>
<p>Access link: <a href=“<?php echo $_smarty_tpl->getValue('resource_link');?>
”>Go to the link</a></p>
<p>Name: <?php echo $_smarty_tpl->getValue('user_first_name');?>
 <?php echo $_smarty_tpl->getValue('user_last_name');?>
</p>.
<p>Spectpectfully, Application Team.</p>

</body>
</html><?php }
}
