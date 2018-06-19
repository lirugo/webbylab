<?php
/* Smarty version 3.1.32, created on 2018-06-19 10:13:12
  from 'C:\OSPanel\domains\webbylab\app\smarty\templates\app\film\show.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b28ad081b8da5_94646833',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34b30733e64baee19adeadabf3e121b3643e92ba' => 
    array (
      0 => 'C:\\OSPanel\\domains\\webbylab\\app\\smarty\\templates\\app\\film\\show.tpl',
      1 => 1529392389,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b28ad081b8da5_94646833 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2575334525b28ad08111344_35678782', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../../_includes/_layouts/app.tpl");
}
/* {block 'content'} */
class Block_2575334525b28ad08111344_35678782 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2575334525b28ad08111344_35678782',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <img class="card-img-top" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22286%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20286%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1640858fe8f%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1640858fe8f%22%3E%3Crect%20width%3D%22286%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22107.203125%22%20y%3D%2296.3%22%3E286x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image cap">
                    <span class="badge badge-info"><?php echo $_smarty_tpl->tpl_vars['film']->value[0]['release_date'];?>
 | <?php echo $_smarty_tpl->tpl_vars['film']->value[0]['format'];?>
</span>
                    <div class="card-head">
                        <h5 class="card-title text-center m-t-10"><?php echo $_smarty_tpl->tpl_vars['film']->value[0]['name'];?>
</h5>
                                            </div>
                </div>
            </div>
        </div>
        <div class="row m-t-25">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-head bg-info">
                        <h5 class="card-title text-center m-t-10">Description</h5>
                    </div>
                    <div class="card-body">
                        Block for description
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-head bg-info">
                        <h5 class="card-title text-center m-t-10">List of actors</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <?php if ($_smarty_tpl->tpl_vars['actors']->value) {?>
                            <?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? count($_smarty_tpl->tpl_vars['actors']->value)+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['actors']->value))+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 0, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration === 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration === $_smarty_tpl->tpl_vars['foo']->total;?>
                                <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['actors']->value[$_smarty_tpl->tpl_vars['foo']->value]['name'];?>
</li>
                            <?php }
}
?>
                            <?php } else { ?>
                                No actors added, you can be the first.
                            <?php }?>

                        </ul>
                    </div>

                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-head bg-info">
                        <h5 class="card-title text-center m-t-10">Add actors</h5>
                    </div>
                    <div class="card-body">
                        <form action="/app/index.php?controller=film&action=addActor" method="POST">
                            <input name="id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['film']->value[0]['id'];?>
"/>
                            <input name="name" class="form-control" placeholder="Input actor name" required/>
                            <button type="submit" class="btn btn-success m-t-10">Add actor</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
}
}
/* {/block 'content'} */
}
