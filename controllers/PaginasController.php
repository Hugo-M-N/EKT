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

    public static function blog(Router $router) {

        $router->render('paginas/blog', [
            'titulo' => 'Blog',
        ]);
    }

    public static function producto(Router $router) {

        $router->render('paginas/producto', [
            'titulo' => 'Producto',
        ]);
    }
}