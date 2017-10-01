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
  <title>Payment Successful</title>
  <link rel="icon" type="image/png" href="assets/img/icon.png">
  <link rel="stylesheet" href="assets/css/style2.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style1.css" type="text/css">
  <link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css">
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css">
  <link href="assets/css/preloader.css" rel="stylesheet" type="text/css">
</head>

<body>
  <div id="perloader">
    <div class="hoja">Loading..</div>
  </div>

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
          <a href="index.php" class="menu1 text-muted"><span class='glyphicon glyphicon-home gi-2x' aria-hidden='true'></span> Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="all_products.php" class="menu1 text-muted">Featured Products</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="customer/my_account.php" class="menu1 text-muted">My Account</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="customer_register.php" class="menu1 text-muted">Sign Up</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="cart.php" class="menu1 text-muted">Shopping Cart</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="about_us.php" class="menu1 text-muted">Contact Us</a>
          </div>

          <div class="col-md-3" style="margin-left:112px;">


          </div>

      </div>

    </div>
  </nav>


<?php include("slidebar.php");?>
<?php
  $user = $_SESSION['customer_email'];

  $get_img = "select * from customers where customer_email='$user'";
  $run_img = mysqli_query($con,$get_img);

  $row_img = mysqli_fetch_array($run_img);
  $c_image = $row_img['customer_image'];

  $c_name = $row_img['customer_name'];
?>
<div class="container">
<div class="jumbotron">
  <h1>Hello,<?php echo $c_name; ?></h1>
  <p>Thank you for shopping with us. Your Transaction was Successful,payment was received.</p>
  <p>Your Order is currently being processed.</p>
  <p><a class="btn btn-primary btn-lg" href="customer/my_account.php" role="button"><span class="glyphicon glyphicon-wrench"></span>  My Account</a></p>
</div>
</div>


  <script src="assets/js/jquery-2.1.3.min.js"></script>
  <script src="assets/js/function.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/thumbnail-slider.js" type="text/javascript"></script>
  <script src="assets/js/viewportchecker.js"></script>


</body>
</html>
