<?php

namespace App\Models;

use http\Env\Request;

class HomeModel extends BaseModel{

    function getFilms(){
        $dbh = $this->db->prepare("
          SELECT * FROM films
        ");
        $dbh->execute();

        if($dbh->rowCount()){
//            echo '<pre>';
//            var_dump($dbh->fetchAll());
            return $dbh->fetchAll();
        }
    }

    function getFilmActors($filmId){
        $dbh = $this->db->prepare("
          SELECT * FROM actors WHERE film_id=$filmId
        ");
        $dbh->execute();

        if($dbh->rowCount()){
//            echo '<pre>';
//            var_dump($dbh->fetchAll());
            return $dbh->fetchAll();
        }
    }

    function save(){

        $request = $_POST;
        //Validate

        //SQL request
        $sql = "
          INSERT INTO films (name,release_date,format) 
          VALUES('".$request['name']."','".$request['release_date']."','".$request['format']."')
          ";

        //Save
        return $this->db->query($sql);


    }

}