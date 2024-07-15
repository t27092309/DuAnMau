<?php
include_once "model/Category.php";
include_once "model/CategoryQuery.php";
include_once "controller/CategoryController.php";
include_once "model/Product.php";
include_once "model/ProductQuery.php";
include_once "controller/ProductController.php";


// include "header.php";
// include "home.php";
// include "footer.php";



$act = "";
if (isset($_GET["act"])) {
    $act = $_GET["act"];
}
$act = "";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}


switch ($act) {
    case "":
        // header('location:?act=product-list');
        break;

    case "category-list":
        $categoryCtrl = new CategoryController();
        $categoryCtrl->showListCategory();
        break;

    case "category-create":
        $categoryCtrl = new CategoryController();
        $categoryCtrl->showCreate();
        break;
    case "category-update":
        $categoryCtrl = new CategoryController();
        $categoryCtrl->showUpdate();
        break;

    case "category-delete":
        $categoryCtrl = new CategoryController();
        $categoryCtrl->showDelete();
        break;

    case "category-detail":
        $categoryCtrl = new CategoryController();
        $categoryCtrl->showdetail();
        break;
// -------------------------------------------------------------
    case "product-list":
        $proCtrl = new ProductController();
        $proCtrl->showListProduct();
        break;

    case "product-create":
        $proCtrl = new ProductController();
        $proCtrl->showCreate();
        break;

    case "product-update":
        $proCtrl = new ProductController();
        $proCtrl->showUpdate();
        break;

    case "product-delete":
        $proCtrl = new ProductController();
        $proCtrl->showDelete();
        break;

    case "product-detail":
        $proCtrl = new ProductController();
        $proCtrl->showDetail();
        break;
    case "list-client":
        $proCtrl = new ProductController();
        $proCtrl->showListClient();
        break;

    case "list-comment":
        $proCtrl = new ProductController();
        $proCtrl->showListComment();
        break;

    case "statistics":
        $proCtrl = new ProductController();
        $proCtrl->showStatistics();
        break;

    default:
        include "view/404.php";
        break;
}
