<?php
/* Smarty version 3.1.30, created on 2017-02-16 14:02:14
  from "/Users/antonbelykh/code/sandbox/www/commentsv2.local/views/login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a5a2d6c8e5f5_32867890',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '330801fa0e5840d42fbcdc24f9a64854aec11df2' => 
    array (
      0 => '/Users/antonbelykh/code/sandbox/www/commentsv2.local/views/login.tpl',
      1 => 1487250132,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_58a5a2d6c8e5f5_32867890 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_121342540558a5a2d6c8a3b2_00328974', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_72983894458a5a2d6c8baa5_13048907', "css");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_58296149758a5a2d6c8cd22_68247665', "h1");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_147292010758a5a2d6c8df98_41149226', "body");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "title"} */
class Block_121342540558a5a2d6c8a3b2_00328974 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Login page<?php
}
}
/* {/block "title"} */
/* {block "css"} */
class Block_72983894458a5a2d6c8baa5_13048907 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<link rel="stylesheet" href="style.css"><?php
}
}
/* {/block "css"} */
/* {block "h1"} */
class Block_58296149758a5a2d6c8cd22_68247665 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Login page<?php
}
}
/* {/block "h1"} */
/* {block "body"} */
class Block_147292010758a5a2d6c8df98_41149226 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container">
        <div class="row main">
            <div class="main-login main-center">
                <form class="" method="post" action="" id="login">

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
                        <label for="pass" class="cols-sm-2 control-label">Password</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                <input type="password" class="form-control" name="pass" id="pass"  placeholder="Enter your Password"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group ">
                        <button type="submit" id="button" form="login" class="btn btn-primary btn-lg btn-block login-button">Login</button>
                    </div>

                </form>
                <a href="index.php?action=register">Register</a>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "body"} */
}
