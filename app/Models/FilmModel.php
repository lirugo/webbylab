<?php

namespace App\Models;

use http\Env\Request;

class FilmModel extends BaseModel{

    function getActors($filmId){
        $dbh = $this->db->prepare("
          SELECT * FROM actors WHERE film_id=$filmId
        ");
        $dbh->execute();

        if($dbh->rowCount()){
            return $dbh->fetchAll();
        }
    }

    function addActor($filmId, $name){

        //SQL request
        $sql = "
          INSERT INTO actors (film_id, name) 
          VALUES('".$filmId."','".$name."')
          ";

        //Save
        return $this->db->query($sql);
    }

    function getFilms(){
        $dbh = $this->db->prepare("
          SELECT * FROM films
          ORDER BY id DESC 
        ");
        $dbh->execute();

        if($dbh->rowCount()){
            return $dbh->fetchAll();
        }
    }

    function getFilm($id){
        $dbh = $this->db->prepare("
          SELECT * FROM films
          WHERE id = $id
          ORDER BY id DESC 
        ");
        $dbh->execute();

        if($dbh->rowCount()){
            return $dbh->fetchAll();
        }
    }

    function addFilm(){
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

    function findByName($name){
        $dbh = $this->db->prepare("
          SELECT * FROM films
          WHERE name = '".$name."'
          ORDER BY id DESC 
        ");
        $dbh->execute();

        if($dbh->rowCount()){
            return $dbh->fetchAll();
        }
    }

    function findByActorName($name){
        //Search actor
        $dbh = $this->db->prepare("
          SELECT * FROM actors
          WHERE name = '".$name."'
        ");
        $dbh->execute();
        $results = $dbh->fetchAll();

        //Search films by actor
        foreach ($results as $result) {
            $dbh = $this->db->prepare("
              SELECT * FROM films
              WHERE id = '" . $result['film_id'] . "'
            ");
            $dbh->execute();
            $films[] = $dbh->fetch();
        }

        if($films != NULL)
            if(count($films)){
                return $films;
            }
    }


}