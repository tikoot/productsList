<?php
    include_once "./inc/class-autoload.php";
    include_once "./inc/add.php";
    include_once "./classes/addData.class.php";
    include_once "./classes/add.class.php";
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
    <title>Add Product</title>
    
</head>
<body class="pt-4">
    <div class="container">
        <form action="./inc/add.php" method="post" enctype="multipart/enctype" id="product_form">
        <div class="header border-bottom border-dark border-2 d-flex justify-content-between align-items-center mb-5">
        <h1>Product Add</h1>   
        <div class="buttons">
            <input id="button" type="submit" value="Save" name="submit" class="btn btn-success me-2"/>
            <button type="button"  onclick="window.history.back();" class="btn btn-success">Cancel</button>
        </div>
        </div>
          <div class="mb-3 form-group row">
            <label for="sku" class="col-sm-1">SKU</label>
            <div class="col-sm-10">
            <input type="text" name="sku" id="sku" required>
            </div>
          </div>
          <div class="mb-3 form-group row">
            <label for="name" class="col-sm-1">Name</label>
            <div class="col-sm-10">
            <input type="text" name="name" id="name" required>
              </div>
          </div>
          <div class="mb-3 form-group row">
            <label for="price" class="col-sm-1">Price($)</label>
            <div class="col-sm-10">
            <input type="number" name="price" id="price" required>
              </div>
          </div>
          <div class="mb-3 form-group row">
            <label for="productType" class="col-sm-1">Type Switcher</label>
            <div class="col-sm-10">
           <select name="productType" id="productType" onChange="prodType(this.value);" required>
           <option value=""></option>
                <option value="DVD" name="DVD">DVD</option>
                <option value="Book" name = "Book">Book</option>
                <option value="Furniture" name="Furniture">Furniture</option>
            </select>
            </div>
            </div>
           
            <div id="forms"> 
                <div id="dvd" class="display" >
                  <div style=" display:flex; border:1px solid black; max-width:350px; padding:40px 0;margin-top:20px;">
                <div style="display:flex; flex-direction:column; align-items:center;">
                  <div style="display:flex;">
                  <label for="size" style="margin-left:20px; margin-right:5px;">Size(MB)</label>
                  <input type="number" name="size" id="size">
                  </div>
                  <div>
                  <p  style="margin-top:10px;">Please, provide disc space in MB</p>
                  </div> 
                  </div>
                  </div>
              </div>
                <div id="furniture"  class="display">
                <div style="display:flex; border:1px solid black; max-width:350px; padding:40px 0;margin-top:20px;">
                <div style="display:flex; flex-direction:column; align-items:center;">
                <div style="display:flex;  margin-bottom:10px;">
                    <label for="height" style="margin-left:20px; margin-right:5px;">Height(CM)</label>
                    <input type="number" name="height" id="height">
</div>
<div style="display:flex; margin-bottom:10px;">
                    <label for="width" style="margin-left:20px; margin-right:8px;">Width(CM)</label>
                    <input type="number" name="width" id="width">
</div>
<div style="display:flex; margin-bottom:10px;">
                    <label for="length" style="margin-left:20px; margin-right:5px;">Length(CM)</label>
                    <input type="number" name="length" id="length">
</div>
                    <p style="margin-top:10px;">Please, provide dimensions</p>
                </div>
</div>
</div>
                <div id="book"  class="display">
                <div style=" display:flex; border:1px solid black; max-width:350px; padding:40px 0;margin-top:20px;">
                <div style="display:flex; flex-direction:column; align-items:center;">
                  <div style="display:flex;">
                    <label for="weight"  style="margin-left:20px; margin-right:5px;">Weight(KG)</label>
                    <input type="number" name="weight" id="weight" >
                    </div>
                  <div>
                    <p>Please, provide weight in KG</p>
                </div>
            </div>
            </div>
            </div>
        </form> 
</div>

<script src="js/changeForm.js"></script>
</body>
</html>


<?php
$full = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    if(strpos($full,"sku=exist") == true){
     echo  '<p class="text">SKU already exists</p>';
    }elseif(strpos($full,"sku=invalid") == true){
      echo '<p class="text">Please, provide the data of indicated type <br>  Invalid format</p>';
    }elseif(strpos($full,"price=invalid") == true){
      echo '<p class="text">Please, provide the data of indicated type <br> Invalid price</p>';
    }elseif(strpos($full,"name=invalid") == true){
      echo '<p class="text">Please, provide the data of indicated type <br> Invalid name</p>';
 }
?>