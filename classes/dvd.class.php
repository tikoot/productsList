<?php
//include_once 'validate.class.php';
//include_once 'add.class.php';
class Dvd extends Add {
   
    protected function __construct($data)
    {
        $this->sku=$data['sku'];
        $this->name=$data['name'];
        $this->price=$data['price'];
        $this->dimensions = 'Size: ' . $data['size'] .' MB';
        $this->type=$data['productType'];   
        
        $this->validate();
    }
}
   
