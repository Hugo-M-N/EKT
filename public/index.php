<?php

require_once __DIR__ . '/../includes/app.php';

// Importar router y controladores

use MVC\Router;
use Controllers\PaginasController;

$router = new Router();

// Zona Pública
$router->get('/', [PaginasController::class, 'index']);
$router->get('/404', [PaginasController::class, 'error']);

$router->comprobarRutas();
?>