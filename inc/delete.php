<?php 
include_once "../classes/deleteData.class.php";

if(isset($_POST['delete']))
{
    
    if(isset($_POST['checkbox'])){
        $all_id = count($_POST['checkbox']);
        $i = 0;
    while($i < $all_id){
        $delete = $_POST['checkbox'][$i];
        $addProduct = new deleteData();  
        $addProduct->deleteProducts($delete);
        $i++;
     }
    }else{
        header("Location: ../index.php");
    }
  
}
?>