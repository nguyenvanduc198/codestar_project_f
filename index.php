<?php
$mod = isset($_GET['mod']) ? $_GET['mod'] : "";
$act = isset($_GET['act']) ? $_GET['act'] : "";
require('auth/auth.php');
$auth = new Auth();

session_start();

switch ($mod) {
    case 'login':
        require('controllers/admin/loginController.php');
        $login = new loginController();
        switch ($act) {

            case 'formlogin':
                $login->formlogin();
                break;
            case 'login':
                $login->login();
                break;
            case 'logout':
                $login->logout();
                break;
            default:
                echo '404-not found!!!';
                break;
        }
        break;

        //1. quan ly danh muc (category)

    case 'category':
        $auth->isLogin();
        require('controllers/admin/CategoryController.php');
        $category = new CategoryController();
        switch ($act) {
            case 'list':
                $category->list();
                break;
            case 'add':
                $category->add();
                break;
            case 'store':
                $category->store();
                break;
            case 'edit':
                $category->edit();
                break;
            case 'update':
                $category->update();
                break;
            case 'delete':
                $category->delete();
                break;
            default:
                echo '404-not found!!!';
                break;
        }
        break;

        //1. quan ly sản phẩm (products)

    case 'product':
        $auth->isLogin();
        require('controllers/admin/ProductController.php');
        $product = new ProductController();
        switch ($act) {
            case 'list':
                $product->list();
                break;
            case 'add':
                $product->add();
                break;
            case 'store':
                $product->store();
                break;
            //*case 'edit':
            //    $product->edit();
             //   break;
            //case 'update':
            //    $product->update();
            //    break; 
            // case 'delete':
            //     $product->delete();
            //     break;

            default:
                echo '404-not found!!!';
                break;
        }
        break;

        //CLIENT
    case 'homepage':
        require('controllers/client/HomepageController.php');
        $homepage = new homepageController();
        $homepage->list();
        break;

        break;

    default:
        echo '404-not found!!!';
        break;
}
