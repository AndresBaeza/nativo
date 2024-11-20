<?php

// esto comunica la vista con el model
require_once('Product.php');

class ProductController {

    public static function index() {
        
        $products = Product::get();
        require_once('view-products.php'); // incluir la vista
        exit;

    }

    public static function create() {
        
        require_once('create-products.php'); // incluir la vista
        exit;

    }

    public static function store($data) {
        
        Product::store($data);

        header("Location: http://nativo.test/index.php");
        exit();
    }

    public static function delete($id) {
        
        Product::delete($id);

        header("Location: http://nativo.test/index.php");
        exit();
    }

}
