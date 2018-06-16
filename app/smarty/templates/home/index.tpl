<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
{foreach from=$films key=k item=i}
    Film: {$i.name} <br/>
{/foreach}
</body>
</html>