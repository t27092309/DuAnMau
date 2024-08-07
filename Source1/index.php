<?php
include_once "admin/model/Category.php";
include_once "admin/model/CategoryQuery.php";
include_once "admin/controller/CategoryController.php";
include_once "admin/model/Product.php";
include_once "admin/model/ProductQuery.php";
include_once "admin/controller/ProductController.php";
include "global.php";

include "admin/view/header.php";


if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case "":
            header('location:index.php');
            break;
        case "lien-he":
            include "admin/view/lienhe.php";
            break;

        case "gioi-thieu":
            include "admin/view/gioithieu.php";
            break;
    }
} else {
    $proCtrl = new ProductController();
    $proCtrl->homeShowListProduct();
}
include "admin/view/footer.php";
