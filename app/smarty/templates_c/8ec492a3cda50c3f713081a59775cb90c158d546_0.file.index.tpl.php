<?php
/* Smarty version 3.1.32, created on 2018-06-20 15:04:37
  from 'C:\OSPanel\domains\webbylab\app\smarty\templates\app\film\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b2a42d5aa3a83_31365663',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ec492a3cda50c3f713081a59775cb90c158d546' => 
    array (
      0 => 'C:\\OSPanel\\domains\\webbylab\\app\\smarty\\templates\\app\\film\\index.tpl',
      1 => 1529496276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b2a42d5aa3a83_31365663 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16206051675b2a42d59a9649_11565882', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10976022775b2a42d59aa317_90349736', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../../_includes/_layouts/app.tpl");
}
/* {block 'title'} */
class Block_16206051675b2a42d59a9649_11565882 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_16206051675b2a42d59a9649_11565882',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Show<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_10976022775b2a42d59aa317_90349736 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10976022775b2a42d59aa317_90349736',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="container">
        <div class="row">
            <?php if ($_smarty_tpl->tpl_vars['films']->value) {?>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="/app/index.php?controller=film&action=index&sort=release_date&dir=DESC" class="btn btn-primary">New first</a>
                            <a href="/app/index.php?controller=film&action=index&sort=release_date&dir=ASC" class="btn btn-primary">Old first</a>
                            <a href="/app/index.php?controller=film&action=index&sort=name&dir=ASC" class="btn btn-primary">From A to Z</a>
                            <a href="/app/index.php?controller=film&action=index&sort=name&dir=DESC" class="btn btn-primary">From Z to A</a>
                        </div>
                    </div>
                </div>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['films']->value, 'film', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['film']->value) {
?>
                    <div class="col-md-3 m-t-25">
                        <div class="card">
                            <img class="card-img-top" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22286%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20286%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1640858fe8f%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1640858fe8f%22%3E%3Crect%20width%3D%22286%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22107.203125%22%20y%3D%2296.3%22%3E286x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image cap">
                            <span class="badge badge-info"><?php echo $_smarty_tpl->tpl_vars['film']->value['release_date'];?>
 | <?php echo $_smarty_tpl->tpl_vars['film']->value['format'];?>
</span>
                            <div class="card-body">
                                <h5 class="card-title text-center"><?php echo $_smarty_tpl->tpl_vars['film']->value['name'];?>
</h5>
                                                            </div>
                            <ul class="list-group list-group-flush">
                                <?php if ($_smarty_tpl->tpl_vars['film']->value['actors']) {?>
                                    <?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? count($_smarty_tpl->tpl_vars['film']->value['actors'])-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['film']->value['actors'])-1)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 0, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration === 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration === $_smarty_tpl->tpl_vars['foo']->total;?>
                                        <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['film']->value['actors'][$_smarty_tpl->tpl_vars['foo']->value]['name'];?>
</li>
                                    <?php }
}
?>
                                <?php } else { ?>
                                    <li class="list-group-item">No actors added yet...</li>
                                <?php }?>
                            </ul>
                            <a href="/app/index.php?controller=film&action=show&id=<?php echo $_smarty_tpl->tpl_vars['film']->value['id'];?>
" class="btn btn-outline-success">Details</a>
                        </div>
                    </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php } else { ?>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body text-center bg-warning">
                            Sorry we don't have any films yet... But u can
                            <a href="/app/index.php?controller=film&action=create"><span class="btn btn-sm btn-success">Add film</span></a>
                            or
                            <a href="/app/index.php?controller=film&action=import"><span class="btn btn-sm btn-success">Import</span></a>

                        </div>
                    </div>
                </div>
            <?php }?>

        </div>
    </div>

<?php
}
}
/* {/block 'content'} */
}
