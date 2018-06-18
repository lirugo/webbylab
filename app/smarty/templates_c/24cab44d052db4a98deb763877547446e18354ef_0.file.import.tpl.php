<?php
/* Smarty version 3.1.32, created on 2018-06-18 18:07:13
  from 'C:\OSPanel\domains\webbylab\app\smarty\templates\app\film\import.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b27caa1298786_15311374',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24cab44d052db4a98deb763877547446e18354ef' => 
    array (
      0 => 'C:\\OSPanel\\domains\\webbylab\\app\\smarty\\templates\\app\\film\\import.tpl',
      1 => 1529334430,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b27caa1298786_15311374 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_571695145b27caa1297463_94585316', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2963367375b27caa12980a1_76463261', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../../_includes/_layouts/app.tpl");
}
/* {block 'title'} */
class Block_571695145b27caa1297463_94585316 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_571695145b27caa1297463_94585316',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Import<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_2963367375b27caa12980a1_76463261 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2963367375b27caa12980a1_76463261',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="container">
        <div class="row">
           <div class="col-md-6 offset-md-3">
               <div class="card">
                   <div class="card-body">
                       <form class="form-inline">
                           <div class="form-group">
                               <button type="submit" class="btn btn-success pull-right m-r-10">Upload</button>
                           </div>
                           <div class="form-group">
                               <input type="file" name="file" accept=".txt" required>
                           </div>
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
