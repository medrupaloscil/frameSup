<?php

class TestController extends MainController{

    public function contact() {
        echo $this->twig->render('contact.html.twig');
    }

    public function index() {

        $query = new Query();
        $query->orderBy('id', 'DESC');
        $query->limit(4);
        $posts = $query->find('Posts');
        $this->render('index.html.twig', array('posts' => $posts));
    }

    public function products() {
        $this->render('products.html.twig');
    }
}
