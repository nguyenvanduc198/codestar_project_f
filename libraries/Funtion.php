<?php

use FFI\Exception;

function to_slug($str) {
    $str = trim(mb_strtolower($str));
    $str = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str);
    $str = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str);
    $str = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str);
    $str = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str);
    $str = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str);
    $str = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str);
    $str = preg_replace('/(đ)/', 'd', $str);
    $str = preg_replace('/[^a-z0-9-\s]/', '', $str);
    $str = preg_replace('/([\s]+)/', '-', $str);
    return $str;
}
function validate ($rules,$file,$nameInput){
    $_SESSION['validate'] =[];

    foreach($rules as $key => $value){
        $data = isset($_POST[$key]) ? $_POST[$key] : null;
        foreach(explode('|',$value)as $callback){
            $agr = explode(':',$callback);
            if(count($agr)>1){
                $invalid = call_user_func($agr[0],$data, $agr[1]);
            }else{
                $invalid = call_user_func($callback,$data, $key);
            }

            if($invalid){
                $_SESSION['validate'][$key] []=$invalid;
            }

        }
        if($file['name']){
            $image = chechImageUpload($file);
            if($image){
                $_SESSION['validate'][$key] []=$image;
            }
   
        }
    }

    return count($_SESSION['validate']) >0;
}
function chechImageUpload($file){
    $message = null;
    $imageFileType = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
    if (!in_array($imageFileType,["jpg","jpeg","png"])) {
        $message = " Ảnh chỉ có định dạng jpg,jpeg,png";
    }
    return $message;

}
function register($rules,$file = null, $nameInput =null) {

     $invalid = validate($rules,$file,$nameInput);
     if($invalid){
        $_SESSION['old'] = $_POST;
        header('location:'. $_SERVER['HTTP_REFERER']);
        return false;
     }else {
         $_SESSION['data'] = $_POST;

     }
     return true;

}
function required($value, $agr){
    $message = null;
    if(!$value) {
        $message = ' không được bỏ trống field này ';
    }
    return $message;
}

function minLength($value, $agr){
    $message = null;
    if(!$value ||intval($value)<0) {
        $message = ' Trường này phải lớn hơn 0 ';
    }
    return $message;
}
function uploadImageToFolder($file,$folder){
    $targetDir = "public/uploads/" .$folder."/";
    $fileName = date('YmdHis-') . $file['name'];
    $targetFile = $targetDir . $fileName;
    if(move_uploaded_file($file['tmp_name'],$targetFile)){
        return $fileName;

    } else {
        throw new Exception("Sorry, not upload...");
    }
 
}
function formatPrice($number){
    $number =intval($number);
    $numberFormat = number_format($number, 0, '',',');
    return $numberFormat;
}

?>