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
  <title>Early Bird User</title>
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

<body>
  <div id="perloader">
    <div class="hoja">Loading..</div>
  </div>

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


      </span>

    </div>


      <div id="products_box">
        <?php getPro();                ?>
        <?php getCatPro();             ?>
        <?php getBrandPro();             ?>
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
