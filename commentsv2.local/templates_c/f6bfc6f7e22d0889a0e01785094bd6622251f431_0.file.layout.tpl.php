<?php
/* Smarty version 3.1.30, created on 2017-02-17 19:45:33
  from "/Users/antonbelykh/code/sandbox/www/commentsv2.local/views/layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a744cdd97ee3_91838156',
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
function content_58a744cdd97ee3_91838156 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>
<head>
   <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_96079217758a744cdd8f6c6_94291326', "title");
?>
</title>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_187114649458a744cdd91844_59774721', "bootstrap_css");
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_102326632558a744cdd93a04_66522660', "css");
?>

</head>
<body>
    <h1 class="title"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_160538858658a744cdd95a58_14375193', "h1");
?>
</h1>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_192984101558a744cdd97664_68347780', "body");
?>

</body>
</html><?php }
/* {block "title"} */
class Block_96079217758a744cdd8f6c6_94291326 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Default page title<?php
}
}
/* {/block "title"} */
/* {block "bootstrap_css"} */
class Block_187114649458a744cdd91844_59774721 extends Smarty_Internal_Block
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
class Block_102326632558a744cdd93a04_66522660 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "css"} */
/* {block "h1"} */
class Block_160538858658a744cdd95a58_14375193 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "h1"} */
/* {block "body"} */
class Block_192984101558a744cdd97664_68347780 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "body"} */
}
