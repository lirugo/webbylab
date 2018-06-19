<?php

namespace App\Controllers;

use App\Models\FilmModel;
use http\Env\Request;

class Film extends BaseController{

    function index(){
        $sort = $_GET['sort'];
        $dir = $_GET['dir'];

        $model = new FilmModel();
        $films = $model->getFilms($sort, $dir);

        if($films)
            for($i = 0; $i < count($films); $i++){
            $actors = $model->getActors($films[$i]['id']);
            $films[$i]['actors'] = $actors;
        }

        if($films)
            $this->tpl->assign('films', $films);

        $this->tpl->display('app/film/index.tpl');
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

        $this->tpl->display('app/film/show.tpl');
    }

    function create(){
        $this->tpl->display('app/film/create.tpl');
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

    function remove(){
        $model = new FilmModel();
        $film = $model->remove($_POST['id']);
        header("Location: /app/index.php?controller=film&action=index");
    }

    function search(){

        $model = new FilmModel();

        $filmsByName = $model->findByName($_POST['search']);

        $filmsByActorName = $model->findByActorName($_POST['search']);

        if($filmsByName)
            $this->tpl->assign('filmsByName', $filmsByName);

        if($filmsByActorName)
            $this->tpl->assign('filmsByActorName', $filmsByActorName);


        $this->tpl->display('app/film/search.tpl');
    }

    function import(){
        $this->tpl->display('app/film/import.tpl');
    }

    function postImport(){

        try{
            $fp = fopen($_FILES['file']['tmp_name'], 'rb');
            while ( ($line = fgets($fp)) !== false) {
                if(substr($line, 0,6) == 'Title:'){
                    //Get title
                    $title = trim(
                        substr(
                            $line,
                            strripos($line, ':')+1,
                            strlen($line)
                        )
                    );
                    //Get date
                    $line = fgets($fp);
                    $release_date = trim(
                        substr(
                            $line,
                            strripos($line, ':')+1,
                            strlen($line)
                        )
                    );
                    //Get format
                    $line = fgets($fp);
                    $format = trim(
                        substr(
                            $line,
                            strripos($line, ':')+1,
                            strlen($line)
                        )
                    );
                    //Get actors
                    $line = fgets($fp);
                    $actorsAll = trim(
                        substr(
                            $line,
                            strripos($line, ':')+1,
                            strlen($line)
                        )
                    );
                    //Get array of actors name
                    for($i=0; $i<strlen($actorsAll); $i++){
                        $name = '';
                        while($actorsAll[$i] != ","){
                            $name .= $actorsAll[$i];
                            $i++;
                            if($i > strlen($line))
                                break;
                        }
                        $name = trim($name);
                        $actors[] = $name;
                    }
                    //Persist ot db
                    $film = new FilmModel();
                    $film->addFilmFromFile($title, $release_date, $format, $actors);
                    $actors = array();

                    //Redirect
                    header("Location: /app/index.php?controller=film&action=index");
                }
            }
        } catch (\Exception $e)
        {
            var_dump($e);
        }
    }

}