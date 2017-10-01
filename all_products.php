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
  <title>Featured Products</title>
  <link rel="icon" type="image/png" href="assets/img/icon.png">
  <link rel="stylesheet" href="assets/css/style1.css" type="text/css">
  <link rel="stylesheet" href="assets/css/style2.css" type="text/css">
  <link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css">
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css">
  <link href="assets/css/preloader.css" rel="stylesheet" type="text/css">
  <link href="mobilefeatures/css/mobilestyle.css" rel="stylesheet" type="text/css">
</head>

<body class="animated pulse">

  <?php include("navbar.php"); ?>


  <div id="perloader">
    <div class="hoja">Loading..</div>
  </div>
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
        <br><br>
          <div class="fb-page" data-href="https://www.facebook.com/EarlyBirdFashion/" data-tabs="timeline" data-height="400" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/EarlyBirdFashion/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/EarlyBirdFashion/">Early Bird</a></blockquote></div>
  </div>

  <div id="content_area" class="n2">

    <div id="shopping_cart">


    </div>



      <div id="products_box">
      <div class='clearfix visible-xs-block'></div>
        <div class="row">

          <div class="col-md-12">

          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
      <div class="item active">
      <img src="assets/img/slider.jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
      </div>
      <div class="item">
      <img src="assets/img/slider3.jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
      </div>
      <div class="item">
      <img src="assets/img/slider2.jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>


      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
      </a>
      </div>
    </div>
    </div>
    <div class='clearfix visible-xs-block'></div>

        <div class="row">

      <div class="col-md-12 col-xs-4">
        <div class="visible-xs col-xs-12 heading1"><span class="text-danger">♢ FEATURED PRODUCTS ♢</span></div><hr>
        <div class="non-semantic-protector hidden-xs"> <h1 class="ribbon"><strong class="ribbon-content">FEATURED PRODUCTS</strong></h1></div></div>
      </div>
      <?php
          $get_pro = "select * from products";
          $run_pro = mysqli_query($con,$get_pro);
          while($row_pro=mysqli_fetch_array($run_pro)){
            $pro_id = $row_pro['product_id'];
            $pro_cat = $row_pro['product_cat'];
            $pro_brand = $row_pro['product_brand'];
            $pro_title = $row_pro['product_title'];
            $pro_price = $row_pro['product_price'];
            $pro_image = $row_pro['product_image'];

            echo "

            <div class='container-fluild'>
            <div id='single_product' class='thumbnail col-md-4 hidden-xs'>
                <img src='admin_area/product_images/$pro_image' class='mproduct' style='width:auto;height:200px;'/>
                <div class='caption'>
                <h5>$pro_title</h5>

                <p class='text-danger'><b>$ $pro_price</b></p>
                <p class='text-muted'>Cash on Delivery eligible.</p>
                <hr>
                <a href='details.php?pro_id=$pro_id' style='float:left' class='btn btn-info'>Quick View</a>

                <a href='index1.php?add_cart=$pro_id'><button style='float:right' class='btn btn-danger'>Add to Cart</button></a>
                 </div>

            </div>
            </div>

            <div class='container-fluild visible-xs'>
            <a href='details.php?pro_id=$pro_id'>
            <div class='well' style='height:140px;width:310px;padding-left:0px;padding-top:8px;padding-bottom:5px;background-color:white;'>
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
        ?>




      </div>



        <div class="container-fluild" style="padding-top:20px;padding-bottom:20px;">
          <div class="row">
            <hr style="background-color:#fff;border-top: 2px dashed #8c8b8b;" class="n2 hidden-xs">
            <hr style="background-color:#fff;border-top: 2px dashed #8c8b8b;" class="n2 col-xs-3 visible-xs">
              <div class='clearfix visible-xs-block'></div>

              <div class="well hidden-xs" style="background-color:#b19cd9;">
                <div class="col-md-5">
                  <span class="glyphicon glyphicon-envelope" aria-hidden="true" style="font-size:3.5em;line-height:0.7;"></span>
                  <span style="font-size:22px;top:-12px;position:relative;padding-left:10px;color:white">Subscribe To Our Newsletter</span>
                </div>
                <form method="get" action="form.php" enctype="multipart/form-data">
                 <div class="input-group col-md-5 col-xs-2">
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
            <div class="col-md-3 col-xs-3"><b><span style="color:#ff4444;">&copy;</span> EarlyBird.com, All Right Reserved.</b></div>
            <div class='clearfix visible-xs-block'></div>
            <div class="col-md-3 hidden-xs"></div>
            <div class="col-md-6 col-xs-10">
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




  <script src="assets/js/jquery-2.1.3.min.js"></script>
  <script src="assets/js/function.js" type="text/javascript"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/thumbnail-slider.js" type="text/javascript"></script>
  <script src="assets/js/viewportchecker.js"></script>
  <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
      fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

</body>
</html>
