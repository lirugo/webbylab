<?php
/* Smarty version 3.1.32, created on 2018-06-18 17:51:14
  from 'C:\OSPanel\domains\webbylab\app\smarty\templates\_includes\_layouts\app.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b27c6e225ac17_30880455',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '503fc9ec3649bf4339b2ea850542df885135ad0e' => 
    array (
      0 => 'C:\\OSPanel\\domains\\webbylab\\app\\smarty\\templates\\_includes\\_layouts\\app.tpl',
      1 => 1529333471,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../_includes/nav/top.tpl' => 1,
    'file:../../_includes/footer/index.tpl' => 1,
  ),
),false)) {
function content_5b27c6e225ac17_30880455 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3174553325b27c6e2251145_76729493', 'title');
?>
 | Films</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link href="./smarty/static/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="./smarty/static/css/overrides.css" rel="stylesheet" type="text/css"/>
    <link href="./smarty/static/css/footer.css" rel="stylesheet" type="text/css"/>
    <link href="./smarty/static/css/font-awesome.css" rel="stylesheet" type="text/css"/>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21076444315b27c6e2254c52_69678525', 'stylesheets');
?>

</head>
<body>

<div id="app">
        <?php $_smarty_tpl->_subTemplateRender('file:../../_includes/nav/top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="content">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1133356855b27c6e22598c3_79696807', 'content');
?>

    </div>

        <?php $_smarty_tpl->_subTemplateRender('file:../../_includes/footer/index.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>


<?php echo '<script'; ?>

        src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous">
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="./smarty/static/js/scripts.js"><?php echo '</script'; ?>
>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_432228755b27c6e225a567_15905512', 'scripts');
?>

</body>
</html><?php }
/* {block 'title'} */
class Block_3174553325b27c6e2251145_76729493 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_3174553325b27c6e2251145_76729493',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Home<?php
}
}
/* {/block 'title'} */
/* {block 'stylesheets'} */
class Block_21076444315b27c6e2254c52_69678525 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'stylesheets' => 
  array (
    0 => 'Block_21076444315b27c6e2254c52_69678525',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'stylesheets'} */
/* {block 'content'} */
class Block_1133356855b27c6e22598c3_79696807 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1133356855b27c6e22598c3_79696807',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
/* {block 'scripts'} */
class Block_432228755b27c6e225a567_15905512 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_432228755b27c6e225a567_15905512',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'scripts'} */
}
