<?php
/* Smarty version 3.1.30, created on 2017-02-17 19:45:33
  from "/Users/antonbelykh/code/sandbox/www/commentsv2.local/comments.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a744cddb96b6_23651312',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af30fc60fb55c58e418ab8e234065e8dcd74ffa3' => 
    array (
      0 => '/Users/antonbelykh/code/sandbox/www/commentsv2.local/comments.tpl',
      1 => 1487357131,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a744cddb96b6_23651312 (Smarty_Internal_Template $_smarty_tpl) {
?>

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
    </div>
    <?php }
}
