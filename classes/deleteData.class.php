<?php
include_once 'database.class.php';

class deleteData extends Database
{
    public function deleteProducts($delete)
    {
       $stmt = $this->connect()->query("DELETE FROM products WHERE id = '$delete'");

       if($stmt)
       {
        header("Location: ../index.php");
       }
    }
}