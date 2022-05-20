<?php  
//FRONT CONTROLLER  (Centralizar todas las peticiones.)


//Requerimos el sistema de autocarga. De esta manera cargamos los datos necesarios
//Con DIR accedemos a rutas absolutas (desde la raíz) y no rutas relativas.  
require __DIR__ . '/../vendor/autoload.php';
//var_dump(__DIR__ . '/../vendor/autoload.php');


//Inicializamos un objeto request y accedemos a su método send. 
//Podemos llegar a esta clase porque el autoload nos carga la información. 
$request = new App\Http\Request;
//$request->send();
