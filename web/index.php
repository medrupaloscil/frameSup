<?php
require_once('../autoloader.php');
require_once('../app/config/config.php');
require_once '../vendor/autoload.php';

$uri = $_SERVER['REQUEST_URI'];
$dir = __DIR__;
$path = substr($dir, strlen($_SERVER['DOCUMENT_ROOT']) - 1);
$url = substr($uri, strlen($path));
$route = substr($url, strlen("index.php"));

$router = new Router();
$response= $router->run($route);
/*$file = '../src/views/'.$response;

$view = file_get_contents($file);
echo $view;*/