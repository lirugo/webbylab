<?php
/* Smarty version 3.1.32, created on 2018-06-16 12:57:02
  from 'C:\OSPanel\domains\webbylab\app\smarty\templates\_includes\_layouts\app.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b24deee52b304_27762978',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '503fc9ec3649bf4339b2ea850542df885135ad0e' => 
    array (
      0 => 'C:\\OSPanel\\domains\\webbylab\\app\\smarty\\templates\\_includes\\_layouts\\app.tpl',
      1 => 1529142946,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../_includes/nav/top.tpl' => 1,
    'file:../../_includes/footer/index.tpl' => 1,
  ),
),false)) {
function content_5b24deee52b304_27762978 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11869277835b24deee499645_12846898', 'title');
?>
 | Films</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link href="./smarty/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="./smarty/css/footer.css" rel="stylesheet" type="text/css"/>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15689478685b24deee4c7191_65888377', 'stylesheets');
?>

</head>
<body>

<div id="app">
        <?php $_smarty_tpl->_subTemplateRender('file:../../_includes/nav/top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19445765605b24deee529eb4_26750626', 'content');
?>


        <?php $_smarty_tpl->_subTemplateRender('file:../../_includes/footer/index.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>

<?php echo '<script'; ?>
 src="./smarty/js/scripts.js"><?php echo '</script'; ?>
>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14378617185b24deee52ad52_22244335', 'scripts');
?>

</body>
</html><?php }
/* {block 'title'} */
class Block_11869277835b24deee499645_12846898 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_11869277835b24deee499645_12846898',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Home<?php
}
}
/* {/block 'title'} */
/* {block 'stylesheets'} */
class Block_15689478685b24deee4c7191_65888377 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'stylesheets' => 
  array (
    0 => 'Block_15689478685b24deee4c7191_65888377',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'stylesheets'} */
/* {block 'content'} */
class Block_19445765605b24deee529eb4_26750626 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19445765605b24deee529eb4_26750626',
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
class Block_14378617185b24deee52ad52_22244335 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_14378617185b24deee52ad52_22244335',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'scripts'} */
}
