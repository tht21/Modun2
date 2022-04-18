<?php

include_once "../product_manager/Models/product.php";
include_once "../product_manager/Services/services.php";
//goi toi class  trong models vs services
//use namespase \ ten class
use Models\Product;
use Services\ProductManager;

$productManager = new ProductManager();
$productManager->addProduct(new Product('mobile'));
$productManager->addProduct(new Product('mobile'));

$products = $productManager->getProducts();
foreach ($products as $product) {
    echo $product->getName() . "<br/>";
}
