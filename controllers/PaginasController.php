<?php

namespace Controllers;

use MVC\Router;

class PaginasController {
    public static function index(Router $router) {

        // Render de la página
        $router->render('paginas/index', [
            'titulo' => 'Inicio'
        ]);
    }

    public static function error(Router $router) {
        $router->render('paginas/error', [
            'titulo' => 'Página no encontrada'
        ]);
    }
}