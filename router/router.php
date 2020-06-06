<?php

namespace router;

use view\View;

class Router
{
	protected $routes = [];
	protected $params = [];

	function __construct()
	{
		// echo "router\n";
		$routes = require_once('config/routes.php');
		// debug($arr);
		foreach ($routes as $route => $params) {
			$this->add($route, $params);
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
		// var_dump($this->routes);
		foreach ($this->routes as $route => $params) {
			if (preg_match($route, $url, $matches)) {
				// echo 'debug';
				$this->params = $params;
				return true;
			}
		}
		return false;
	}

	function run()
	{
		if ($this->match()) {
			$classPath = 'controllers\\'.ucfirst($this->params['controller']).'Controller';
			if (class_exists($classPath)) {
				$action = $this->params['action'].'Action';
				if (method_exists($classPath, $action)) {
					$controller = new $classPath($this->params);
					$controller->$action();
				} else {
					// echo "Method $action not found";
					View::errorCode(404);
				}
			} else {
				// echo "Class $classPath not found";
				View::errorCode(404);
			}
		} else {
			// die('404');
			View::errorCode(404);
		}
	}
}
