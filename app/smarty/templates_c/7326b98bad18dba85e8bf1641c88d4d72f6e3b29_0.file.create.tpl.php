<?php
/* Smarty version 3.1.32, created on 2018-06-18 15:31:45
  from 'C:\OSPanel\domains\webbylab\app\smarty\templates\home\film\create.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b27a631dd8841_38761524',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7326b98bad18dba85e8bf1641c88d4d72f6e3b29' => 
    array (
      0 => 'C:\\OSPanel\\domains\\webbylab\\app\\smarty\\templates\\home\\film\\create.tpl',
      1 => 1529325104,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b27a631dd8841_38761524 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6653516055b27a631dd6095_16235863', 'stylesheets');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1321889475b27a631dd70b7_55649970', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10727417965b27a631dd7df4_53682158', 'scripts');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../../_includes/_layouts/app.tpl");
}
/* {block 'stylesheets'} */
class Block_6653516055b27a631dd6095_16235863 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'stylesheets' => 
  array (
    0 => 'Block_6653516055b27a631dd6095_16235863',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link href="./smarty/static/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css"/>
<?php
}
}
/* {/block 'stylesheets'} */
/* {block 'content'} */
class Block_1321889475b27a631dd70b7_55649970 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1321889475b27a631dd70b7_55649970',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <form action="/app/index.php?controller=film&action=postCreate" method="POST">
                        <input name="name" type="text" class="form-control m-t-10" placeholder="Film name" required>

                        <div class="input-group date form_date m-t-10" data-date="" data-date-format="yyyy-mm-dd " data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                            <input class="form-control" name="release_date" size="16" type="text" value="" readonly placeholder="Select release date">
                            <div class="input-group-prepend">
                                <span class="input-group-addon input-group-text"><span class="glyphicon glyphicon-calendar fa fa-calendar"></span></span>
                            </div>
                        </div>
                        <input type="hidden" id="dtp_input2" value="" />

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
/* {block 'scripts'} */
class Block_10727417965b27a631dd7df4_53682158 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_10727417965b27a631dd7df4_53682158',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
 src="./smarty/static/js/bootstrap-datetimepicker.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        $('.form_date').datetimepicker({
            language:  'en',
            weekStart: 1,
            todayBtn:  1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 2,
            minView: 2,
            forceParse: 0
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'scripts'} */
}
