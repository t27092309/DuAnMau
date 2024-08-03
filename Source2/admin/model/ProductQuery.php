<?php
class ProductQuery
{
    public $pdo;

    public function __construct()
    {
        try {
            $this->pdo = new PDO("mysql:host=localhost; port=3306; dbname=du_an_mau", "root", "");
            echo "Connect database successfully";
            echo "<hr>";
        } catch (Exception $error) {
            echo "<h1>";
            echo "Connect database failed" . $error->getMessage();
            echo "</h1>";
        }
    }
    public function __destruct()
    {
        $this->pdo = null;
    }

    public function all()
    {
        try {
            $sql = "SELECT * FROM product";
            $data = $this->pdo->query($sql)->fetchAll();

            foreach ($data as $value) {
                $product = new Product();
                $product->id = $value['id'];
                $product->name = $value['name'];
                $product->price = $value['price'];
                $product->img = $value['img'];
                $product->description = $value['description'];
                $product->view = $value['view'];
                $product->idcategory = $value['idcategory'];

                $list[] = $product;
            }
            return $list;
        } catch (Exception $error) {
            echo "Error: " . $error->getMessage();
            echo "<br>";
        }
    }

    public function home()
    {
        try {
            $sql = "SELECT * FROM product ORDER BY id DESC LIMIT 0,9";
            $data = $this->pdo->query($sql)->fetchAll();

            foreach ($data as $value) {
                $homeProduct = new Product();
                $homeProduct->id = $value['id'];
                $homeProduct->name = $value['name'];
                $homeProduct->price = $value['price'];
                $homeProduct->img = $value['img'];
                $homeProduct->description = $value['description'];
                $homeProduct->view = $value['view'];
                $homeProduct->idcategory = $value['idcategory'];

                $homeList[] = $homeProduct;
            }
            return $homeList;
        } catch (Exception $error) {
            echo "Error: " . $error->getMessage();
            echo "<br>";
        }
    }

    public function find($id)
    {
        try {
            $sql = "SELECT * FROM product WHERE id = $id";
            $data = $this->pdo->query($sql)->fetch();

            if ($data !== false) {
                $product = new Product();
                $product->id = $data['id'];
                $product->name = $data['name'];
                $product->price = $data['price'];
                $product->img = $data['img'];
                $product->description = $data['description'];
                $product->view = $data['view'];
                $product->idcategory = $data['idcategory'];
                return $product;
            }
        } catch (Exception $error) {
            echo "Error: " . $error->getMessage();
            echo "<br>";
        }
    }
    public function insert(Product $product)
    {
        try {
            $sql = "INSERT INTO product(name, price, img, description, view, idcategory) VALUES('" . $product->name . "', '" . $product->price . "', '" . $product->img . "', '" . $product->description . "', '" . $product->view . "', '" . $product->idcategory . "');";
            $data = $this->pdo->exec($sql);

            if ($data === 1) {
                return "success";
            }
        } catch (Exception $error) {
            echo "Error: " . $error->getMessage();
            echo "<br>";
        }
    }
    public function update($id, Product $product)
    {
        try {
            $sql = "UPDATE product SET name = '" . $product->name . "', price = '" . $product->price . "', description = '" . $product->description . "', view = '" . $product->view . "', idcategory = '" . $product->idcategory . "' WHERE id = $id";
            $data = $this->pdo->exec($sql);

            if ($data === 1 || $data === 0) {
                return "success";
            }
        } catch (Exception $error) {
            echo "Error: " . $error->getMessage();
            echo "<br>";
        }
    }
    public function delete($id)
    {
        try {
            $sql = "DELETE FROM product WHERE id = $id";
            $data = $this->pdo->exec($sql);

            if ($data === 1) {
                return "success";
            }
        } catch (Exception $error) {
            echo "Error: " . $error->getMessage();
            echo "<br>";
        }
    }
}
