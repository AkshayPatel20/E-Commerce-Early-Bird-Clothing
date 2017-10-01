<!DOCTYPE html>

<?php
session_start();

include("functions/functions.php");

?>

<html>
<head>
  <link href='https://fonts.googleapis.com/css?family=Amaranth:400italic' rel='stylesheet' type='text/css'>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cart</title>
  <link rel="icon" type="image/png" href="assets/img/icon.png">
  <link rel="stylesheet" href="assets/css/style2.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style1.css" type="text/css">
  <link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css">
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css">
    <link href="assets/css/preloader.css" rel="stylesheet" type="text/css">
      <link href="mobilefeatures/css/mobilestyle.css" rel="stylesheet" type="text/css">
    <style>
      div#google_translate_element div.goog-te-gadget-simple{background-color:#33b5e5;border:0px;outline: 0px;text-decoration: none;}
      div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span{color:white;text-decoration: none;}
      div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value:hover{text-decoration: none;}
    </style>
</head>

<body class="animated pulse">

  <div class="line">Fashion is nothing without people!</div>
  <?php include("mobilefeatures/mobilenav.php");  ?>
  <nav class="navbar navbar-default n1 n2 hidden-xs hidden-sm" data-spy="affix" data-offset-top="140">
    <div class="container-fluid">
      <div class="row">
      <div class="col-md-3">
        <span class="glyphicon glyphicon-menu-hamburger gi-2x slidemenu" aria-hidden="true" style="font-size:1em;margin-top:20px"></span>
        <img alt="Brand" src="assets/img/logo1.svg" height="35px" width:"120px" style="padding-left:35px;">
      </div>

      <div class="col-md-6">
        <form method="get" action="results.php" enctype="multipart/form-data">
        <div class="input-group" style="margin-top:6px">
         <input type="text" class="form-control" placeholder="Search Products & Brands" name="user_query">
        <span class="input-group-btn">
          <input class="btn" name="search" type="submit" value="Search" style="background-color:#9933CC;color:white"/>
        </span>


       </div>
       </form>
      </div>

      <div class="col-md-2" style="margin-top:6px;">

        <?php
        if(isset($_GET['add_cart'])){
          global $con;
          $ip = getIp();
          $get_items = "select * from cart where ip_add='$ip'";
          $run_items = mysqli_query($con,$get_items);
          $count_items = mysqli_num_rows($run_items);
        }
          else{
            global $con;
            $ip = getIp();
            $get_items = "select * from cart where ip_add='$ip'";
            $run_items = mysqli_query($con,$get_items);
            $count_items = mysqli_num_rows($run_items);
          }

            if(isset($_SESSION['customer_email'])){

              $user = $_SESSION['customer_email'];

              $get_img = "select * from customers where customer_email='$user'";
              $run_img = mysqli_query($con,$get_img);

              $row_img = mysqli_fetch_array($run_img);
              $c_image = $row_img['customer_image'];

              $c_name = $row_img['customer_name'];


              echo "

              <div class='dropdown'>
                <button class='btn btn-default dropdown-toggle' type='button' id='dropdownMenu1' data-toggle='dropdown' aria-haspopup='true' aria-expanded='true'>
                  <img src='customer/customer_images/$c_image' class='img-circle' style='width:30px;height:25px;'>&nbsp;&nbsp;&nbsp;<b>Welcome  $c_name </b> &nbsp;
                  <span class='caret'></span>
                </button>
                <ul class='dropdown-menu' aria-labelledby='dropdownMenu1'>
                  <li><a href='customer/my_account.php'><span class='glyphicon glyphicon-wrench gi-2x' aria-hidden='true'></span>&nbsp;&nbsp;&nbsp;My Account</a></li>
                  <li><a href='cart.php'><span class='glyphicon glyphicon-shopping-cart gi-2x' aria-hidden='true'></span>&nbsp;&nbsp;&nbsp;Cart&nbsp;<span class='badge'> $count_items  </span></a></li>
                  <li><a href='#'><span class='glyphicon glyphicon-heart gi-2x' aria-hidden='true'></span>&nbsp;&nbsp;&nbsp;Shortlist</a></li>
                  <li role='separator' class='divider'></li>
                  <li><a href='logout.php'><span class='glyphicon glyphicon-log-out gi-2x' aria-hidden='true'></span>  Log Out</a</li>
                </ul>
              </div>
              ";
            }
              else {
                echo "

                <div class='dropdown'>
                  <button class='btn btn-default dropdown-toggle' type='button' id='dropdownMenu1' data-toggle='dropdown' aria-haspopup='true' aria-expanded='true'>
                    <span class='glyphicon glyphicon-user' aria-hidden='true' ></span>&nbsp;&nbsp;&nbsp;<b>Welcome Guest</b> &nbsp;
                    <span class='caret'></span>
                  </button>
                  <ul class='dropdown-menu' aria-labelledby='dropdownMenu1'>
                    <li><a href='customer/my_account.php'><span class='glyphicon glyphicon-wrench gi-2x' aria-hidden='true'></span>&nbsp;&nbsp;&nbsp;My Account</a></li>
                    <li><a href='cart.php'><span class='glyphicon glyphicon-shopping-cart gi-2x' aria-hidden='true'></span>&nbsp;&nbsp;&nbsp;Cart&nbsp;<span class='badge'> $count_items  </span></a></li>
                    <li><a href='#'><span class='glyphicon glyphicon-heart gi-2x' aria-hidden='true'></span>&nbsp;&nbsp;&nbsp;Shortlist</a></li>
                    <li role='separator' class='divider'></li>
                    <li><a href='checkout.php'><span class='glyphicon glyphicon-log-in gi-2x' aria-hidden='true'></span>  Log In</a</li>
                  </ul>
                </div>              ";

              }


       ?>
     </div>
    </div>

      <div class="row">
        <div class="col-md-3">

        </div>
        <div class="col-md-5">
          <a href="index.php" class="menu1 text-muted"><span class='glyphicon glyphicon-home gi-2x' aria-hidden='true'></span> Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="all_products.php" class="menu1 text-muted ">Featured Products</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="customer/my_account.php" class="menu1 text-muted">My Account</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="customer_register.php" class="menu1 text-muted">Sign Up</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="cart.php" class="menu1 text-muted linkactive">Shopping Cart</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="about_us.php" class="menu1 text-muted">Contact Us</a>
          </div>

          <div class="col-md-3" style="margin-left:112px;">


          </div>

      </div>

    </div>
  </nav>




<div class="main_wrapper">

<div class="content_wrapper">
<?php include("slidebar.php"); ?>
  <div id="sidebar" class="n2 hidden-xs">
    <div id="sidebar_title"><span class="glyphicon glyphicon-th gi-2x" aria-hidden="true"></span> Categories</div>
      <ul id="cats">
        <?php getCats(); ?>
      </ul>
      <div id="sidebar_title"><span class="glyphicon glyphicon-th gi-2x" aria-hidden="true"></span> Brands</div>

        <ul id="cats">
          <?php getBrands(); ?>
        </ul>
      
  </div>
  <div id="content_area" class="n2">

      <?php cart();         ?>

    <div id="shopping_cart">

    </div>


      <div id="products_box">
        <div>

          <div class="container-fluid" style="margin-left:-35px">

              <div class="col-xs-12 top_cart" style="margin-bottom:10px;font-size:18px;">Cart Subtotal&nbsp;(<?php total_items(); ?>&nbsp;items):&nbsp;<span class="text-danger"><?php total_price(); ?></span></div>
              <div class="col-xs-12 top_cart" style="margin-bottom:10px;"><a href='checkout.php'><button class='btn btn-warning btn-lg' style='height:40px;width:290px;text-align:center;padding-left:25px;line-height:1'>Proceed to Checkout</button></a></div>
              <div class="col-xs-12 top_cart" style="margin-bottom:10px;"><span class='glyphicon glyphicon-ok gi-2x text-success' aria-hidden='true'></span>&nbsp;&nbsp;<span class="text-success">Your Order is eligible for FREE Delivery.</span></div>
              <div class="col-xs-12 top_cart" style="margin-bottom:15px;"><img src="assets/img/gen.png" style="height:70px;width:300px;"></div>

          </div>
        </div>


<?php

$total = 0;
global $con;
$ip = getIp();
$sel_price = "select * from cart where ip_add='$ip'";
$run_price = mysqli_query($con,$sel_price);

while($p_price = mysqli_fetch_array($run_price)){

  $pro_id = $p_price['p_id'];
  $pro_price = "select * from products where product_id='$pro_id'";
  $run_pro_price = mysqli_query($con,$pro_price);
  while ($pp_price = mysqli_fetch_array($run_pro_price)) {
     $product_price = array($pp_price['product_price']);

     $product_title = $pp_price['product_title'];
     $product_image = $pp_price['product_image'];
     $single_price = $pp_price['product_price'];
     $values = array_sum($product_price);
     $total +=$values;


?>


      <div class="container-fluid" style="margin-left:-35px;">
        <div class='well w_cart'>
          <div class='row'>
            <div class='col-xs-5 col-md-5'><img src='admin_area/product_images/<?php echo $product_image; ?>' style='width:auto;height:100px;'/></div>
            <div class='col-xs-7 col-md-7'><h5><?php echo $product_title; ?></h5>

          <div class='row'>
            <form action="" method="post" enctype="multipart/form-data">
            <div class='col-xs-5 col-md-5'><p class='text-danger'><b><?php echo "$".$single_price; ?></b></p></div>
            <div class='col-xs-12 col-md-12'><p class='text-success'>In Stock.</p></div>
            <div class='col-xs-4 col-md-4' style='margin-top:-15px;'><h4><input type="checkbox" name="remove[]" value="<?php echo $pro_id; ?>"></h4></div>
            <div class='col-xs-6 col-md-6' style='margin-top:-15px;'><input type="submit" class="btn btn-danger" style="width:100px;height:32px" name="update_cart" value="Remove"></div>
          </div>

        </div>
        </div>








</div>

  </div><?php   } } ?>

  </form>
  <?php

    global $con;
    $ip = getIp();
    if(isset($_POST['update_cart'])){
      foreach ($_POST['remove'] as $remove_id) {
          $delete_product = "delete from cart where p_id='$remove_id' AND ip_add='$ip'";
          $run_delete = mysqli_query($con,$delete_product);
          if($run_delete){
            echo "<script>window.open('cart.php','_self')</script>";
          }
      }
    }

          if(isset($_POST['continue'])){
            echo "<script>window.open('index1.php','_self')</script>";
          }
          echo @$up_cart = updatecart();

   ?>


</div>










      </div>

    </div>

  </div>







  <script src="assets/js/jquery-2.1.3.min.js"></script>
  <script src="assets/js/function.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/thumbnail-slider.js" type="text/javascript"></script>
  <script src="assets/js/viewportchecker.js"></script>


</body>
</html>
