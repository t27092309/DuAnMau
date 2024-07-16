<?php
class CategoryController
{
    public $categoryQuery;

    public function __construct()
    {
        $this->categoryQuery = new CategoryQuery();
    }

    public function __destruct()
    {
    }

    public function showListCategory()
    {
        $categoryList = $this->categoryQuery->all();

        include "view/category/list.php";
    }
    public function showCreate()
    {
        $category = new Category();
        $tbLoi = "";
        $tbThanhCong = "";

        if (isset($_POST['submitForm'])) {
            var_dump($_POST);
            echo "<hr>";

            $category->name = trim($_POST['name']);

            if ($category->name === "") {
                $tbLoi = "Tiêu đề và giá không được bỏ trống";
            }

            if ($tbLoi == "") {
                $categoryCreate = $this->categoryQuery->insert($category);
                if ($categoryCreate == "success") {
                    $tbThanhCong = "Insert successfully";

                    $category = new Category();
                }
            }
        }

        include "view/category/create.php";
    }
    public function showDelete($id)
    {
        if ($id !== "") {
            $categorytDelete = $this->categoryQuery->delete($id);

            if ($categorytDelete == "success") {
                header('location:?act=category-list');
            } else {
                echo "Delete error";
            }
        } else {
            echo "<h1> Lỗi: Tham số id trống. Mời bạn kiểm tra tham số id trên đường dẫn url. </h1>";
        }

        include "view/category/create.php";
    }
    public function showUpdate($id)
    {
        if ($id !== "") {
            $category = new Category();
            $tbLoi = "";
            $tbThanhCong = "";
            $category = $this->categoryQuery->find($id);
            if (isset($_POST['submitForm'])) {
                $category->name = trim($_POST['name']);

                if ($category->name === "") {
                    $tbLoi = "Tiêu đề và giá không được bỏ trống";
                }

                if ($tbLoi == "") {
                    $categoryUpdate = $this->categoryQuery->update($id, $category);
                    if ($categoryUpdate == "success") {
                        $tbThanhCong = "Update successfully";

                        $category = new Category();
                    }
                }
            }
        }


        include "view/product/create.php";
    }
    public function showDetail()
    {
    }
}
