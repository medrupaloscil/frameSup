<?php

class TestController {

    public $twig;

    function __construct() {
        $loader = new Twig_Loader_Filesystem(__DIR__.'/../views');
        $this->twig = new Twig_Environment($loader, array(
            'cache' => '../../app/cache',
        ));
    }

    public function contact() {
        echo $this->twig->render('contact.html.twig');
    }

    public function index() {
        echo $this->twig->render('index.html.twig', array('name' => 'Medrupaloscil'));
    }
}
