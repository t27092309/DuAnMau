<?php
class ProductController
{
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

        include "view/product/list.php";
    }
    public function showCreate()
    {
        $product = new Product();
        $tbLoi = "";
        $tbThanhCong = "";

        if (isset($_POST['submitForm'])) {
            var_dump($_POST);
            echo "<hr>";

            $product->name = trim($_POST['name']);
            $product->price = $_POST['price'];
            $product->img = $_POST['img'];
            $product->description = $_POST['description'];
            $product->view = $_POST['view'];
            $product->idcategory = $_POST['idcategory'];

            if ($product->name === "" || $product->price === "") {
                $tbLoi = "Tiêu đề và giá không được bỏ trống";
            }

            if ($tbLoi == "") {
                $productCreate = $this->productQuery->insert($product);
                if ($productCreate == "success") {
                    $tbThanhCong = "Insert successfully";

                    $product = new Product();
                }
            }
        }

        include "view/product/create.php";
    }
    public function showDelete($id)
    {
        if ($id !== "") {
            $productDelete = $this->productQuery->delete($id);

            if ($productDelete == "success") {
                header('location:?act=product-list');
            } else {
                echo "Delete error";
            }
        } else {
            echo "<h1> Lỗi: Tham số id trống. Mời bạn kiểm tra tham số id trên đường dẫn url. </h1>";
        }

        include "view/product/create.php";
    }
    public function showUpdate($id)
    {
        if ($id !== "") {
            $product = new Product();
            $tbLoi = "";
            $tbThanhCong = "";
            $product = $this->productQuery->find($id);
            if (isset($_POST['submitForm'])) {
                $product->name = trim($_POST['name']);
                $product->price = $_POST['price'];
                $product->img = $_POST['img'];
                $product->description = $_POST['description'];
                $product->view = $_POST['view'];
                $product->idcategory = $_POST['idcategory'];

                if ($product->name === "" || $product->price === "") {
                    $tbLoi = "Tiêu đề và giá không được bỏ trống";
                }

                if ($tbLoi == "") {
                    $productUpdate = $this->productQuery->update($id, $product);
                    if ($productUpdate == "success") {
                        $tbThanhCong = "Update successfully";

                        $product = new Product();
                    }
                }
            }
        }


        include "view/product/create.php";
    }
    public function showDetail()
    {
        include "view/product/create.php";
    }
    public function showListClient()
    {
    }
    public function showListComment()
    {
    }
    public function showStatistics()
    {
    }
}
