<?php
/* Smarty version 3.1.32, created on 2018-06-18 17:56:19
  from 'C:\OSPanel\domains\webbylab\app\smarty\templates\app\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b27c81372a725_62686271',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c1531a96d755f6bde0bbdb3eb9471c80cbe9873' => 
    array (
      0 => 'C:\\OSPanel\\domains\\webbylab\\app\\smarty\\templates\\app\\index.tpl',
      1 => 1529144683,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b27c81372a725_62686271 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19860544275b27c813729681_98655241', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../_includes/_layouts/app.tpl");
}
/* {block 'content'} */
class Block_19860544275b27c813729681_98655241 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19860544275b27c813729681_98655241',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card" >
                    <img class="card-img-top" src="https://cdn.dribbble.com/users/1693462/screenshots/3499903/3quality-icon.gif" alt="Hello image-outline-" loop=infinite>
                    <div class="card-body  text-center">
                        <h5 class="card-title">Hello on our portal</h5>

                                                <a href="#" class="btn btn-outline-primary text-center">Add film</a>
                        <a href="#" class="btn btn-outline-primary">Show films</a>
                        <a href="#" class="btn btn-outline-primary">Import film</a>
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
