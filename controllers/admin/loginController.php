<?php
require('models/Admin.php');
class loginController{
    function formlogin(){

        require(__DIR__."/../../views/logins/form_login.php");
        // $category = new Category();
        // $categories = $category->getAllCategory();
        // echo '<pre>' . var_export($categories, true) . '</pre>';
        // die();
        
    }
    function login (){
      
        $datalogin =$_POST;
        $admin = new Admin();
       $result = $admin ->checkLogin($datalogin);
       if($result != null){
           $_SESSION['admins'] = $result;
           echo " <script> alert('Dang nhap thanh cong'); location.href='?mod=category&act=list'</script>";
       }else{
        echo " <script> alert('Dang nhap that bai'); location.href ='?mod=formlogin&act=login'</script>";
       }
    }
    function logout (){
        session_destroy();
        header ('Location: ?mod=login&act=formlogin');
    }


}
?>