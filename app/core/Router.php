<?php

class Router
{
	public function run($route = "/") {
		global $routes;

		if (!empty($routes[$route])) {
            $parts = explode(':', $routes[$route]);
            $controller_name = $parts[0] . 'Controller';
            $controller = new $controller_name();
			$func = $parts[1];
            return $controller->$func();
		} else {
			$loader = new Twig_Loader_Filesystem(__DIR__.'/views');
			$twig = new Twig_Environment($loader);
			echo $twig->render('error404.html.twig');
		}
    }
}
						      