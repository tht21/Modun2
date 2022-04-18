<?php
class Cylinder extends Circle{
   private $height;
   public function __construct(){
   }
   public function setHeight($height) {
       $this->height = $height;
   }
   public function getHeight(){
       return $this->height;
   }
   public function Area1()
    {
        return parent::Area() *$this->height;
    }
    public function toString(){
  
        return  $this->height;
        
    }
}