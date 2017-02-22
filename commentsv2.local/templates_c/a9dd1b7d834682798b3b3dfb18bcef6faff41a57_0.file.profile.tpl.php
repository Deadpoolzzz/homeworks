<?php
/* Smarty version 3.1.30, created on 2017-02-22 19:47:08
  from "/Users/antonbelykh/code/sandbox/www/commentsv2.local/views/profile.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58addcac670665_04260727',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9dd1b7d834682798b3b3dfb18bcef6faff41a57' => 
    array (
      0 => '/Users/antonbelykh/code/sandbox/www/commentsv2.local/views/profile.tpl',
      1 => 1487789160,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_58addcac670665_04260727 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_128065983858addcac660fc9_60518316', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_109614972858addcac661f31_33832254', "css");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_109856634958addcac66ff55_76779533', "body");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "title"} */
class Block_128065983858addcac660fc9_60518316 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Login page<?php
}
}
/* {/block "title"} */
/* {block "css"} */
class Block_109614972858addcac661f31_33832254 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<link rel="stylesheet" href="style.css"><?php
}
}
/* {/block "css"} */
/* {block "body"} */
class Block_109856634958addcac66ff55_76779533 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if (isset($_SESSION['name'])) {?>
        <h1 class="title">Welcome to profile</h1>
    <div class="container">
        <div class="row main">
            <span class="label label-warning">You're logged as: <?php echo $_SESSION['name'];?>
</span> <br>
        <div class="container">
        <div class="row main">
            <div class="main-login main-center">
                <form class="" method="post" action="" id="comment">

                    <div class="form-group">
                        <label for="email" class="cols-sm-2 control-label">Your comment</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-commenting" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="addComment" id="addComment"  placeholder="Enter your comment" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <button type="submit" id="button" form="comment" class="btn btn-primary btn-lg btn-block login-button">Add comment</button>
                    </div>
                    <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
                        <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

                    <?php }?>

            <a href='index.php?action=logout'>Logout</a>
                </form>
        </div>
    </div>
        <?php } else { ?>
            <div class="container">
                <div class="row main">
                    <span class="label label-danger"> <a href='index.php?action=login'>This page is restricted, please log in</a></span>
                </div>
            </div>
    <?php }?>
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
