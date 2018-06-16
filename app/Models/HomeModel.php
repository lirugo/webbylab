<?php

namespace App\Models;

class HomeModel extends BaseModel{

    function getFilms(){
        $dbh = $this->db->prepare("SELECT * FROM films");
        $dbh->execute();

        if($dbh->rowCount()){
            return $dbh->fetchAll();
        }
    }
}