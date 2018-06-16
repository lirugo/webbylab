<?php

namespace App\Controllers;

use App\Models\HomeModel;
use http\Env\Request;

class Home extends BaseController{

    function index(){
        $this->tpl->display('home/index.tpl');
    }

    function show(){
        $model = new HomeModel();
        $films = $model->getFilms();

//        echo '<pre>';
//        var_dump($films);
        if($films)
            $this->tpl->assign('films', $films);

        $this->tpl->display('home/film/show.tpl');
    }

    function create(){
        $this->tpl->display('home/film/create.tpl');
    }

    function postCreate(){

       $film = new HomeModel();

       if($film->save()){
          //Flash msg

          //Redirect
          header("Location: {$_SERVER['HTTP_REFERER']}");
       }
       else
           header("Location: /app/index.php?controller=home&action=create");
    }
}