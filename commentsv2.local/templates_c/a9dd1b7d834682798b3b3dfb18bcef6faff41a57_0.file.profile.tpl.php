<?php
/* Smarty version 3.1.30, created on 2017-02-17 16:11:13
  from "/Users/antonbelykh/code/sandbox/www/commentsv2.local/views/profile.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a71291450437_02944053',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9dd1b7d834682798b3b3dfb18bcef6faff41a57' => 
    array (
      0 => '/Users/antonbelykh/code/sandbox/www/commentsv2.local/views/profile.tpl',
      1 => 1487253876,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_58a71291450437_02944053 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_159595673758a71291436ff7_93105527', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_139567718958a71291438a24_03721758', "css");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_22868343058a7129144fb13_75139100', "body");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "title"} */
class Block_159595673758a71291436ff7_93105527 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Login page<?php
}
}
/* {/block "title"} */
/* {block "css"} */
class Block_139567718958a71291438a24_03721758 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<link rel="stylesheet" href="style.css"><?php
}
}
/* {/block "css"} */
/* {block "body"} */
class Block_22868343058a7129144fb13_75139100 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if (isset($_SESSION['name'])) {?>
        <h1 class="title">Welcome to profile</h1>
    <div class="container">
        <div class="row main">
            <span class="label label-warning">You're logged as: <?php echo $_SESSION['name'];?>
</span> <br>
            <a href='index.php?action=logout'>Logout</a>
        </div>
    </div>
        <?php } else { ?>
            <div class="container">
                <div class="row main">
                    <span class="label label-danger"> <a href='index.php?action=login'>This page is restricted, please log in</a></span>
                </div>
            </div>
    <?php }?>

<?php
}
}
/* {/block "body"} */
}
