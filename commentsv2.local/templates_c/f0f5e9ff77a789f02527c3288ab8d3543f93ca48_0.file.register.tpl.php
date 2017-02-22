<?php
/* Smarty version 3.1.30, created on 2017-02-22 19:28:12
  from "/Users/antonbelykh/code/sandbox/www/commentsv2.local/views/register.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58add83ca3e230_43110593',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0f5e9ff77a789f02527c3288ab8d3543f93ca48' => 
    array (
      0 => '/Users/antonbelykh/code/sandbox/www/commentsv2.local/views/register.tpl',
      1 => 1487788090,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_58add83ca3e230_43110593 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_45808383158add83ca39b36_68729538', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_118248113758add83ca3b844_34317402', "css");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_154474960258add83ca3c8f9_06994726', "h1");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_90823484858add83ca3d8d7_56881994', "body");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "title"} */
class Block_45808383158add83ca39b36_68729538 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Register page<?php
}
}
/* {/block "title"} */
/* {block "css"} */
class Block_118248113758add83ca3b844_34317402 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<link rel="stylesheet" href="style.css"><?php
}
}
/* {/block "css"} */
/* {block "h1"} */
class Block_154474960258add83ca3c8f9_06994726 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Register page<?php
}
}
/* {/block "h1"} */
/* {block "body"} */
class Block_90823484858add83ca3d8d7_56881994 extends Smarty_Internal_Block
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
