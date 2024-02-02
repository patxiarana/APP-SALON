<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\LoginController;
use MVC\Router;

$router = new Router();

//iniciar  sesión
$router->get('/', [LoginController::class, 'login']) ; 


// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();