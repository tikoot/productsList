<?php
    include_once "./inc/class-autoload.php";
    include './classes/getData.class.php';
 $getProducts = new GetData();
 $products= $getProducts->getProducts();

?>
<!--

    გასტილვა,
    
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
    <title>Product List</title>
</head>
<body class="pt-4">
    <div class="container">
        <form action="./inc/delete.php" method="POST">
            <div class="header border-bottom border-dark border-2 d-flex justify-content-between align-items-center mb-5">
            <h1>Product List</h1>
        <div class="buttons">
            <a href="add-product.php" type="button" class="btn btn-success me-2">ADD</a>
            <button type="submit" name="delete" class="btn btn-success" id="delete-product-btn">MASS DELETE</button>
        </div>
    </div>
   
    <div class="main_content pb-5 mb-5">
        <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-3">
        <?php foreach($products as $product){ ?>

        <div class="col">

        <div class="p-3 border border-dark border-3 bg-light.bg-gradient ">
        <input  type="checkbox" class="delete-checkbox" name="checkbox[]" id="<?php  echo $product['id']; ?>" value="<?php  echo $product['id']; ?>">
         <div class="d-flex flex-column align-items-center">
         <p class="mb-0 fs-6 fw-bold"><?php  echo $product['SKU']; ?><p>
         <p class="mb-0 fs-6 fw-bold"><?php  echo $product['name']; ?><p>
         <p class="mb-0 fs-6 fw-bold"><?php  echo $product['price']; ?> $<p>
         <p class="mb-0 fs-6 fw-bold"><?php  echo $product['dimension']; ?><p>
        </div>
        </div>
        </div>
        <?php } ?>
        </div>
            </div>
        </form>

        <footer class="mt-5 pt-5 pb-2">
            <div class="border-top border-dark border-2">
                <h5 class="pt-2 text-center">Scandiweb Assignment Test</h5>
            </div>
        </footer>
     </div>
  </body>
</html>
