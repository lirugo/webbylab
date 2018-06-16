<?php

ini_set('display_errors',1);

//-----------------------------------------------------
// Config db
//-----------------------------------------------------
$GLOBALS['config'] = [
    'mysql' => [
        'host' => 'localhost',
        'database' => 'webbylab',
        'username' => 'root',
        'password' => ''
    ]
];

//-----------------------------------------------------
// Autoload without composer
//-----------------------------------------------------
//require_once('autoload.php');
//require_once('constants.php');

//-----------------------------------------------------
// Autoload with composer
//-----------------------------------------------------
require_once('../vendor/autoload.php');

require_once('./Loader.php');

//Load smarty
require_once('./smarty/Smarty.class.php');



$expected_controllers = ['index', 'home'];

if(!empty($_GET)){
    if([$_GET['controller'], $expected_controllers]){
        $controller = new Loader($_GET);
        $controller = $controller->createController();
        $controller->executeAction();
    }
}