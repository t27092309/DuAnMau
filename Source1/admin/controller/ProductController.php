<?php
class ProductController{
    public $productQuery;

    public function __construct()
    {
        $this->productQuery = new ProductQuery();
    }

    public function __destruct()
    {
        
    }


    public function showListProduct(){
    
        // $danhSachCourse = $this->productQuery->all();

        include "view/product/list.php";
    }
    public function showCreate(){

    }
    public function showDelete(){

    }
    public function showUpdate(){

    }
    public function showDetail(){
        
    }
    public function showListClient(){

    }
    public function showListComment(){

    }
    public function showStatistics(){

    }
}

?>