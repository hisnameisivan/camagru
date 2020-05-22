<?php

namespace view;

abstract class View
{
	public $path;
	public $layout = 'default';

	function __construct($route)
	{
		$this->route = $route;
	}

}
