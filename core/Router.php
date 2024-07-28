<?php

class Router {
    public static function route($uri) {
        $uri = trim($uri, '/');

        if ($uri === '') {
            $controllerName = 'HomeController';
            $controllerFilename = "controllers/HomeController.php";
            $action = 'index';
            $param = null;
        } else {
            $segments = explode('/', $uri);
            $controllerName = ucfirst($segments[0]) . 'Controller';
            $action = isset($segments[1]) ? $segments[1] : 'index';
            $param = isset($segments[2]) ? $segments[2] : null;
            $controllerFilename = "controllers/" . $controllerName . ".php";
        }

        $absoluteControllerFilename = BASE_DIR."/" . $controllerFilename;

        if (!file_exists($absoluteControllerFilename)) {
            echo "Maaf url yang anda masukan tidak ditemukan";
            die;
        }
        $controllerFilename = trim($controllerFilename, '.');
        require_once $controllerFilename;
        $controller = new $controllerName();

        if (method_exists($controller, $action)) {
            if ($param) {
                $controller->$action($param);
            } else {
                $controller->$action();
            }
        } else {
            echo "Maaf url yang anda masukan tidak ditemukan d";
            die;
        }
    }
}