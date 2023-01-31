<?php
namespace application\core;

class Router {
    protected $routes =[];
    protected $params =[];

    public function __construct(){
    }

    //Функція додавання маршруту:
    public function add(){
    }

    //Функція на перевірку маршруту:
    public function match(){
    }

    //Функція яка буде запускати роутер:
    public function run(){
        echo 'start';
    }
}