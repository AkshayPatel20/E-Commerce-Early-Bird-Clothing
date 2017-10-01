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
    <style>
      div#google_translate_element div.goog-te-gadget-simple{background-color:#33b5e5;border:0px;outline: 0px;text-decoration: none;}
      div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span{color:white;text-decoration: none;}
      div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value:hover{text-decoration: none;}
    </style>
</head>

<body class="animated pulse">

  <div class="line">Fashion is nothing without people!</div>
  <nav class="navbar navbar-default n1 n2" data-spy="affix" data-offset-top="140">
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
  <div id="sidebar" class="n2">
    <div id="sidebar_title"><span class="glyphicon glyphicon-th gi-2x" aria-hidden="true"></span> Categories</div>
      <ul id="cats">
        <?php getCats(); ?>
      </ul>
      <div id="sidebar_title"><span class="glyphicon glyphicon-th gi-2x" aria-hidden="true"></span> Brands</div>

        <ul id="cats">
          <?php getBrands(); ?>
        </ul>
        <br><br>
        <img src="assets/img/ads2.png" height="300" >
  </div>
  <div id="content_area" class="n2">

      <?php favorite();         ?>

    <div id="shopping_cart">

    </div>


      <div id="products_box">
        <div class="row">
        <div class="col-md-4"><hr></div>
      <div class="col-md-4" style="margin-bottom:25px;"><div class="stitched">SHOPPING CART</div>
      </div>
        <div class="col-md-4"><hr></div>
      </div>

      <div class="cart_box n2">
        <div class="container-fluild" style="padding:10px;border:1px solid #E7E7E7;">
        <div class="row">
          <div class= "col-md-3">
            <h4>Remove</h4>
          </div>
          <div class= "col-md-3">
            <h4>Product Image</h4>
          </div>
          <div class= "col-md-3">
            <h4>Product Title</h4>
          </div>
          <div class= "col-md-3">
            <h4>Total Price</h4>
          </div>
        </div>
          </div>

<?php

$total = 0;
global $con;
$ip = getIp();
$sel_price = "select * from favorite where ip_add='$ip'";
$run_price = mysqli_query($con,$sel_price);

while($p_price = mysqli_fetch_array($run_price)){

  $pro_id = $p_price['f_id'];
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

      <div class="container-fluild" style="padding:5px;">
      <form action="" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class= "col-md-3">
          <h4><input type="checkbox" name="remove[]" value="<?php echo $pro_id; ?>"></h4>
        </div>
        <div class= "col-md-3">
          <img src="admin_area/product_images/<?php echo $product_image; ?>" width="60px" height="60px" class="img-thumbnail">
        </div>
        <div class= "col-md-3">
          <?php echo $product_title; ?>

        </div>



        <div class= "col-md-3">
          <h4><?php echo "$".$single_price; ?></h4>
        </div>

    </div>




  </div><?php   } } ?>
    <div class="container-fluild" style="padding:10px;border:1px solid #E7E7E7;">
    <div class="row">
      <div class= "col-md-3">

      </div>
      <div class= "col-md-3">

      </div>
      <div class= "col-md-3">
        <h4 align="right">Total:</h4>
      </div>
      <div class= "col-md-3">
        <?php echo "<h4>$$total</h4>"  ?>
      </div>
    </div>
  </div>
  <div class="container-fluild" style="padding:10px;border:1px solid #E7E7E7;">
    </div>
  </form>


</div>

<div class="container-fluild" style="padding-top:20px;padding-bottom:20px;">
  <div class="row">
    <hr style="background-color:#fff;border-top: 2px dashed #8c8b8b;" class="n2">

      <div class="well" style="background-color:#b19cd9;">
        <div class="col-md-5">
          <span class="glyphicon glyphicon-envelope" aria-hidden="true" style="font-size:3.5em;line-height:0.7;"></span>
          <span style="font-size:22px;top:-12px;position:relative;padding-left:10px;color:white">Subscribe To Our Newsletter</span>
        </div>
        <form method="get" action="form.php" enctype="multipart/form-data">
         <div class="input-group col-md-5">
          <input type="email" class="form-control" name="esub" placeholder="Your E-Mail Address" required>
           <span class="input-group-btn">
             <button class="btn btn-success" type="email" name="btn_email">Subscribe</span></button>
           </span>
         </div>
        </form>
      </div>

    <div class="col-md-3"><b><span style="color:#ff4444;">&copy;</span> EarlyBird.com, All Right Reserved.</b></div>
    <div class="col-md-3"></div>
    <div class="col-md-6">
      <a href="#"  data-toggle="tooltip" data-placement="left" title="Facebook"><div class="socialfb img-circle" style="height:25px;width:8%;float:left"><img src="assets/img/socialfb.png" style="height:15px;width:30px;margin-left:3px;"></div></a>
      <a href="#"  data-toggle="tooltip" data-placement="left" title="Twitter"><div class="socialtweet img-circle" style="height:25px;width:8%;float:left"><img src="assets/img/socialtweet.png" style="height:15px;width:30px;margin-left:3px;"></div></a>
      <a href="#"  data-toggle="tooltip" data-placement="left" title="Google+"><div class="socialgo img-circle" style="height:25px;width:8%;float:left"><img src="assets/img/socialgo.png" style="height:15px;width:30px;margin-left:3px;"></div></a>
      <a href="#"  data-toggle="tooltip" data-placement="left" title="Youtube"><div class="socialyt img-circle" style="height:25px;width:8%;float:left"><img src="assets/img/socialyt.png" style="height:15px;width:30px;margin-left:3px;"></div></a>
    </div>
  </div>
</div>


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
