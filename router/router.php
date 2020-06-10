<?php

namespace router;

use view\View;

class Router
{
    protected $routes = [];
    protected $params = [];

    function __construct()
    {
        $configRoutes = 'config/routes.php';
        if (file_exists($configRoutes)) {
            $routes = include_once $configRoutes;
            foreach ($routes as $route => $params) {
                $this->add($route, $params);
            }
        }
    }

    function add($route, $params)
    {
        $route = '#^'.$route.'$#';
        $this->routes[$route] = $params;
    }

    function match()
    {
        $url = trim($_SERVER['REQUEST_URI'], '/');
        foreach ($this->routes as $route => $params) {
            if (preg_match($route, $url)) {
                $this->params = $params;
                return true;
            }
        }
        return false;
    }

    function run()
    {
        if ($this->match()) {
            $classPath = 'controllers\\'.$this->params['controller'].'Controller';
            if (class_exists($classPath)) {
                $action = $this->params['action'].'Action';
                if (method_exists($classPath, $action)) {
                    $controller = new $classPath($this->params);
                    $controller->$action();
                } else {
                    View::errorCode(404);
                }
            } else {
                View::errorCode(404);
            }
        } else {
            View::errorCode(404);
        }
    }
}
