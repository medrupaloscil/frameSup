<?php

class TestController {

    public $twig;

    function __construct() {
        $loader = new Twig_Loader_Filesystem(__DIR__.'/../views');
        $this->twig = new Twig_Environment($loader
            /*, array(
                'cache' => __DIR__.'/../../app/cache',
            )*/
        );
    }

    public function contact() {
        echo $this->twig->render('contact.html.twig');
    }

    public function index() {
        $query = new Query();
        $query->orderBy('id', 'DESC');
        $query->limit(4);
        $posts = $query->find('Posts');
        echo $this->twig->render('index.html.twig', array('posts' => $posts));
    }

    public function products() {
        echo $this->twig->render('products.html.twig');
    }
}
