<?php

require_once("models/Model.php");

class Category {
    function getAllCategory(){
        $sql ="SELECT * from categories";
        $categories = getData($sql);
        return $categories; 
    }

    function insert($data){
        $name = $data['c_name'];
        $slug = to_slug($name);
        $created_at = date("Y-m-d H:i:s");
        $sql ="INSERT INTO categories(c_name, c_slug, created_at) VALUES (?,?,?)" ;
        $data = array($name,$slug,$created_at);
        $result = executeQueryPrepare($sql,$data);
        return $result;
    }
    
    function getCategoryById($id){
        $sql = "SELECT * FROM categories where id =?";
        $data = array($id);
        $result = getDataSecure($sql,$data, false);
        return $result;
    }

    function update($data){
     
        $name = $data['c_name'];
        $slug = to_slug($name);
        $updated_at = date('Y-m-d H:i:s');
        $id =$data['id'];
        $sql = "UPDATE categories SET c_name = ?, c_slug = ?, updated_at = ? where id = ?";
        $data = array ($name, $slug, $updated_at, $id);
        $result = executeQueryPrepare($sql, $data);
        return $result;

    }


    function deleteCategory($id){
        // check remove category
        $sqlProduct = "SELECT * FROM products where pro_category_id = ?";
        $dataProduct = array($id);
        
        $resultProduct = getDataSecure($sqlProduct,$dataProduct);
        if(count($resultProduct) <= 0){
            $sql ="DELETE from categories where id = ? ";
            $data = array($id);
           
            $result = executeQueryPrepare($sql,$data);
            return $result;

        }
        return false;
        $sql = "DELETE FROM  categories where id = ?";
        $data = array($id);
        $result = executeQueryPrepare($sql,$data);
        return $result;

    }
}

?>