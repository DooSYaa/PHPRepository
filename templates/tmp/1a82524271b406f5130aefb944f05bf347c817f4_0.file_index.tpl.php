<?php
/* Smarty version 5.4.1, created on 2024-10-30 17:05:29
  from 'file:index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_672267593c3402_80629154',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a82524271b406f5130aefb944f05bf347c817f4' => 
    array (
      0 => 'index.tpl',
      1 => 1730307927,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_672267593c3402_80629154 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/ddosyaa/PhpstormProjects/App/templates';
echo '<?php'; ?>

    $slovo = 'Pidor';
<?php echo '?>'; ?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.6.0.min.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="./libs/NivoSlider/nivo-slider.css" />
    <?php echo '<script'; ?>
 src="./libs/NivoSlider/jquery.nivo.slider.js"><?php echo '</script'; ?>
>
    <title>Laboratorium</title>
</head>
<body>
    <h1>Hello <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('name'), ENT_QUOTES, 'UTF-8', true);?>
, welcome to Smarty!</h1>

    <h2>tut slovo: <?php echo '<?php'; ?>
 echo $slovo <?php echo '?>'; ?>
</h2>


</body>
</html><?php }
}
