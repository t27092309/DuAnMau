<?php
class ViewController{
    public $productQuery;
    
    public function __construct()
    {
        $this->productQuery = new ProductQuery();
    }

    public function __destruct()
    {
    }


    public function showListProduct()
    {
        $productList = $this->productQuery->all();

        include "view/home.php";
    }
}

?>