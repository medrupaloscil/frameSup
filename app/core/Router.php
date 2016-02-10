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
			$arguments = [];
			$func = "";
			$controller = null;
			foreach($routes as $key => $value) {
				if (preg_match("#{#", $key)) {
					$routeParts = explode("/", $key);
					$uriParts = explode("/", $route);
					if (count($routeParts) == count($uriParts)) {
						$part = explode(':', $routes[$key]);
						$controller_name = $part[0] . 'Controller';
						$controller = new $controller_name();
						$func = $part[1];
						foreach ($routeParts as $k => $val) {
							if ($val != $uriParts[$k]) {
								array_push($arguments, $uriParts[1]);
							}
						}
					}
				}
			}

			if ($arguments != []) {
				return $controller->$func($arguments[0]);
			} else {
				$loader = new Twig_Loader_Filesystem(__DIR__.'/views');
				$twig = new Twig_Environment($loader);
				echo $twig->render('error404.html.twig');
				$file = __DIR__."/../logs/error.log";
				if (!file_exists($file)) {
					file_put_contents($file, "LOGS ERROR: \n");
				}
				file_put_contents($file, date("\[d/m/y H:i:s\]")." : "."$route : 404 not found"." \n", FILE_APPEND);
			}
		}
    }
}
						      