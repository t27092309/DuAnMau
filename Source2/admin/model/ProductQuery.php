<?php
class ProductQuery{
    public $pdo;
    
    public function __construct()
    {
        try{
            $this->pdo = new PDO("mysql:host=localhost; port=3306; dbname=du_an_mau", "root", "");
            echo "Connect database successfully";
            echo "<hr>";

        }catch(Exception $error){
            echo "<h1>";
            echo "Connect database failed" . $error->getMessage();
            echo "</h1>";
        }
    }
    public function __destruct()
    {
        $this->pdo = null;
    }

    
}




?>