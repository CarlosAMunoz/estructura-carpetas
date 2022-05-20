<?php

namespace  App\Http;    

class Request
{
    protected $segments = [];
    protected $controller;
    protected $method;

    public function __construct()
    {
        $this->segments = explode('/', $_SERVER['REQUEST_URI']);

        $this->setController();
        $this->setMethod();
    }

    //Creamos la función para setear el controlador. 
    //Si está vacío, entonces será home, de lo contrario asignará será el que esté en la segunda posición del arreglo. 
    public function setController(){
        $this->controller = empty($this->segment[1])
            ? 'home'
            : $this->segments[1];
    }



    public function setMethod(){
        $this->controller = empty($this->segment[2])
            ? 'index'
            : $this->segments[2];
    }



}