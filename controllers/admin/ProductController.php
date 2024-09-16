<?php
require('models/Product.php');
require('libraries/Funtion.php');
require('models/Category.php');


class ProductController
{
    function list()
    {

        $product = new Product();
        $products = $product->getAllProduct();
        require(__DIR__ . "/../../views/products/list.php");
    }

    function add()
    {

        $category = new Category();
        $categories = $category->getAllCategory();

        require(__DIR__ . "/../../views/products/form_add.php");
    }
    function store()
    {

        $product = new Product();
        $file = $_FILES['pro_avatar'];
        $nameInput = 'pro_avatar';
        $rules = [
            'pro_name' => 'required',
            'pro_price' => 'required|minLength:0'
        ];
        $validateForm = register($rules, $file, $nameInput);
        if ($validateForm) {
            $data = $_SESSION['data'];
            if ($file['name']) {
                $fileName = uploadImageToFolder($file, 'products');
                $data['pro_avatar'] = $fileName;
            }
            $result = $product->insert($data);
            if ($result) {
                header('Location: index.php?mod=product&act=list');
            } else {
                header('Location: index.php?mod=product&act=add');
            }
        }
    }
}
