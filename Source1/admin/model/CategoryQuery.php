<?php
class CategoryQuery{
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
    public function all(){
        try{
            $sql = "SELECT * FROM category";
            $data = $this->pdo->query($sql)->fetchAll();

            foreach($data as $value){
                $category = new Category();
                $category->id = $value['id'];
                $category->name = $value['name'];
                
                $list[] = $category;
            }
            return $list;
            
        }catch(Exception $error){
            echo "Error: " . $error->getMessage();
            echo "<br>";
        }
    }
    public function find($id){
        try{
            $sql = "SELECT * FROM category WHERE id = $id";
            $data = $this->pdo->query($sql)->fetch();

            if($data !== false){
                $category = new Category();
                $category->id = $data['id'];
                $category->name = $data['name'];
                return $category;
            }
            
        }catch(Exception $error){
            echo "Error: " . $error->getMessage();
            echo "<br>";
        }
    }
    public function insert(Category $category){
        try{
            $sql = "INSERT INTO category(name) VALUES('".$category->name."');";
            $data = $this->pdo->exec($sql);
            
            if($data === 1){
                return "success";
            }
        }catch(Exception $error){
            echo "Error: " . $error->getMessage();
            echo "<br>";
        }
    }
    public function update($id, Category $category){
        try{
            $sql = "UPDATE category SET name = '".$category->name."' WHERE id = $id ";
            $data = $this->pdo->exec($sql);

            if($data === 1 || $data === 0){
                return "success";
            }
            
        }catch(Exception $error){
            echo "Error: " . $error->getMessage();
            echo "<br>";
        }
    }
    public function delete($id){
        try{
            $sql = "DELETE FROM category WHERE id = $id";
            $data = $this->pdo->exec($sql);

            if($data === 1){
                return "success";
            }
            
        }catch(Exception $error){
            echo "Error: " . $error->getMessage();
            echo "<br>";
        }
    }
    
    
}




?>