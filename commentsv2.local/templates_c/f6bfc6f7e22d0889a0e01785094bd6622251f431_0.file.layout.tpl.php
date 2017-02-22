<?php
/* Smarty version 3.1.30, created on 2017-02-22 14:56:06
  from "/Users/antonbelykh/code/sandbox/www/commentsv2.local/views/layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ad98767d7f21_19985095',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6bfc6f7e22d0889a0e01785094bd6622251f431' => 
    array (
      0 => '/Users/antonbelykh/code/sandbox/www/commentsv2.local/views/layout.tpl',
      1 => 1487357131,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ad98767d7f21_19985095 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>
<head>
   <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_94726924758ad98767d33d8_96410664', "title");
?>
</title>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_62465467758ad98767d4768_85574593', "bootstrap_css");
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_75658054758ad98767d5813_66204134', "css");
?>

</head>
<body>
    <h1 class="title"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_57420823358ad98767d6862_61552318', "h1");
?>
</h1>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7269171358ad98767d7867_97067704', "body");
?>

</body>
</html><?php }
/* {block "title"} */
class Block_94726924758ad98767d33d8_96410664 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Default page title<?php
}
}
/* {/block "title"} */
/* {block "bootstrap_css"} */
class Block_62465467758ad98767d4768_85574593 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"><?php echo '</script'; ?>
>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"><?php echo '</script'; ?>
>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
    <?php
}
}
/* {/block "bootstrap_css"} */
/* {block "css"} */
class Block_75658054758ad98767d5813_66204134 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "css"} */
/* {block "h1"} */
class Block_57420823358ad98767d6862_61552318 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "h1"} */
/* {block "body"} */
class Block_7269171358ad98767d7867_97067704 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "body"} */
}
