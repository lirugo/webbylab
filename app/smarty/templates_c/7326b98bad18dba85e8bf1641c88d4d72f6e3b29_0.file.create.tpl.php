<?php
/* Smarty version 3.1.32, created on 2018-06-16 22:01:43
  from 'C:\OSPanel\domains\webbylab\app\smarty\templates\home\film\create.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b255e979687a6_12882412',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7326b98bad18dba85e8bf1641c88d4d72f6e3b29' => 
    array (
      0 => 'C:\\OSPanel\\domains\\webbylab\\app\\smarty\\templates\\home\\film\\create.tpl',
      1 => 1529175699,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b255e979687a6_12882412 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13386514235b255e9795b5c0_96269463', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../../_includes/_layouts/app.tpl");
}
/* {block 'content'} */
class Block_13386514235b255e9795b5c0_96269463 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_13386514235b255e9795b5c0_96269463',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <form action="/app/index.php?controller=home&action=postCreate&" method="POST">
                        <input name="name" type="text" class="form-control m-t-10" placeholder="Film name" required>
                        <input name="release_date" type="text" class="form-control m-t-10" placeholder="Release date" required>
                        <select name="format" class="form-control m-t-10" required>
                            <option value="">Select format</option>
                            <option value="VHS">VHS</option>
                            <option value="DVD">DVD</option>
                            <option value="Blu-Ray">Blu-Ray</option>
                        </select>
                        <button type="submit" class="btn btn-outline-success m-t-10">Add film</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php
}
}
/* {/block 'content'} */
}
