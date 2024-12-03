<?php
/* Smarty version 5.4.1, created on 2024-11-10 13:03:55
  from 'file:logout.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6730af3b07fec5_28446246',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f57bf69706625b74ccadba72fce7a5a5a61f04f' => 
    array (
      0 => 'logout.tpl',
      1 => 1731243831,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_header.tpl' => 1,
  ),
))) {
function content_6730af3b07fec5_28446246 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/ddosyaa/PhpstormProjects/App/templates';
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Logout</title>
    <style>
        @font-face {
            font-family: 'Custom';
            src: url('templates/fonts/pc-senior/pcsenior.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }
        body {
            font-family: 'Custom';
            font-size: 40px;
            color: white;
            background: black;
            text-align: center;
        }
    </style>
</head>
<body>
<?php $_smarty_tpl->renderSubTemplate("file:_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <h1>Logout Page</h1>
    <form action="">
        <h2>Are you sure want to <span style="color: darkred">logout</span>?</h2>
        <h4>Account:</h4>
        <h5>Username: <?php echo $_smarty_tpl->getValue('username');?>
</h5>
        <h5>Email: <?php echo $_smarty_tpl->getValue('email');?>
</h5>
    </form>
</body>
</html><?php }
}
