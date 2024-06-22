<?php 


namespace Controllers ;

use MVC\Router;

class AdminController { 
    public static function index(Router $router) {
        error_reporting(E_ALL & ~E_NOTICE);
        ini_set('display_errors', '1');
        session_start();
        $router->render('admin/index', [
            'nombre' => $_SESSION['nombre'] 
        ]) ; 
    }
}