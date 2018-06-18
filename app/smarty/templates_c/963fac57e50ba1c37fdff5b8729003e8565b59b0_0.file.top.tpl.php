<?php
/* Smarty version 3.1.32, created on 2018-06-18 15:32:09
  from 'C:\OSPanel\domains\webbylab\app\smarty\templates\_includes\nav\top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b27a649798d19_87124654',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '963fac57e50ba1c37fdff5b8729003e8565b59b0' => 
    array (
      0 => 'C:\\OSPanel\\domains\\webbylab\\app\\smarty\\templates\\_includes\\nav\\top.tpl',
      1 => 1529325128,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b27a649798d19_87124654 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-expand-lg navbar-dark bg-dark m-b-50">
    <a class="navbar-brand" href="#">Films</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/app/index.php?controller=home&action=index">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/app/index.php?controller=film&action=create">Add film</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/app/index.php?controller=film&action=index">Show films</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Import films</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav><?php }
}
