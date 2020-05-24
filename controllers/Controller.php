<?php

namespace controllers;

use view\View;

abstract class Controller
{
	public $route;
	public $view;

	function __construct($route)
	{
		$this->route = $route;
		$this->view = new View($route);
	}

}
