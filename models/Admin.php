<?php
require('models/Model.php');
class Admin{
    function checkLogin ($data){
        $sql = "SELECT * FROM admins where ad_email = :ad_email AND ad_password = :ad_password";
        $datalogin = [
            'ad_email' => isset($data['ad_email'] ) ? $data['ad_email']: "",
            'ad_password' => isset($data['ad_password']) ? $data['ad_password']: "",

        ];
        $loginUser =getDataSecure($sql,$datalogin, false);
        return $loginUser;
    }
}
?>