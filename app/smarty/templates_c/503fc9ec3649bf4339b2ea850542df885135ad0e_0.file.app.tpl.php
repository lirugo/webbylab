<?php
/* Smarty version 3.1.32, created on 2018-06-16 12:53:45
  from 'C:\OSPanel\domains\webbylab\app\smarty\templates\_includes\_layouts\app.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b24de295979b9_66477554',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '503fc9ec3649bf4339b2ea850542df885135ad0e' => 
    array (
      0 => 'C:\\OSPanel\\domains\\webbylab\\app\\smarty\\templates\\_includes\\_layouts\\app.tpl',
      1 => 1529142823,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../_includes/nav/top.tpl' => 1,
    'file:../../_includes/footer/index.tpl' => 1,
  ),
),false)) {
function content_5b24de295979b9_66477554 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4378083845b24de29588a75_12557668', 'title');
?>
 | Films</title>
    <link href="./smarty/css/style.css" rel="stylesheet" type="text/css"/>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6545927805b24de2958acf3_60942518', 'stylesheets');
?>

</head>
<body>

<div id="app">
        <?php $_smarty_tpl->_subTemplateRender('file:../../_includes/nav/top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8295362185b24de29590802_57836356', 'content');
?>


        <?php $_smarty_tpl->_subTemplateRender('file:../../_includes/footer/index.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>

<?php echo '<script'; ?>
 src="./smarty/js/scripts.js"><?php echo '</script'; ?>
>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15469095795b24de29595499_63169810', 'scripts');
?>

</body>
</html><?php }
/* {block 'title'} */
class Block_4378083845b24de29588a75_12557668 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_4378083845b24de29588a75_12557668',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Home<?php
}
}
/* {/block 'title'} */
/* {block 'stylesheets'} */
class Block_6545927805b24de2958acf3_60942518 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'stylesheets' => 
  array (
    0 => 'Block_6545927805b24de2958acf3_60942518',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'stylesheets'} */
/* {block 'content'} */
class Block_8295362185b24de29590802_57836356 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8295362185b24de29590802_57836356',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        Default Content
    <?php
}
}
/* {/block 'content'} */
/* {block 'scripts'} */
class Block_15469095795b24de29595499_63169810 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_15469095795b24de29595499_63169810',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'scripts'} */
}
