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
  <title>Details</title>
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


<div class="main_wrapper n2">

<div class="content_wrapper">
<?php include("slidebar.php"); ?>
  <div id="sidebar" class="hidden-xs">
    <div id="sidebar_title"><span class="glyphicon glyphicon-th gi-2x" aria-hidden="true"></span> Categories</div>

      <ul id="cats">
        <?php getCats(); ?>
      </ul>

      <div id="sidebar_title"><span class="glyphicon glyphicon-th gi-2x" aria-hidden="true"></span> Brands</div>

        <ul id="cats">
          <?php getBrands(); ?>
        </ul>
        <br><br>
        <div class="fb-page" data-href="https://www.facebook.com/EarlyBirdFashion/" data-tabs="timeline" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/EarlyBirdFashion/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/EarlyBirdFashion/">Early Bird</a></blockquote></div>
  </div>
  <div id="content_area">

    <div id="shopping_cart">

    </div>

      <div id="products_box1">

        <div class="container-fluild hidden-xs">
          <div class="row" style="margin-bottom:40px; background-color:#eee;height:150px;">
            <a href="https://www.microsoft.com/en-in/windows/get-windows-10" target="_blank"><img src="assets/img/ads1.jpg" height="125" width="70%"  style="margin-left:15%;padding-top:25px"></a>
          </div>
        </div>
        <div class='clearfix visible-xs-block'></div>
        <?php

        if(isset($_GET['pro_id'])){

             $product_id = $_GET['pro_id'];

              $get_pro = "select * from products where product_id='$product_id'";
              $run_pro = mysqli_query($con,$get_pro);
              while($row_pro=mysqli_fetch_array($run_pro)){
              $pro_id = $row_pro['product_id'];
              $pro_title = $row_pro['product_title'];
              $pro_price = $row_pro['product_price'];
              $pro_image = $row_pro['product_image'];
              $pro_desc = $row_pro['product_desc'];
              echo "

              <div class='container-fluild hidden-xs' style='padding-bottom:400px;'>
              <div id ='single_product1'>
                <div class='col-md-4'>
                  <img class='img-thumbnail n2' src='admin_area/product_images/$pro_image' width='490' height='380'/>
                </div>
                <div class='col-md-6 n2 col-md-offset-1' style='background-color:white;padding:30px;padding-bottom:20px;border-color: #E7E7E7;'>
                   <h4>$pro_title</h4><hr>
                   <h4>Price: <b style='color:#E32934'>$ $pro_price</b></h4>
                   <p class='text-muted'>Cash on Delivery eligible.</p><br>
                   <h5><b>Feature/Description:</b></h5><p>$pro_desc</p>
                    <a href='index1.php'class='btn btn-primary btn-lg' style='padding: 8px 70px;'>GO Back</a>
                    <a href='index.php?pro_id=$pro_id'><button class='btn btn-danger btn-lg' style='padding: 8px 70px;'>Add to Cart</button></a>

                </div>
                </div>
              </div>

              <div class='container-fluild visible-xs'>
              <div>
                <a href='all_products.php' class='btn btn-warning' style='border-radius:100%;'><span class='glyphicon glyphicon-arrow-left' style='font-size:1.2em' aria-hidden='true'></span></a>
              </div>
              <div class='row'>
                  <div class='col-xs-8'><h5 class='text-primary' style='font-size:16px;margin-left:-15px;margin-bottom:15px;'>$pro_title</h5></div>
                  <div class='col-xs-12'><img src='admin_area/product_images/$pro_image' class='mproduct img-thumbnail' style='width:250px;height:220px;'/></div>
              </div>
              <div class='clearfix visible-xs-block'></div>
              <div class='row'>
                <div class='col-xs-12'><p><sup style='font-size:16px;'>$</sup><b style='color:#E32934;font-size:26px;margin-top:25px;'> $pro_price</b></p></div>
                <div class='col-xs-12'><p class='text-muted'>Cash on Delivery eligible.</p><br></div>
              </div>

              <div class='row'>
                <div class='col-xs-12'><a href='index.php?pro_id=$pro_id'><button class='btn btn-danger btn-lg' style='height:40px;width:290px;text-align:left;padding-left:25px;line-height:1.2'><span class='glyphicon glyphicon-shopping-cart gi-2x' aria-hidden='true'></span>&nbsp;&nbsp;&nbsp;Add to Cart</button></a></div>
              </div>

              <div class='row'>
              <div class='well' style='height:180px;width:310px;padding-left:0px;padding-top:8px;padding-bottom:5px;background-color:white;margin-top:15px  ;'>
                <h4 style='margin-left:10px;'><b>Feature & Description:</b></h4>
                <div class='col-xs-12'><span>$pro_desc</span></div>
              </div>
              </div>


              </div>


              ";
          }
        }
          ?>
          <br><br>

            <div class="row">
                <div class="col-md-4 col-xs-2 hidden-xs"><hr></div>
                <div class="col-md-4 hidden-xs" style="margin-bottom:25px;"><h3><span class="label label-warning" style="padding: 10px 74px;">♢ You May Also Like ♢</span></h3></div>
                <div class="col-md-4 visible-xs" style="margin-bottom:25px;"><h3 class="text-danger">♢ You May Also Like ♢</span></h3></div>
                <div class="col-md-4 col-xs-2 hidden-xs"><hr></div>
            </div>
            <div class="row">
              <?php getPro();   ?>
          </div>
          <br>
          <div class="container-fluid">
            <div id="fb-root"></div>
              <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
                fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));</script>
            <h3>P<small>LEASE</small> F<small>EEL</small> F<small>REE</small> T<small>O</small> S<small>HARE</small> Y<small>OUR</small><br class="visible-xs"> E<small>XPERIENCE</small></h3><hr>
            <div class="fb-comments col-xs-4" data-href="https://www.facebook.com/Early-Bird-1814348698780948/" data-width="100%" data-numposts="8"></div>
          </div>

          <div class='clearfix visible-xs-block'></div>
          <div class="container-fluild hidden-xs" style="padding-top:20px;padding-bottom:20px;">
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
              <div class='clearfix visible-xs-block'></div>
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
