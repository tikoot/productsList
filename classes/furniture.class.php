<?php 
//include_once 'add.class.php';
class Furniture extends Add{
    
    protected function __construct($data)
    {
        $this->sku=$data['sku'];
        $this->name=$data['name'];
        $this->price=$data['price'];
        $this->dimensions = 'Dimension: ' . $data['width'] . 'x' . $data['height'] . 'x' . $data['length'];
        $this->type=$data['productType'];
       
        $this->validate();
    }
}