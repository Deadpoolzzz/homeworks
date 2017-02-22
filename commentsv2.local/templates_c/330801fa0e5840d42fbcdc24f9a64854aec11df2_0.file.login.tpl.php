<?php
/* Smarty version 3.1.30, created on 2017-02-22 16:54:08
  from "/Users/antonbelykh/code/sandbox/www/commentsv2.local/views/login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58adb42035a544_60221203',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '330801fa0e5840d42fbcdc24f9a64854aec11df2' => 
    array (
      0 => '/Users/antonbelykh/code/sandbox/www/commentsv2.local/views/login.tpl',
      1 => 1487778844,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_58adb42035a544_60221203 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_157314699658adb420349004_62664354', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12384569558adb420349f86_68291428', "css");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_119545409458adb42034ad20_52620377', "h1");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_82587954658adb420359710_83032472', "body");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "title"} */
class Block_157314699658adb420349004_62664354 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Login page<?php
}
}
/* {/block "title"} */
/* {block "css"} */
class Block_12384569558adb420349f86_68291428 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<link rel="stylesheet" href="style.css"><?php
}
}
/* {/block "css"} */
/* {block "h1"} */
class Block_119545409458adb42034ad20_52620377 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Login page<?php
}
}
/* {/block "h1"} */
/* {block "body"} */
class Block_82587954658adb420359710_83032472 extends Smarty_Internal_Block
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
                                <input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"
                                       value="<?php if (isset($_smarty_tpl->tpl_vars['email']->value)) {
echo $_smarty_tpl->tpl_vars['email']->value;
}?>"/>
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
            <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
                <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

            <?php }?>
        </div>
    </div>

    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default panel-table">
            <div class="panel-heading">
                <span class="row">
                    <table class="table table-hover">
                        <thead>
                        <th class="info"><span class="label label-info">Username</span></th>
                        <th class="info"><span class="label label-info">Comment</span></th>
                        <th class="info"><span class="label label-info">Date</span></th>
                        </thead>
                        <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['array']->value, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value) {
?>
                            <tr>
                                <td class="info"><?php echo $_smarty_tpl->tpl_vars['key']->value['username'];?>
</td>
                                <td class="info"><?php echo $_smarty_tpl->tpl_vars['key']->value['article'];?>
</td>
                                <td class="info"><?php echo $_smarty_tpl->tpl_vars['key']->value['date_created'];?>
</td>
                            </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </tbody>
                    </table>
            </div>
        </div>
    </div>

<?php
}
}
/* {/block "body"} */
}
