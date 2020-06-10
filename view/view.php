<?php

namespace view;

class View
{
    public $viewPath;
    public $route;
    public $layout = 'default';

    function __construct($route)
    {
        $this->route = $route;
        $this->viewPath = $route['controller'].'/'.$route['action'];
    }

    function render($title, $vars = [])
    {
        $currentView = 'view/'.$this->viewPath.'.php';
        if (file_exists($currentView)) {
            ob_start();
            include_once $currentView;
            $content = ob_get_clean();

            $currentLayout = 'view/layouts/'.$this->layout.'.php';
            if (file_exists($currentLayout)) {
                include_once $currentLayout;
            } else {
                echo 'Error requiring file \''.$currentLayout.'\'';
            }
        } else {
            echo 'Error requiring file \''.$currentView.'\'';
        }
    }

    // function redirect($url)
    // {
    //     header('location: '.$url);
    //     die;
    // }

    static function errorCode($code)
    {
        http_response_code($code);
        $errorPage = 'view/errors/'.$code.'.php';
        if (file_exists($errorPage)) {
            include_once $errorPage;
        }
        die;
    }
}
