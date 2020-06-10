<?php

namespace controllers;

use view\View;

abstract class Controller
{
    public $route;
    public $view;
    public $model;

    function __construct($route)
    {
        $this->route = $route;
        $this->view = new View($route);
        $this->model = $this->loadModel($route['controller']);
    }

    function loadModel($name)
    {
        $classPath = 'models\\'.$name.'Model';
        if (class_exists($classPath)) {
            return new $classPath;
        }

        return null;
    }
}
