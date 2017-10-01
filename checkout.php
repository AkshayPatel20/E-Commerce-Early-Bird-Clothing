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
  <title>Checkout</title>
  <link rel="icon" type="image/png" href="assets/img/icon.png">
  <link rel="stylesheet" href="assets/css/style2.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style1.css" type="text/css">
  <link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css">
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css">
  <link href="assets/css/preloader.css" rel="stylesheet" type="text/css">
  <link href="mobilefeatures/css/mobilestyle.css" rel="stylesheet" type="text/css">
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <style>
    div#google_translate_element div.goog-te-gadget-simple{background-color:#33b5e5;border:0px;outline: 0px;text-decoration: none;}
    div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span{color:white;text-decoration: none;}
    div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value:hover{text-decoration: none;}

  </style>
</head>

<body class="animated pulse">

  <?php include("navbar.php"); ?>

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
        <?php
          if(!isset($_SESSION['customer_email'])){
            include("customer_login.php");
          }
          else {
            include("payment.php");
          }
        ?>
        <div class="container-fluild" style="padding-top:20px;padding-bottom:20px;">
          <div class="row">
            
            <div class='clearfix visible-xs-block'></div>

              <div class="well hidden-xs" style="background-color:#b19cd9;">
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

              <div class="well visible-xs col-xs-4" style="background-color:#b19cd9;margin-left:-14px;">
                <div class="col-md-5 col-xs-8">
                  <span class="glyphicon glyphicon-envelope" aria-hidden="true" style="font-size:2.5em;line-height:0.7;"></span>
                  <span style="font-size:22px;top:-12px;position:relative;padding-left:10px;color:white">Subscribe</span>
                </div>
                <form method="get" action="form.php" enctype="multipart/form-data">
                 <div class="input-group col-md-5 col-xs-12">
                  <input type="email" class="form-control" name="esub" placeholder="Your E-Mail Address" required>
                   <span class="input-group-btn">
                     <button class="btn btn-success" type="email" name="btn_email">Subscribe</span></button>
                   </span>
                 </div>
                </form>
              </div>
                <div class='clearfix visible-xs-block'></div>

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
