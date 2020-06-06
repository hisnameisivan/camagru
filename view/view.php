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
		// print_r($this->viewPath);
	}

	function render($title, $vars = [])
	{
		if (file_exists('view/'.$this->viewPath.'.php')) {
			ob_start();
			require_once('view/'.$this->viewPath.'.php');
			$content = ob_get_clean();

			if (file_exists('view/layouts/'.$this->layout.'.php')) {
				require_once('view/layouts/'.$this->layout.'.php');
			} else {
				echo 'Error requiring file \'view/layouts/'.$this->layout.'.php\'';
			}
		} else {
			echo 'Error requiring file \'view/'.$this->viewPath.'.php\'';
		}
	}

	function redirect($url)
	{
		header('location: '.$url);
		die;
	}

	static function errorCode($code)
	{
		http_response_code($code);
		if (file_exists('view/errors/'.$code.'.php')) {
			require_once('view/errors/'.$code.'.php');
		}
		die;
	}
}
