<!DOCTYPE html>

<?php
include("includes/db.php");
?>


 <div class="container">

 <form action="insert_product.php" method="post" enctype="multipart/form-data">

  <div class="row">
    <div class="col-md-2">

    </div>
    <div class="col-md-4">
    <h3><p class="text-danger" style="font-weight:bolder">♢ Insert New Product Here ♢ </p></h3>
    </div>
    <div class="col-md-7">

    </div>

  </div>


  <div class="row">
    <div class="col-md-1">

    </div>
    <div class="col-md-2">
      <h4 align="right">Produt Title:</h4>
    </div>
    <div class="col-md-4">
       <input type="text" class="form-control" name="product_title" placeholder="Enter Title" required/>
    </div>
  </div>

  <div class="row">
    <div class="col-md-1">

    </div>
    <div class="col-md-2">
      <h4 align="right">Produt categories:</h4>
    </div>
    <div class="col-md-4">
       <select name="product_cat" class="form-control"><option>Select a Category</option>
         <?php

         $get_cats = "select * from categories";
           $run_cats =  mysqli_query($con,$get_cats);

           while ($row_cats=mysqli_fetch_array($run_cats)){
             $cat_id = $row_cats['cat_id'];
             $cat_title = $row_cats['cat_title'];

           echo "<option value='$cat_id'>$cat_title</option>";
           }

         ?>
       </select>
    </div>
  </div>

  <div class="row">
    <div class="col-md-1">

    </div>
    <div class="col-md-2">
      <h4 align="right">Produt Brand:</h4>
    </div>
    <div class="col-md-4">
      <select name="product_brand" class="form-control"><option>Select a Brand</option>
        <?php

        $get_brands = "select * from brands";
          $run_brands =  mysqli_query($con,$get_brands);

          while ($row_brands=mysqli_fetch_array($run_brands)){
            $brand_id = $row_brands['brand_id'];
            $brand_title = $row_brands['brand_title'];

          echo "<option value='$brand_id'>$brand_title</option>";
          }

        ?>
      </select>
    </div>
  </div>

  <div class="row">
    <div class="col-md-1">

    </div>
    <div class="col-md-2">
      <h4 align="right">Produt Image:</h4>
    </div>
    <div class="col-md-4">
       <input type="file" class="form-control" name="product_image" placeholder="Enter Image"/>
    </div>
  </div>

  <div class="row">
    <div class="col-md-1">

    </div>
    <div class="col-md-2">
      <h4 align="right">Produt Price:</h4>
    </div>
    <div class="col-md-4">
       <input type="text" class="form-control" name="product_price" placeholder="Enter Price"/>
    </div>
  </div>

  <div class="row">
    <div class="col-md-1">

    </div>
    <div class="col-md-2">
      <h4 align="right">Produt Description:</h4>
    </div>
    <div class="col-md-4">
       <textarea name="product_desc" col="15" rows="10" class="form-control"></textarea>
    </div>
  </div>

  <div class="row">
    <div class="col-md-1">

    </div>
    <div class="col-md-2">
      <h4 align="right">Produt Keyword:</h4>
    </div>
    <div class="col-md-4">
       <input type="text" class="form-control" name="product_keywords" placeholder="Enter Keywords"/>
    </div>
  </div>

  <div class="row">
    <div class="col-md-2">

    </div>
    <div class="col-md-4" style="text-align:center">
      <input type="submit" name="insert_post" value="submit" class="form-control btn btn-success"/>
    </div>
    <div class="col-md-6">

    </div>

 </form>


 </div>




    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>




<?php

  if(isset($_POST['insert_post'])){

    //getting the text data from the fields
    $product_title = $_POST['product_title'];
    $product_cat = $_POST['product_cat'];
    $product_brand = $_POST['product_brand'];
    $product_price = $_POST['product_price'];
    $product_desc = $_POST['product_desc'];
    $product_keywords = $_POST['product_keywords'];

    //getting the image from the field
    $product_image = $_FILES['product_image']['name'];
    $product_image_tmp = $_FILES['product_image']['tmp_name'];

    move_uploaded_file($product_image_tmp,"product_images/$product_image");

   $insert_product = "insert into products(product_cat,product_brand,product_title,product_price,product_desc,product_image,product_keywords) values ('$product_cat','$product_brand','$product_title','$product_price','$product_desc','$product_image','$product_keywords')";

   $insert_pro = mysqli_query($con, $insert_product);

if($insert_pro){
     echo "<script>alert('Product has been inserted')</script>";
     echo "<script>window.open('index.php?insert_product.php','_self')</script>";
   }
}

?>
