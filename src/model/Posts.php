<?php

class Posts extends Entity {
   protected $id;
   protected $title;
   protected $photos;
   protected $content;

   function __construct() {
      parent::__construct();
   }

   public function getId() {
      return $this->id;
   }

   public function setId($id) {
      $this->id = $id;
   }

   public function getTitle() {
      return $this->title;
   }

   public function setTitle($title) {
      $this->title = $title;
   }

   public function getPhotos() {
      return $this->photos;
   }

   public function setPhotos($photos) {
      $this->photos = $photos;
   }

   public function getContent() {
      return $this->content;
   }

   public function setContent($content) {
      $this->content = $content;
   }

}
