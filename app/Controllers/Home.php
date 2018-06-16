<?php

namespace App\Controllers;

use App\Models\HomeModel;

class Home extends BaseController{

    function index(){
        $this->tpl->display('home/index.tpl');
    }

    function show(){

        $model = new HomeModel();
        $films = $model->getFilms();
        if($films)
            $this->tpl->assign('films', $films);

        $this->tpl->display('home/film/show.tpl');
    }
}