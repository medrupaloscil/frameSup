<?php

/**
 * Created by PhpStorm.
 * User: medrupaloscil
 * Date: 10/02/2016
 * Time: 11:29
 */
class MainController {

    public $twig;

    function __construct() {
        $loader = new Twig_Loader_Filesystem(__DIR__.'/../../src/views');
        $this->twig = new Twig_Environment($loader
        /*, array(
            'cache' => __DIR__.'/../../app/cache',
        )*/
        );
    }

    function render($page, $array = []) {
        echo $this->twig->render($page, $array);
    }

}