<?php
//include_once 'dvd.class.php';
//include_once 'furniture.class.php';
//include_once 'book.class.php';

class Add extends AddData
{
    protected $product;
    protected $sku;
    protected $name;
    protected $price;
    protected $type;
    protected $dimensions;
   

    public function __construct($data)
    { 
       switch ($this->type=$data['productType'])
       {
            case "DVD":
                $this->product = new Dvd($data);
                break;
            case "Furniture":
                $this->product= new Furniture($data);
                break;
            case "Book":
                $this->product= new Book($data);
                 break;
        }
    }

    
    public function validate()
    {       
           
        $stmt = $this->connect()->prepare("SELECT SKU FROM products WHERE SKU = '".$this->sku."'");
        
           if($stmt->execute() && $stmt->rowCount() > 0){
                header("Location: ../add-product.php?sku=exist");
                exit();
           }elseif(!preg_match("/^[a-zA-Z0-9]*$/", $this->sku) || empty($this->sku) ){
                header("Location: ../add-product.php?sku=invalid");
                exit();
            }elseif($this->price < 0 || !preg_match("/^[0-9]*$/", $this->price) || empty($this->price)){ 
                header("Location: ../add-product.php?price=invalid");
                exit();
            }elseif(!preg_match("/^[a-zA-Z\s]*$/", $this->name) || empty($this->name)){
                header("Location: ../add-product.php?name=invalid");
                exit();
            }else{
                $this->setProducts($this->name,$this->sku,$this->price,$this->type,$this->dimensions);
            }
        }
    }

   
    
   
     


   

   





