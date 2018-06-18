<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{block name=title}Home{/block} | Films</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link href="./smarty/static/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="./smarty/static/css/overrides.css" rel="stylesheet" type="text/css"/>
    <link href="./smarty/static/css/footer.css" rel="stylesheet" type="text/css"/>
    <link href="./smarty/static/css/font-awesome.css" rel="stylesheet" type="text/css"/>
    {block name=stylesheets}{/block}
</head>
<body>

<div id="app">
    {*Navigation menu*}
    {include file='../../_includes/nav/top.tpl'}

    <div class="content">
        {*Block content*}
        {block name=content}{/block}
    </div>

    {*Footer*}
    {include file='../../_includes/footer/index.tpl'}
</div>


<script
        src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous">
</script>
<script src="./smarty/static/js/scripts.js"></script>
{block name=scripts}{/block}
</body>
</html>