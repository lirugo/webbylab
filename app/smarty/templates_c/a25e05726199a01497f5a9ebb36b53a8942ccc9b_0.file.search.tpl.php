<?php
/* Smarty version 3.1.32, created on 2018-06-19 10:10:51
  from 'C:\OSPanel\domains\webbylab\app\smarty\templates\app\film\search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b28ac7b608571_96838037',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a25e05726199a01497f5a9ebb36b53a8942ccc9b' => 
    array (
      0 => 'C:\\OSPanel\\domains\\webbylab\\app\\smarty\\templates\\app\\film\\search.tpl',
      1 => 1529332460,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b28ac7b608571_96838037 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19157049755b28ac7b4f8d71_45706259', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20505885975b28ac7b4f9b03_88236591', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../../_includes/_layouts/app.tpl");
}
/* {block 'title'} */
class Block_19157049755b28ac7b4f8d71_45706259 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_19157049755b28ac7b4f8d71_45706259',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Search<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_20505885975b28ac7b4f9b03_88236591 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20505885975b28ac7b4f9b03_88236591',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="container">
        <?php if ($_smarty_tpl->tpl_vars['filmsByName']->value) {?>
            <div class="row m-t-10">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body text-center bg-success">
                            Search by film name
                        </div>
                    </div>
                </div>
            </div>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filmsByName']->value, 'film', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['film']->value) {
?>
                <div class="row m-t-10">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <?php echo $_smarty_tpl->tpl_vars['film']->value['name'];?>
 | <?php echo $_smarty_tpl->tpl_vars['film']->value['format'];?>
 | <?php echo $_smarty_tpl->tpl_vars['film']->value['release_date'];?>

                                <a href="/app/index.php?controller=film&action=show&id=<?php echo $_smarty_tpl->tpl_vars['film']->value['id'];?>
"><span class="btn btn-sm btn-primary pull-right">Details</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['filmsByActorName']->value) {?>
            <div class="row m-t-10">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body text-center bg-success">
                            Search by actor in films
                        </div>
                    </div>
                </div>
            </div>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filmsByActorName']->value, 'film', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['film']->value) {
?>
                <div class="row m-t-10">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <?php echo $_smarty_tpl->tpl_vars['film']->value['name'];?>
 | <?php echo $_smarty_tpl->tpl_vars['film']->value['format'];?>
 | <?php echo $_smarty_tpl->tpl_vars['film']->value['release_date'];?>

                                <a href="/app/index.php?controller=film&action=show&id=<?php echo $_smarty_tpl->tpl_vars['film']->value['id'];?>
"><span class="btn btn-sm btn-primary pull-right">Details</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php } else { ?>
            <div class="row m-t-10">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body text-center bg-warning">
                            Sorry we don't have this film. But u can
                            <a href="/app/index.php?controller=film&action=create"><span class="btn btn-sm btn-success">Add film</span></a>
                        </div>
                    </div>
                </div>
            </div>
        <?php }?>



    </div>

<?php
}
}
/* {/block 'content'} */
}
