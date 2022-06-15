<?php
include_once "class-autoload.php";
include_once "../classes/addData.class.php";
include_once "../classes/add.class.php";

if(isset($_POST["submit"]))
{
    $data = $_POST;
    $addProduct = new Add($data);  
}
?>




