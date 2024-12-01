<?php
require_once 'model/Product.php';
class ProductController{
    public function show(){
        $newProduct = new Product();
        $products=$newProduct->all();
        require "views/products/show.view.php";
    }

    public function Create(){
        require  'views/products/show.view.php';
    }
    public function Store(){
        $product = new Product();
        $data=[
            'name'=> $_POST['name'],
            'price'=> $_POST['price'],
            'created_at'=> date("Y-m-d H:i:s")

        ];
        $product->create($data);
        header("location: /products");
         exit;
    }
}


