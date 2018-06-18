<?php

namespace App\Controllers;

use App\Models\FilmModel;
use http\Env\Request;

class Film extends BaseController{

    function index(){
        $model = new FilmModel();
        $films = $model->getFilms();

//        echo '<pre>';
//        var_dump($films);
        if($films)
            $this->tpl->assign('films', $films);

        $this->tpl->display('home/film/index.tpl');
    }

    function show(){
        $model = new FilmModel();

        $film = $model->getFilm($_GET['id']);

        if($film == NULL)
            header("Location: /app/index.php?controller=film&action=index");

        $actrors = $model->getActors($_GET['id']);

        //Assign data in view
        if($film)
            $this->tpl->assign('film', $film);
        if($actrors)
            $this->tpl->assign('actors', $actrors);

        $this->tpl->display('home/film/show.tpl');
    }

    function create(){
        $this->tpl->display('home/film/create.tpl');
    }

    function postCreate(){
        $film = new FilmModel();

        if($film->addFilm()){
            //Flash msg

            //Redirect
            header("Location: /app/index.php?controller=film&action=index");
        }
        else
            header("Location: /app/index.php?controller=film&action=index");
    }

    function addActor(){
        $id = $_POST['id'];
        $name = $_POST['name'];

        //Validate

        $model = new FilmModel();
        $model->addActor($id, $name);

        header("Location: /app/index.php?controller=film&action=show&id=".$id);
    }

    function search(){
        $this->tpl->display('home/film/search.tpl');
    }

}