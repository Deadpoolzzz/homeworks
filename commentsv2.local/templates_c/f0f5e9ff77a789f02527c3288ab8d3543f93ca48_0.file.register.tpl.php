<?php
/* Smarty version 3.1.30, created on 2017-02-16 14:12:52
  from "/Users/antonbelykh/code/sandbox/www/commentsv2.local/views/register.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a5a55432e781_56786807',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0f5e9ff77a789f02527c3288ab8d3543f93ca48' => 
    array (
      0 => '/Users/antonbelykh/code/sandbox/www/commentsv2.local/views/register.tpl',
      1 => 1487250734,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_58a5a55432e781_56786807 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18388196658a5a55432a948_00596276', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_189735759058a5a55432b895_67927601', "css");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_114926349858a5a55432c625_03296436', "h1");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_66700169958a5a55432dd47_00072509', "body");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "title"} */
class Block_18388196658a5a55432a948_00596276 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Register page<?php
}
}
/* {/block "title"} */
/* {block "css"} */
class Block_189735759058a5a55432b895_67927601 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<link rel="stylesheet" href="style.css"><?php
}
}
/* {/block "css"} */
/* {block "h1"} */
class Block_114926349858a5a55432c625_03296436 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Register page<?php
}
}
/* {/block "h1"} */
/* {block "body"} */
class Block_66700169958a5a55432dd47_00072509 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container">
        <div class="row main">
            <div class="main-login main-center">
                <form class="" method="post" action="" id="register">

                    <div class="form-group">
                        <label for="email" class="cols-sm-2 control-label">Your Email</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password" class="cols-sm-2 control-label">Password</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                <input type="password" class="form-control" name="pass" id="pass"  placeholder="Enter your Password"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group ">
                        <button type="submit" id="button" form="register" class="btn btn-primary btn-lg btn-block login-button">Register</button>
                    </div>
                    <a href="index.php?action=login">Login</a>
                </form>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "body"} */
}
