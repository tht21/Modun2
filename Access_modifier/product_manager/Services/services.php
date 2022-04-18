<?php
namespace Services;
class ProductManager{
    private array $products;
    public function __construct(){
        $this->products = [];
    }
    public function getProducts():array
    {
        return $this->products;
    }
    public function addProduct($product){
        $this->products[] = $product;
    }
}