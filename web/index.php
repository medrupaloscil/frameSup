<?php
require_once('../autoloader.php');
require_once('../app/config/config.php');

$uri = $_SERVER['REQUEST_URI'];
$dir = __DIR__;
$path = substr($dir, strlen($_SERVER['DOCUMENT_ROOT']) - 1);
$route = substr($uri, strlen($path));

$router = new Router();
$response= $router->run($route);
echo $route;
$file = '../src/views/'.$response;

$view = file_get_content($file);
$content = fopen($file);
echo $content;