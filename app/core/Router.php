<?php

class Router
{
  public function run($route) {
        global $routes;

	if (!empty($routes[$route])) {
	      $parts = explode(':', $routes[$route]);
	      $controller_name = $parts[0] . 'Controller';
	      $controller = new $controller_name();
	      return $controller->$parts[1]();
	} else {
	  throw new Exception('No route for : ' . $route);
	}
    }
}
						      