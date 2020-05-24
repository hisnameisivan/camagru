<?php

namespace view;

class View
{
	public $path;
	public $route;
	public $layout = 'default';

	function __construct($route)
	{
		$this->route = $route;
		$this->path = $route['controller'].'/'.$route['action'];
		// print_r($this->path);
	}

	function render($title, $vars = [])
	{
		if (file_exists('view/'.$this->path.'.php')) {
			ob_start();
			require_once('view/'.$this->path.'.php');
			$content = ob_get_clean();

			if (file_exists('view/layouts/'.$this->layout.'.php')) {
				require_once('view/layouts/'.$this->layout.'.php');
			} else {
				echo 'Error requiring file \'view/layouts/'.$this->layout.'.php\'';
			}
		} else {
			echo 'Error requiring file \'view/'.$this->path.'.php\'';
		}
	}
}
