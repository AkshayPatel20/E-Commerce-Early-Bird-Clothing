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
  <title>Results</title>
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

    <div id="shopping_cart">

    </div>


      <div id="products_box">
      <?php
      if(isset($_GET['search'])){
        $search_query = $_GET['user_query'];

          $get_pro = "select * from products where product_keywords like '%$search_query%'";
          $run_pro = mysqli_query($con,$get_pro);
          echo "
           <div class='row hidden-xs'>
           <div class='col-md-4'><hr></div>
           <div class='col-md-4' style='margin-bottom:25px;''><h3><span class='label label-warning' style='padding: 10px 54px;'>Showing Results for ' $search_query '</span></h3></div>
           <div class='col-md-4'><hr></div>
           </div>
           <div class='row visible-xs'>
            <h3 style='color:brown;margin-bottom:15px;margin-top:-10px;'>Showing Results for ' $search_query '</h3>
           </div>

          ";
          while($row_pro=mysqli_fetch_array($run_pro)){
            $pro_id = $row_pro['product_id'];
            $pro_cat = $row_pro['product_cat'];
            $pro_brand = $row_pro['product_brand'];
            $pro_title = $row_pro['product_title'];
            $pro_price = $row_pro['product_price'];
            $pro_image = $row_pro['product_image'];

            echo "

            <div class='container-fluild hidden-xs'>
            <div id='single_product' class='thumbnail col-md-4'>
                <img src='admin_area/product_images/$pro_image' style='width:auto;height:230px' />
                <div class='caption'>
                <h5>$pro_title</h5>
                <p class='text-danger'><b>$ $pro_price</b></p>
                <p class='text-muted'>Cash on Delivery eligible.</p>
                <hr>
                <a href='details.php?pro_id=$pro_id' style='float:left' class='btn btn-info'>Quick View</a>

               <a href='index.php?pro_id=$pro_id'><button style='float:right' class='btn btn-danger'>Add to Cart</button></a>
                 </div>
            </div>
            </div>

            <div class='container-fluild visible-xs'>
            <a href='details.php?pro_id=$pro_id'>
            <div class='well' style='height:140px;width:310px;padding-left:0px;padding-top:8px;padding-bottom:5px;background-color:white;margin-left:-15px'>
              <div class='row'>
                <div class='col-xs-5'><img src='admin_area/product_images/$pro_image' class='mproduct' style='width:auto;height:120px;'/></div>
                <div class='col-xs-7'><h5>$pro_title</h5>

                <div class='row'>
                  <div class='col-xs-5'><p class='text-danger'><b>$ $pro_price</b></p></div>
                  <div class='col-xs-12'><p class='text-muted'>Cash on Delivery eligible.</p></div>

                </div>




                </div>
                </a>
              </div>


              </div>
              </div>
            <div class='clearfix visible-xs-block'></div>


            ";
          }
        }

        ?>




      </div>



  </div>

</div>


</div>

<a href="#" class="back-to-top" style="display: none;"><img src="assets/img/up.png"></a>



  <script src="assets/js/jquery-2.1.3.min.js"></script>
  <script src="assets/js/function.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/thumbnail-slider.js" type="text/javascript"></script>
  <script src="assets/js/viewportchecker.js"></script>


</body>
</html>
