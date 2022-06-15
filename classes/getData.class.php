<?php
include_once 'database.class.php';

class GetData extends Database
{   
     public function getProducts()
    {
        $stmt = $this->connect()->query('SELECT * FROM products');
        $stmt->execute();
        $products = $stmt->fetchAll();
        return $products;
       
    }
}