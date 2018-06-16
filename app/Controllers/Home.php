<?php

namespace App\Controllers;

class Home extends BaseController{

    function index(){
        $this->tpl->assign('header', 'Welocome home');
        $this->tpl->display('home/index.tpl');
    }
}