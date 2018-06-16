<?php
/* Smarty version 3.1.32, created on 2018-06-16 14:35:12
  from 'C:\OSPanel\domains\webbylab\app\smarty\templates\home\film\show.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b24f5f05c57c9_55378565',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e871c7522edf7056bcb0dc6f714a2ff2dc8a023c' => 
    array (
      0 => 'C:\\OSPanel\\domains\\webbylab\\app\\smarty\\templates\\home\\film\\show.tpl',
      1 => 1529148911,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b24f5f05c57c9_55378565 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10909265645b24f5f05b7350_04437767', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../../_includes/_layouts/app.tpl");
}
/* {block 'content'} */
class Block_10909265645b24f5f05b7350_04437767 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10909265645b24f5f05b7350_04437767',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="container">
        <div class="row">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['films']->value, 'film', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['film']->value) {
?>
                <div class="col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22286%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20286%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1640858fe8f%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1640858fe8f%22%3E%3Crect%20width%3D%22286%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22107.203125%22%20y%3D%2296.3%22%3E286x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-center"><?php echo $_smarty_tpl->tpl_vars['film']->value['name'];?>
</h5>
                                                        <span class="badge badge-info"><?php echo $_smarty_tpl->tpl_vars['film']->value['release_date'];?>
 | <?php echo $_smarty_tpl->tpl_vars['film']->value['format'];?>
</span>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">John Doe</li>
                            <li class="list-group-item">John Doe</li>
                            <li class="list-group-item">John Doe</li>
                            <li class="list-group-item">John Doe</li>
                        </ul>
                        <a href="#" class="btn btn-outline-success">Details</a>
                    </div>
                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>

<?php
}
}
/* {/block 'content'} */
}
