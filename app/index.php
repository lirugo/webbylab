<?php

ini_set('display_errors',1);

//-----------------------------------------------------
// Autoload without composer
//-----------------------------------------------------
//require_once('autoload.php');
//require_once('constants.php');

//-----------------------------------------------------
// Autoload with composer
//-----------------------------------------------------
require_once('../vendor/autoload.php');

$test = new \App\Classes\Test;