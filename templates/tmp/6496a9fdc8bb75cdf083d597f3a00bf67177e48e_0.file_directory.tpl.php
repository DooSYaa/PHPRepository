<?php
/* Smarty version 5.4.1, created on 2024-11-10 13:20:11
  from 'file:directory.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6730b30b84d1a3_61382823',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6496a9fdc8bb75cdf083d597f3a00bf67177e48e' => 
    array (
      0 => 'directory.tpl',
      1 => 1731244810,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_header.tpl' => 1,
  ),
))) {
function content_6730b30b84d1a3_61382823 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/ddosyaa/PhpstormProjects/App/templates';
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Directory</title>
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
        table{
            margin: auto;
        }
    </style>
</head>
<body>
<?php $_smarty_tpl->renderSubTemplate("file:_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <h1>Directory Page</h1>
<h3>Directory contents</h3>.
<p>Path: <?php echo $_smarty_tpl->getValue('directory_path');?>
</p>
<p>Folder_count: <?php echo $_smarty_tpl->getValue('folder_count');?>
</p>
<p>Number of files: <?php echo $_smarty_tpl->getValue('file_count');?>
</p>
<p>Total file size: <?php echo $_smarty_tpl->getValue('total_file_size');?>
</p>

<table border=“1”>
    <thead>
    <tr>
        <th>Name</th>
        <th>Type</th>
        <th>Reading</th>
        <th>Write</th>
        <th>Execution</th>
    </tr>
    </thead>
    <tbody>
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('contents'), 'item');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value) {
$foreach0DoElse = false;
?>
        <tr>
            <td><?php echo $_smarty_tpl->getValue('item')['name'];?>
</td>
            <td><?php echo $_smarty_tpl->getValue('item')['type'];?>
</td>
            <td><?php echo $_smarty_tpl->getValue('item')['permissions']['read'];?>
</td>
            <td><?php echo $_smarty_tpl->getValue('item')['permissions']['write'];?>
</td>
            <td><?php echo $_smarty_tpl->getValue('item')['permissions']['execute'];?>
</td>
        </tr>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </tbody>
</table>

</body>
</html><?php }
}
