<?php
/* Smarty version 3.1.32, created on 2018-06-19 09:48:53
  from 'C:\OSPanel\domains\webbylab\app\smarty\templates\app\film\create.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b28a7559d04a1_57528573',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fce523c8522737a40e6d38a69a2c8ee47913185b' => 
    array (
      0 => 'C:\\OSPanel\\domains\\webbylab\\app\\smarty\\templates\\app\\film\\create.tpl',
      1 => 1529390932,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b28a7559d04a1_57528573 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2518280785b28a7559c5775_83596187', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8475511275b28a7559ca2a9_46782476', 'stylesheets');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_377154875b28a7559cca74_12889727', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20503161055b28a7559ce5c3_78174896', 'scripts');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../../_includes/_layouts/app.tpl");
}
/* {block 'title'} */
class Block_2518280785b28a7559c5775_83596187 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_2518280785b28a7559c5775_83596187',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Add<?php
}
}
/* {/block 'title'} */
/* {block 'stylesheets'} */
class Block_8475511275b28a7559ca2a9_46782476 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'stylesheets' => 
  array (
    0 => 'Block_8475511275b28a7559ca2a9_46782476',
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
class Block_377154875b28a7559cca74_12889727 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_377154875b28a7559cca74_12889727',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Add new film
                    </div>
                    <div class="card-body">
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
        </div>
    </div>

<?php
}
}
/* {/block 'content'} */
/* {block 'scripts'} */
class Block_20503161055b28a7559ce5c3_78174896 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_20503161055b28a7559ce5c3_78174896',
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
