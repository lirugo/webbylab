<?php

namespace App\Classes;

use App\Config\Config;

class Database{

    private $username = null, $password = null, $dsn = null;
    private static $dbInstance = null;

    public $database;
    public $errors;

    private function __construct(){
        $this->username = Config::get('mysql/username');
        $this->password = Config::get('mysql/password');
        $this->dsn = 'mysql:host=' . Config::get('mysql/host') . ';dbname=' . Config::get('mysql/database');

        [\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION];

        try{
            $this->database = new \PDO($this->dsn, $this->username, $this->password);
        }catch (\PDOException $e){
            $this->errors = $e;
        }
    }

    public static function connect(){
        if(!isset(self::$dbInstance)) {
            self::$dbInstance = new self();
        }
        return self::$dbInstance;
    }

    public function __clone()
    {
        // TODO: Implement __clone() method.
    }

    public function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }
}