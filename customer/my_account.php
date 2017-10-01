<!DOCTYPE html>

<?php

session_start();
include("functions/functions.php");
if(!isset($_SESSION['customer_email'])) {
    echo "<script>window.open('../checkout.php?not_signin=You are not sign in','_self')</script>";

}
else {



?>
<html>
<head>
  <link href='https://fonts.googleapis.com/css?family=Amaranth:400italic' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>My Account</title>
  <link rel="icon" type="image/png" href="../assets/img/icon.png">
  <link rel="stylesheet" href="../assets/css/style2.css" type="text/css">
  <link rel="stylesheet" href="../assets/css/style1.css" type="text/css">
  <link rel="stylesheet" href="../assets/css/bootstrap.css" type="text/css">
  <link href="../assets/css/animate.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/preloader.css" rel="stylesheet" type="text/css">
    <link href="../mobilefeatures/css/mobilestyle.css" rel="stylesheet" type="text/css">

</head>

<body class="animated pulse">
  <div class="line">Fashion is nothing without people!</div>
  <?php  include("../mobilefeatures/mobilenav.php");   ?>
  <nav class="navbar navbar-default n1 n2 hidden-xs" data-spy="affix" data-offset-top="140">
    <div class="container-fluid">
      <div class="row">
      <div class="col-md-3">
        <span class="glyphicon glyphicon-menu-hamburger gi-2x slidemenu" aria-hidden="true" style="font-size:1em;margin-top:20px"></span>
        <img alt="Brand" src="../assets/img/logo1.svg" height="35px" width:"120px" style="padding-left:35px;">
      </div>

      <div class="col-md-6">
        <form method="get" action="../results.php" enctype="multipart/form-data">
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
                  <img src='customer_images/$c_image' class='img-circle' style='width:30px;height:25px;'>&nbsp;&nbsp;&nbsp;<b>Welcome  $c_name </b> &nbsp;
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
          <a href="../index.php" class="menu1 text-muted"><span class='glyphicon glyphicon-home gi-2x' aria-hidden='true'></span> Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="../all_products.php" class="menu1 text-muted">Featured Products</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="my_account.php" class="menu1 text-muted linkactive">My Account</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="../customer_register.php" class="menu1 text-muted">Sign Up</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="../cart.php" class="menu1 text-muted">Shopping Cart</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="../about_us.php" class="menu1 text-muted">Contact Us</a>
          </div>

          <div class="col-md-3" style="margin-left:112px;">


          </div>

      </div>

    </div>
  </nav>



<div class="main_wrapper">

<div class="content_wrapper">
<?php include("../slidebar.php"); ?>
 <div id="sidebar" class="n2 hidden-xs">
    <div id="sidebar_title"><span class="glyphicon glyphicon-wrench gi-2x" aria-hidden="true"></span> My Account</div>
      <ul id="cats">
        <?php
          $user = $_SESSION['customer_email'];

          $get_img = "select * from customers where customer_email='$user'";
          $run_img = mysqli_query($con,$get_img);

          $row_img = mysqli_fetch_array($run_img);
          $c_image = $row_img['customer_image'];

          $c_name = $row_img['customer_name'];
        ?>

      <!--  <li><a href="my_account.php?my_orders">My Orders</a></li> -->
          <li><a href="my_account.php?edit_account"><span class="glyphicon glyphicon-edit gi-2x" aria-hidden="true"></span> Update Account</a></li>
          <li><a href="my_account.php?change_pass"><span class="glyphicon glyphicon-lock gi-2x" aria-hidden="true"></span> Change Password</a></li>
          <li><a href="my_account.php?delete_account"><span class="glyphicon glyphicon-trash gi-2x" aria-hidden="true"></span> Remove Account</a></li>
          <li><a href="../logout.php"><span class="glyphicon glyphicon-off gi-2x" aria-hidden="true"></span> LogOut</a></li>

      </ul>

  </div>




  <div id="content_area" class="n2">

      <?php cart();         ?>

    <div id="shopping_cart">


    </div>


      <div id="products_box">

        <?php
          if(!isset($_GET['edit_account'])){
              if(!isset($_GET['change_pass'])){
                  if(!isset($_GET['delete_account'])){

                    echo"
                    <div class='container-fluild hidden-xs' style='margin-bottom:20px'>

                    <div class='row'>
                    <div><img src='../assets/img/bguser1.png' class='bguser n2'><h2 class='profile_title'><b>$c_name</b></h2><h5 class='profile_title1'><b>Welcome,</b></h5><img src='customer_images/$c_image' class='n2 img-circle profile'></div>
                    <h2 class='profile_title'><b>$c_name</b></h2><h5 class='profile_title1'><b>Welcome,</b></h5><img src='customer_images/$c_image' class='n2 img-circle profile'></div>
                    </div>

                    <div class='row hidden-xs'>
                    <h3>&nbsp;&nbsp;&nbsp;<b>You can Easly Manage Your Account From this Page.</h3></b><br><br>
                    <div class='col-md-3'>
                    <a href='my_account.php?edit_account'><img src='../assets/img/Update.jpg' class='n2 img-rounded' height='90px' width='420px'  style='margin-bottom:10px'></a>
                    </div>
                    <div class='col-md-9 n2' style='background-color:white;height:90px;border-left:4px solid #0084b4'>
                    <h4 style='color:#0084b4'>Update Account</h4><p class='text-muted'>Don't Forget to Update your Early Bird Account.</p>
                    </div>

                    </div>

                    <div class='row hidden-xs'>

                    <div class='col-md-3'>
                    <a href='my_account.php?change_pass'><img src='../assets/img/forget.jpg' class='n2 img-rounded' style='margin-bottom:10px'></a>
                    </div>
                    <div class='col-md-9 n2' style='background-color:white;height:90px;border-left:4px solid brown'>
                    <h4 style='color:brown'>Change Password</h4><p class='text-muted'>If you've lost your password or wish to reset it, use the image to get started.</p>
                    </div>

                    </div>
                    <div class='row'>

                    <div class='col-md-3 hidden-xs'>
                    <a href='my_account.php?delete_account'><img src='../assets/img/deleteacc.jpg' class='n2 img-rounded' height='90px' width='420px'></a>
                    </div>
                    <div class='col-md-9 n2 hidden-xs' style='background-color:white;height:90px;border-left:4px solid red'>
                    <h4 style='color:red'>Delete Account</h4><p class='text-muted'>You can delete your Early Bird Account at any time, but you may not be able to restore it.</p>
                    </div>

                    </div>


                            <div class='container-fluild hidden-xs'>
                              <div class='row'>
                                <hr style='background-color:#fff;border-top: 2px dashed #8c8b8b;' class='n2'>
                                <div class='well' style='background-color:#b19cd9;'>
                                  <div class='col-md-5'>
                                    <span class='glyphicon glyphicon-envelope' aria-hidden='true' style='font-size:3.5em;line-height:0.7;'></span>
                                    <span style='font-size:22px;top:-12px;position:relative;padding-left:10px;color:white'>Subscribe To Our Newsletter</span>
                                  </div>
                                  <form method='get' action='form.php' enctype='multipart/form-data'>
                                   <div class='input-group col-md-5'>
                                    <input type='email' class='form-control' name='esub' placeholder='Your E-Mail Address' required>
                                     <span class='input-group-btn'>
                                       <button class='btn btn-success' type='email' name='btn_email'>Subscribe</span></button>
                                     </span>
                                   </div>
                                  </form>
                                </div>
                                <div class='col-md-3'><b><span style='color:#ff4444;'>&copy;</span> EarlyBird.com, All Right Reserved.</b></div>
                                <div class='col-md-3'></div>
                                <div class='col-md-6'>
                                  <a href='https://www.facebook.com/Early-Bird-1814348698780948/' data-toggle='tooltip' data-placement='top' title='Follow Us on Twitter'><button class='btn icons' style='background-image: url(../assets/img/twitter.png);background-color:#ff4444;''><span style='padding-left:20px'>Twitter<span></button></a>
                                  <a href='https://www.facebook.com/Early-Bird-1814348698780948/' data-toggle='tooltip' data-placement='top' title='Follow Us on Facebook'><button class='btn icons' style='background-image: url(../assets/img/facebook.png);background-color:#ffbb44'><span style='padding-left:20px;'>Facebook<span></button></a>
                                  <a href='https://www.facebook.com/Early-Bird-1814348698780948/' data-toggle='tooltip' data-placement='top' title='Follow Us on Facebook'><button class='btn icons btn-success' style='background-image: url(../assets/img/Youtube.png);'><span style='padding-left:20px;'>Youtube<span></button></a>
                                  <a href='https://www.facebook.com/Early-Bird-1814348698780948/' data-toggle='tooltip' data-placement='top' title='Follow Us on Facebook'><button class='btn icons btn-primary' style='background-image: url(../assets/img/google-plus.png);'><span style='padding-left:20px;'>Google+<span></button></a>
                                </div>
                              </div>
                            </div>

                    </div>


                      <div class='mobile_profile visible-xs'>

                        <div><img src='customer_images/$c_image' class='bguser n2'><div class='backwindowmob'>
                            <div id='show' style='cursor: pointer;border-radius:50%;background-color:#ff5252;height:50px;width:60px;margin-left:250px;margin-top:278px'>
                              <span class='glyphicon glyphicon-plus' aria-hidden='true' style='margin-left:17px;margin-top:8px;font-size:2.0em;color:white'>

                              </span></div>


                                <div class='mod_box' style='display:none;'>
                                    <h4 style='margin-left:15px;'>Account Settings</h4><button type='button' id='hide' class='close' style='margin-top:-28px;margin-right:30px;'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>
                                    <hr>
                                    <a href='my_account.php?edit_account' style='text-decoration:none;'><div style='width:290px;background-color:white;border: 1px solid #ccc;margin-left:12px;border-radius: 4px;line-height: 1.42857143;padding: 9.5px'><b style='margin-left:10px;'>Update Account</b><span class='glyphicon glyphicon-chevron-right' aria-hidden='true' style='margin-left:140px;'></span></div></a>
                                    <a href='my_account.php?change_pass' style='text-decoration:none;'><div style='width:290px;background-color:white;border: 1px solid #ccc;border-top:0px;margin-left:12px;border-radius: 4px;line-height: 1.42857143;padding: 9.5px;'><b style='margin-left:10px;'>Change Password</b><span class='glyphicon glyphicon-chevron-right' aria-hidden='true' style='margin-left:129px;'></span></div></a>
                                    <a href='my_account.php?delete_account' style='text-decoration:none;'><div style='width:290px;background-color:white;border: 1px solid #ccc;border-top:0px;margin-left:12px;border-radius: 4px;line-height: 1.42857143;padding: 9.5px;'><b style='margin-left:10px;'>Remove Account</b><span class='glyphicon glyphicon-chevron-right' aria-hidden='true' style='margin-left:135px;'></span></div></a>
                                    <a href='../logout.php' style='text-decoration:none;'><div style='width:290px;background-color:white;border: 1px solid #ccc;border-top:0px;margin-left:12px;border-radius: 4px;line-height: 1.42857143;padding: 9.5px;'><b style='margin-left:10px;'>Logout</b><span class='glyphicon glyphicon-chevron-right' aria-hidden='true' style='margin-left:192px;'></span></div></a>

                                  </div>



                              </div>


                            <div><h2 style='margin-left:15px;font-family: 'Open Sans', sans-serif;'><b>$c_name</b></h2>
                              <a href='../cart.php' style='text-decoration:none;'><h2><img src='../assets/img/cart.jpg' style='margin-top:-110px;margin-left:285px;height:50px;'><span class='badge' style='margin-top:-125px;margin-left:-31px;color:black;background-color:white;font-size:12px;'> $count_items  </span></h2></a>
                            </div>

                            <div class='row'>
                              <div class='col-xs-12'><a href='../all_products.php'><button class='btn btn-danger btn-lg' style='height:40px;width:290px;text-align:left;padding-left:25px;line-height:0.4;margin-left:30px;margin-top:-20px;margin-bottom:10px;'><span class='glyphicon glyphicon-arrow-left' style='font-size:1.2em' aria-hidden='true'></span>&nbsp;&nbsp;&nbsp;Continue Shopping </button></a></div>
                            </div>



                        </div>
                      </div>





                     ";


                  }
              }
          }


         ?>
         <?php
          if(isset($_GET['edit_account'])){
            include("edit_account.php");
          }
          if(isset($_GET['change_pass'])){
            include("change_pass.php");
          }
          if(isset($_GET['delete_account'])){
            include("delete_account.php");
          }
         ?>



      </div>


  </div>

</div>


</div>






  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="../assets/js/jquery-2.1.3.min.js"></script>
  <script src="../assets/js/function.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
  <script src="../assets/js/thumbnail-slider.js" type="text/javascript"></script>
  <script src="../assets/js/viewportchecker.js"></script>


</body>
</html>

<?php } ?>
