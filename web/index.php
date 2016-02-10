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

foreach (getallheaders() as $name => $value) {
    $file = __DIR__."/../app/logs/access.log";
    if (!file_exists($file)) {
        file_put_contents($file, "LOGS ACCESS: \n");
    }
    file_put_contents($file, date("\[d/m/y H:i:s\]")." : "."$name: $value"." \n", FILE_APPEND);
}