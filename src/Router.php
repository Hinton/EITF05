<?php

namespace Shop;

// Quick and dirty routing system

class Router {

	private $routes = [];

	public function __construct()
	{

	}

	public function add($route, $action)
	{
		$this->routes[] = new Route($route, $action);
	}

	public function execute()
	{

		$arg = parse_url($_SERVER['REQUEST_URI']);
		$path = str_replace('EITF05/', '', $arg['path']);

		$route = $this->match($path);

		if ($route == null) {
			die('404');
		}

		// Create a new controller!
		$name = $route->controller;
		$controller = new $name($route->params);

		// Call the controller action
		$controller->before();
		$controller->{$route->action}();
		$controller->after();

	}

	// Check if a route matches by looping over all routes
	public function match($path)
	{
		foreach ($this->routes as $route)
		{
			if ($route->isMatch($path))
			{
				return $route;
			}
		}

		return null;
	}

}

class Route {

	public $route;
	public $controller;
	public $action;

	public $params = [];


	private $isDynamic = false;

	public function __construct($route, $action)
	{
		$this->route = $route;

		$tmp = split('@', $action);

		$this->controller = $tmp[0];

		if (! isset($tmp[1])) {
			$tmp[1] = "index";
		}
		$this->action = $tmp[1];

		if (preg_match("/:[^\/]*/", $this->route))
		{
			$this->isDynamic = true;
		}
	}

	public function isMatch($path)
	{

		if ($this->route == $path)
		{
			return true;
		}

		// Should be split up, filling the params should be done later!
		if ($this->isDynamic)
		{
			$route = split('/', $this->route);
			$path = split('/', $path);

			if (count($route) == count($path))
			{
				
				$match = true;
				$params = [];
				for ($i = 0; $i < count($route); $i++)
				{

					if (strpos($route[$i], ':') !== false)
					{
						$params[$route[$i]] = $path[$i];
					}
					elseif ($route[$i] != $path[$i])
					{
						$match = false;
					}

				}

				if ($match)
				{
					$this->params = $params;
					return true;
				}
			}
		}


		return false;
	}

}