<?php
require("models/Category.php");
class homepageController{
    function list(){
        // get all categories
        $category = new Category();
        $categories = $category->getAllCategory();

        require('views/homepage.php');
    }
}
?>