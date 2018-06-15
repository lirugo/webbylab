<?php

class Loader {

    private $url;
    private $controller;
    private $action;

    function __construct($url){
        if(!empty($_GET)){
            $this->url = $_GET;
        }

        if(isset($this->url['controller'])){
            $this->controller = $this->url['controller'];
        }else {
            $this->controller = 'home';
        }

        if(isset($this->url['action'])){
            $this->action = $this->url['action'];
        }else {
            $this->action = 'index';
        }
    }

    function createController(){
        if(class_exists($this->controller)){
            $parent = class_parents($this->controller);
        }
    }
}