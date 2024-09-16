<?php
require("models/Model.php");

class Product {
    function getAllProduct(){
        $sql ="SELECT products.*,categories.c_name from products INNER JOIN categories where products.pro_category_id =categories.id";
        $products = getData($sql);
        return $products;
    }
    function insert($data){
        $pro_name = $data['pro_name'];
        $pro_slug = to_slug($pro_name);
        $pro_avatar = isset($data['pro_avatar']) ? $data['pro_avatar'] :'no-image.png';
        $pro_quantity = $data['pro_quantity'];
        $pro_price = $data['pro_price'];
        $pro_description = $data['pro_description'];
        $pro_view = $data['pro_view'];
        $pro_category_id = $data['pro_category_id'];
        $created_at = date("Y-m-d H:i:s");
        $sql = "INSERT INTO products (pro_name, pro_slug, pro_avatar, pro_quantity, pro_price,
        pro_description, pro_view, pro_category_id, created_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $data = array($pro_name,$pro_slug,$pro_avatar,$pro_quantity,$pro_price,$pro_description,
        $pro_view,$pro_category_id,$created_at);
        $result = executeQueryPrepare($sql,$data);

        return $result;
    }
   
}


?>