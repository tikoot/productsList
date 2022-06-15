<?php 
include_once 'database.class.php';

class AddData extends Database
{   
    public $nm;
    protected function setProducts($name,$sku,$price,$type,$dimensions)
    {
        $stmt = $this->connect()->prepare('INSERT INTO products (name,SKU,price,type,dimension) VALUES (?,?,?,?,?);');
        if($stmt->execute([$name,$sku,$price,$type,$dimensions])){
            header("location: ../index.php");
            exit();
        };
    }
}