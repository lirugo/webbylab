<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{block name=title}Home{/block} | Films</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link href="./smarty/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="./smarty/css/footer.css" rel="stylesheet" type="text/css"/>
    {block name=stylesheets}{/block}
</head>
<body>

<div id="app">
    {*Navigation menu*}
    {include file='../../_includes/nav/top.tpl'}

    {*Block content*}
    {block name=content}
        Default Content
    {/block}

    {*Footer*}
    {include file='../../_includes/footer/index.tpl'}
</div>

<script src="./smarty/js/scripts.js"></script>
{block name=scripts}{/block}
</body>
</html>