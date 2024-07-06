<?php

require_once __DIR__ . '/../includes/app.php';

// Importar router y controladores

use MVC\Router;
use Controllers\PaginasController;
use Controllers\AuthController;

$router = new Router();

// Zona Pública
$router->get('/', [PaginasController::class, 'index']);
$router->get('/blog', [PaginasController::class, 'blog']);
$router->get('/producto', [PaginasController::class, 'producto']);
$router->get('/404', [PaginasController::class, 'error']);

// Registro
$router->get('/login',[AuthController::class, 'login']);
$router->post('/login',[AuthController::class, 'login']);
$router->post('/logout',[AuthController::class, 'logout']);

// Crear Cuenta
$router->get('/registro', [AuthController::class, 'registro']);
$router->post('/registro', [AuthController::class, 'registro']);

// Formulario de olvide mi password
$router->get('/olvide', [AuthController::class, 'olvide']);
$router->post('/olvide', [AuthController::class, 'olvide']);

// Colocar el nuevo password
$router->get('/reestablecer', [AuthController::class, 'reestablecer']);
$router->post('/reestablecer', [AuthController::class, 'reestablecer']);

// Confirmación de Cuenta
$router->get('/mensaje', [AuthController::class, 'mensaje']);
$router->get('/confirmar-cuenta', [AuthController::class, 'confirmar']);


$router->comprobarRutas();
?>