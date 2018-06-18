<?php

namespace App\Controllers;

use App\Models\HomeModel;
use http\Env\Request;

class Home extends BaseController{

    function index(){
        $this->tpl->display('home/index.tpl');
    }

}