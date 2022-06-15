<?php

class Book extends Add{
  
    protected function __construct($data)
    {
        $this->sku=$data['sku'];
        $this->name=$data['name'];
        $this->price=$data['price'];
        $this->dimensions = 'Weight: '. $data['weight'] .' KG';
        $this->type=$data['productType'];
        
        $this->validate();
    }

}
