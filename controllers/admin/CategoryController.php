<?php
require('models/Category.php');
require('libraries/Funtion.php');

class CategoryController{
    function list(){
        $category = new Category();
        $categories = $category->getAllCategory();
        // echo '<pre>' . var_export($categories, true) . '</pre>';
        // die();
        require(__DIR__."/../../views/categories/list.php");
    }

    function add(){

        require(__DIR__."/../../views/categories/form_add.php");  

    }

    function store (){
       
        $category = new Category();
        $rules =[
            // 'c_name'=>'required|minlength:6'
            'c_name'=>'required'];

        $validateForm = register($rules);
        if($validateForm){
            $data = $_SESSION['data'];
            $result = $category->insert($data);
        if($result){
            header('Location:index.php?mod=category&act=list');
        }else{
            header('Location:index.php?mod=category&act=add');
        }

        }
        
    }
    function edit(){
        $idCategory = isset($_GET['id']) ? $_GET['id'] : '' ;
        $category = new Category();
        $category = $category -> getCategoryById($idCategory);
        require(__DIR__."/../../views/categories/form_edit.php");

    }
    function update(){
        $category = new Category();
        $rules =[
            'c_name'=>'required'];
        $validateForm = register($rules);
        if($validateForm){
            $data = $_SESSION['data'];

            $result = $category->update($data);
            if($result){
                setcookie('message','update danh muc thanh cong!', time() +1 );
                header('Location:index.php?mod=category&act=list');
            }else{
                setcookie('message','update danh muc that bai!', time() +1 );
                header('Location:index.php?mod=category&act=edit');
            }
        }

        require(__DIR__."/../../views/categories/form_edit.php");

    }

    function delete(){
        $id = isset($_GET['id']) ? $_GET['id'] : "";
        $category = new Category();
        $result = $category -> deleteCategory($id);
        if($result){
            setcookie('message','xoa thanh cong danh muc!', time() +1 );
            header('Location:index.php?mod=category&act=list'); 
        } else {
            setcookie('message','xoa danh muc that bai, danh muc co chua san pham!', time() +1 );
            header('Location:index.php?mod=category&act=list'); 
        }

        

    }
}


?>