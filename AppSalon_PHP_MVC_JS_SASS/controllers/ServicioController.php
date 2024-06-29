<?php 

namespace Controllers ; 

use MVC\Router ; 

class ServicioController {
    public static function index(Router $router) {
        error_reporting(E_ALL & ~E_NOTICE);
        ini_set('display_errors', '1');
        session_start() ;

       $router->render('servicios/index', [
         'nombre' => $_SESSION['nombre'],
       ]) ; 
    }

    public static function crear(Router $router) {
        error_reporting(E_ALL & ~E_NOTICE);
        ini_set('display_errors', '1');
        session_start() ;
        
        if($_SERVER['REQUEST_METHOD']==='POST') {

        }
        $router->render('servicios/crear', [
            'nombre' => $_SESSION['nombre'],
          ]) ; 
    }


    public static function actualizar(Router $router) {
     
        
        if($_SERVER['REQUEST_METHOD']==='POST') {
            
        }

        $router->render('servicios/actualizar', [
            'nombre' => $_SESSION['nombre'],
          ]) ; 
    }


    public static function eliminar(Router $router) {
     
        
        if($_SERVER['REQUEST_METHOD']==='POST') {
            
        }
    }
}