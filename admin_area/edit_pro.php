

<?php
include("includes/db.php");

if(isset($_GET['edit_pro'])){

    $get_id = $_GET['edit_pro'];
    $get_pro = "select * from products where product_id='$get_id'";
    $run_pro = mysqli_query($con,$get_pro);
    $i = 0;
    $row_pro = mysqli_fetch_array($run_pro);

      $pro_id = $row_pro['product_id'];
      $pro_title = $row_pro['product_title'];
      $pro_image = $row_pro['product_image'];
      $pro_price = $row_pro['product_price'];
      $pro_desc = $row_pro['product_desc'];
      $pro_keywords = $row_pro['product_keywords'];
      $pro_cat = $row_pro['product_cat'];
      $pro_brand = $row_pro['product_brand'];

      $get_cat = "select * from categories where cat_id='$pro_cat'";
      $run_cat = mysqli_query($con,$get_cat);
      $row_cat = mysqli_fetch_array($run_cat);

      $category_title = $row_cat['cat_title'];

      $get_brand = "select * from brands where brand_id='$pro_brand'";
      $run_brand = mysqli_query($con,$get_brand);
      $row_brand = mysqli_fetch_array($run_brand);

      $brand_title = $row_brand['brand_title'];
}
?>



 <div class="container">

 <form action="" method="post" enctype="multipart/form-data">

  <div class="row">
    <div class="col-md-2">

    </div>
    <div class="col-md-5">
          <h3><p class="text-danger" style="font-weight:bolder">♢ Edit & Update Product ♢ </p></h3>
    </div>
    <div class="col-md-4">

    </div>

  </div>


  <div class="row">
    <div class="col-md-1">

    </div>
    <div class="col-md-2">
      <h4 align="right">Produt Title:</h4>
    </div>
    <div class="col-md-4">
       <input type="text" class="form-control" name="product_title" placeholder="Enter Title" value="<?php echo $pro_title;?>"/>
    </div>
  </div>

  <div class="row">
    <div class="col-md-1">

    </div>
    <div class="col-md-2">
      <h4 align="right">Produt categories:</h4>
    </div>
    <div class="col-md-4">
       <select name="product_cat" class="form-control"><option><?php echo $category_title; ?></option>
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
      <select name="product_brand" class="form-control"><option><?php echo $brand_title;?></option>
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



    <div class="col-md-3">
      <h4 align="right">Produt Image:</h4>
    </div>
    <div class="col-md-4">
       <input type="file" class="form-control" name="product_image" placeholder="Enter Image"/>
     </div>
       <div class="col-md-2">
       <img src="product_images/<?php echo $pro_image;?>" width="40" height="40" class="img-circle">
      </div>

  </div>

  <div class="row">
    <div class="col-md-1">

    </div>
    <div class="col-md-2">
      <h4 align="right">Produt Price:</h4>
    </div>
    <div class="col-md-4">
       <input type="text" class="form-control" name="product_price" placeholder="Enter Price" value="<?php echo $pro_price;?>"/>
    </div>
  </div>

  <div class="row">
    <div class="col-md-1">

    </div>
    <div class="col-md-2">
      <h4 align="right">Produt Description:</h4>
    </div>
    <div class="col-md-4">
       <textarea name="product_desc" col="15" rows="10" class="form-control"><?php echo $pro_desc;?></textarea>
    </div>
  </div>

  <div class="row">
    <div class="col-md-1">

    </div>
    <div class="col-md-2">
      <h4 align="right">Produt Keyword:</h4>
    </div>
    <div class="col-md-4">
       <input type="text" class="form-control" name="product_keywords" placeholder="Enter Keywords" value="<?php echo $pro_keywords;?>"/>
    </div>
  </div>

  <div class="row">
    <div class="col-md-2">

    </div>
    <div class="col-md-4" style="text-align:center">
      <input type="submit" name="update_product" value="Update Product" class="form-control btn btn-success"/>
    </div>
    <div class="col-md-6">

    </div>

 </form>


 </div>




    <script src="../assets/js/jquery-2.1.3.min.js"></script>
    <script src="../assets/js/function.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/thumbnail-slider.js" type="text/javascript"></script>
    <script src="../assets/js/viewportchecker.js"></script>
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>



<?php

  if(isset($_POST['update_product'])){

    //getting the text data from the fields
    $update_id = $pro_id;

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

   $update_product = "update products set product_cat='$product_cat',product_brand='$product_brand',product_title='$product_title',product_price='$product_price',product_desc='$product_desc',product_image='$product_image',product_keywords='$product_keywords' where product_id='$update_id'";
   $run_product = mysqli_query($con,$update_product);

if($run_product){
     echo "<script>alert('Product has been Updated!')</script>";

     echo "<script>window.open('index.php?view_products.php','_self')</script>";
   }
}

?>
