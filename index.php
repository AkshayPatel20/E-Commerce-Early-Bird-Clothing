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
  <title>Early Bird</title>
  <link rel="icon" type="image/png" href="assets/img/icon.png">
  <link rel="stylesheet" href="assets/css/style1.css" type="text/css">
  <link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css">
  <link href="assets/css/style2.css" rel="stylesheet" type="text/css">
  <link href="assets/css/preloader.css" rel="stylesheet" type="text/css">
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css">
  <link href="mobilefeatures/css/mobilestyle.css" rel="stylesheet" type="text/css">
<style>
  div#google_translate_element div.goog-te-gadget-simple{background-color:#33b5e5;border:0px;outline: 0px;text-decoration: none;}
  div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span{color:white;text-decoration: none;}
  div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value:hover{text-decoration: none;}
</style>


</head>

<body class="animated bounceInLeft">
  <div id="perloader">
    <div class="hoja">Loading..</div>
  </div>


  <div class="mainslide">

     <div class="slide1bg" style="background-image: url('assets/img/bird-bg.jpg');">
     <div class="logo" style="background-image: url('assets/img/logo1.svg');"><p class="jingle">Fashion is nothing without people!</p>  </div>
     <div class="fb-like" data-href="https://www.facebook.com/EarlyBirdFashion/" data-width="300" data-layout="box_count" data-action="like" data-size="large" data-show-faces="true" data-share="true" style="position:absolute;right:10px;top:10px;"></div>
     <div class="fore-bird" style="background-image: url('assets/img/fore-bird.png');">   </div>
     <div class="back-bird animated pulse" style="background-image: url('assets/img/back-bird.png');">   </div>

     </div>
  </div>




<div class="wrap">


  <section class="content">
    <?php include("mobilefeatures/mobilenav.php");  ?>
    <nav class="navbar navbar-default n1 n2 hidden-xs hidden-sm" data-spy="affix" data-offset-top="540">
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
                    <button class='btn btn-default dropdown-toggle form-control' type='button' id='dropdownMenu1' data-toggle='dropdown' aria-haspopup='true' aria-expanded='true'>
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
            <a href="index.php" class="menu1 text-muted linkactive"><span class='glyphicon glyphicon-home gi-2x' aria-hidden='true'></span> Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="all_products.php" class="menu1 text-muted">Featured Products</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="customer/my_account.php" class="menu1 text-muted">My Account</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="customer_register.php" class="menu1 text-muted">Sign Up</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="cart.php" class="menu1 text-muted">Shopping Cart</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="about_us.php" class="menu1 text-muted">Contact Us</a>
            </div>

            <div class="col-md-3" style="margin-left:112px;">


            </div>

        </div>

      </div>
    </nav>

    <div class="well hidden-xs" style="position:fixed;left:0px;bottom:360px;z-index:600 !important;display:block;height:122px;width:40px;padding:0px;">
      <a href="#" target="_blank" style="text-decoration:none;"><div class="socialfb" style="height:30px;width:40px;margin-left:0px;"><img src="assets/img/socialfb.png" style="height:15px;width:30px;float:right;margin-top:6px;margin-right:6px"></div></a>
      <a href="#" target="_blank" style="text-decoration:none;"><div class="socialtweet" style="height:30px;width:40px;margin-left:0px;"><img src="assets/img/socialtweet.png" style="height:15px;width:30px;float:right;margin-top:6px;margin-right:6px"></div></a>
      <a href="#" target="_blank" style="text-decoration:none;"><div class="socialgo" style="height:30px;width:40px;margin-left:0px;"><img src="assets/img/socialgo.png" style="height:15px;width:30px;float:right;margin-top:6px;margin-right:6px"></div></a>
      <a href="#" target="_blank" style="text-decoration:none;"><div class="socialyt" style="height:30px;width:40px;margin-left:0px;"><img src="assets/img/socialyt.png" style="height:15px;width:30px;float:right;margin-top:6px;margin-right:6px"></div></a>
    </div>

      <article>

        <h1>E<small>ARLY</small> B<small>IRD</small></h1>
        <hr>
        </br>
          <p>Early bird is a website which can be used by multiple user by creating their account,
            it has multiple brands of men’s clothing’s. User can select the brand of their choice
            and according to their own budget they can add the product to their cart and click
            the buy now button. An confirmation email will be sent to the respective user.</p>

        <hr>

      </article>

    <div class="container-fluild hidden-xs">
      <div class="row" style="margin-bottom:40px; background-color:#eee;height:170px;">
        <a href="https://www.microsoft.com/en-in/windows/get-windows-10" target="_blank"><img src="assets/img/ads1.jpg" height="125" width="60%"  style="margin-left:20%;padding-top:35px"></a>
      </div>
    </div>

  <div class="container">
    <div class="row"><h1 style="text-align:center;">B<small>RANDS </small>I<small>N</small> S<small>POTLIGHT</small></h1></div>
    <hr>
      <div class="row" style="margin-top:50px;margin-bottom:20px;">
        <div class="col-md-3"></div>

        <div class="col-md-2 col-sm-3" id="posteffecta1"><figure><a href="index1.php?brand=4"><img src="assets/img/tommy.jpg" alt="..."><figcaption>Tommy Hilfiger 25% Discount</figcaption></a></figure></div>
        <div class="col-md-2 col-sm-3" id="posteffecta2"><figure><a href="index1.php?brand=4"><img src="assets/img/unitedcolor.jpg" alt="..."><figcaption>United Color Of Benetion 30% Discount</figcaption></a></figure></div>
        <div class="col-md-2 col-sm-3" id="posteffecta3"><figure><a href="index1.php?brand=4"><img src="assets/img/aeropostale.jpg" alt="..."><figcaption>Aeropostale 15% Discount</figcaption></a></figure></div>

        <div class="col-md-3 col-xs-1"></div>
      </div>

      <div class="row hidden-xs" style="margin-bottom:20px;">
        <div class="col-md-3"></div>

        <div class="col-md-2 col-sm-3" id="posteffectb1"><figure><a href="index1.php?brand=4"><img src="assets/img/allensolly.jpg" alt="..."><figcaption class="figcaption1">Allen Solly 15% Discount</figcaption></a></figure></div>
        <div class="col-md-2 col-sm-3" id="posteffectb2"><figure><a href="index1.php?brand=4"><img src="assets/img/kazo.jpg" alt="..."><figcaption class="figcaption1">Kazo 20% Discount</figcaption></a></figure></div>
        <div class="col-md-2 col-sm-3" id="posteffectb3"><figure><a href="index1.php?brand=4"><img src="assets/img/faballey.jpg" alt="..."><figcaption class="figcaption1">Faballey 16% Discount</figcaption></a></figure></div>

        <div class="col-md-3 col-xs-1"></div>
    </div>


      <div class="row hidden-xs" style="margin-bottom:100px;">
        <div class="col-md-3"></div>

        <div class="col-md-2 col-sm-3" id="posteffectc1"><figure><a href="index1.php?brand=4"><img src="assets/img/replay.jpg" alt="..."><figcaption>Replay 15% Discount</figcaption></a></figure></div>
        <div class="col-md-2 col-sm-3" id="posteffectc2"><figure><a href="index1.php?brand=4"><img src="assets/img/globaldesi.jpg" alt="..."><figcaption class="figcaption1">Global Desi 20% Discount</figcaption></a></figure></div>
        <div class="col-md-2 col-sm-3" id="posteffectc3"><figure><a href="index1.php?brand=4"><img src="assets/img/ethnical.jpg" alt="..."><figcaption class="figcaption1">Ethnical 10% Discount</figcaption></a></figure></div>

        <div class="col-md-3 col-xs-1"></div>
      </div>

  </div>


  <div class="container" id="section2">

        <div class="row">
        <h1 style="text-align:center;">T<small>ODAY'S</small> D<small>EAL</small></h1>
        <hr>
        <div style="padding:20px;0"></div>
          <div class="col-md-3 col-sm-2 hidden-xs"></div>

          <div class="col-md-4 col-sm-3 col-xs-12"><div class="slide5bg" style="background-image: url('assets/img/model2.jpg');">  <div class="window img-circle">
              <div class="promo-text">DEAL OF THE DAY <strong>₹2000<br><span>Upto 50% Off On Suits</span></strong><a href="index1.php?cat=6" class="window-cart">Explore</a></div>
          </div></div></div>


          <div class="col-md-5"> </div>

    </div>
      <div class="row" style="margin-top:40px;margin-bottom:3px">
        <div class="col-md-2"></div>
        <div class="col-md-8" style="text-align:center;font-weight: 300">
          <p>Early bird is a website which can be used by multiple user by creating their account,
            it has multiple brands of men’s clothing’s. User can select the brand of their choice
            and according to their own budget they can add the product to their cart and click
            the buy now button. An confirmation email will be sent to the respective user.</p>

        </div>
        <div class="col-md-2"></div>
      </div>



    </div>

    <div class="container-fluild hidden-xs">
      <div class="row" style="margin-bottom:40px; background-color:#eee;height:170px;margin-top:40px;">
        <a href="https://www.microsoft.com/en-in/windows/get-windows-10" target="_blank"><img src="assets/img/ads1.jpg" height="125" width="60%"  style="margin-left:20%;padding-top:35px"></a>
      </div>
    </div>


    <div class="container-fluid">
      <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
          fjs.parentNode.insertBefore(js, fjs);
          }(document, 'script', 'facebook-jssdk'));</script>
      <h3>P<small>LEASE</small> F<small>EEL</small> F<small>REE</small> T<small>O</small> S<small>HARE</small> Y<small>OUR</small> E<small>XPERIENCE</small></h3><hr>
      <div class="fb-comments" data-href="https://www.facebook.com/Early-Bird-1814348698780948/" data-width="100%" data-numposts="8"></div>
    </div>


    </div>


  </section>




    <div id="slidebar">
      <h4 style="color:black">Shop by Category</h4>
      <div class="row">
          <a href="index1.php?cat=1"><div class="col-md-6 bar1 img-thumbnail" style="background-image: url('assets/img/jeansmenu.jpg');background-size:210px 100px;height:100px;width:210px;margin-left:15px;margin-bottom:5px;"><div style="position: absolute;bottom: 4px;left:40%;font-size: 16px;color:white;text-shadow: -1px -1px #aa3030;"><button class="label label-primary" style="border-radius:15%"><b>JEANS</b></button>
          </div></div></a>
          <a href="index1.php?cat=4"><div class="col-md-6 bar1 img-thumbnail" style="background-image: url('assets/img/polomenu.jpg');background-size:150px 100px;background-color:#CD9B1D;height:100px;width:150px;margin-left:5px;margin-bottom:5px"><div style="position: absolute;bottom: 10px;left:16%;font-size: 16px;color:white;text-shadow: -1px -1px #aa3030;"><button class="label label-primary" style="border-radius:15%"><b>POLOS</b></button>
          </div></div></a>
      </div>

      <div class="row">
          <div class="col-md-6 bar1 img-thumbnail" style="background-image: url('assets/img/trousersmenu.jpg');background-size:150px 100px;background-color:#CD9B1D;background-repeat:no-repeat;height:100px;width:150px;margin-left:15px;margin-bottom:5px;background-position:center"><div style="position: absolute;bottom: 4px;left:15px;font-size: 16px;color:white;text-shadow: -1px -1px #aa3030;"><button class="label label-primary" style="border-radius:15%"><b>TROUSERS</b></button>
          </div></div>
          <div class="col-md-6 bar1 img-thumbnail" style="background-image: url('assets/img/suitsmenu.jpg');background-size:210px 100px;background-color:red;background-repeat:no-repeat;height:100px;width:210px;margin-left:5px;margin-bottom:5px;background-position:center"><div style="position: absolute;bottom: 4px;left:120px;font-size: 16px;color:white;text-shadow: -1px -1px #aa3030;"><button class="label label-primary" style="border-radius:15%"><b>SUITS</b></button>
          </div></div>
      </div>

      <div class="row">
          <div class="col-md-6 bar1 img-thumbnail" style="background-image: url('assets/img/tshirtmenu.jpg');background-size:365px 100px;background-repeat:no-repeat;background-color:red;height:100px;width:365px;margin-left:15px;margin-bottom:5px"><div style="position: absolute;bottom: 4px;left:140px;font-size: 16px;color:white;text-shadow: -1px -1px #aa3030;"><button class="label label-primary" style="border-radius:15%"><b>T-SHIRTS</b></button>
          </div></div>
      </div>

      <div class="row">
          <div class="col-md-6 bar1 img-thumbnail" style="background-image: url('assets/img/formalshirtmenu.jpg');background-size:365px 100px;background-repeat:no-repeat;background-color:#CD9B1D;height:100px;width:210px;margin-left:15px;margin-bottom:5px"><div style="position: absolute;bottom: 4px;left:10px;font-size: 16px;color:white;text-shadow: -1px -1px #aa3030;"><button class="label label-primary" style="border-radius:15%"><b>FORMAL SHIRT</b></button></div></div>
          <div class="col-md-6 bar1 img-thumbnail" style="background-image: url('assets/img/kurtamenu.jpg');background-size:365px 100px;background-repeat:no-repeat;background-color:#CD9B1D;height:100px;width:150px;margin-left:5px;margin-bottom:5px"><div style="position: absolute;top: 14px;right:10px;font-size: 16px;color:white;text-shadow: -1px -1px #aa3030;"><button class="label label-primary" style="border-radius:15%"><b>KURTA</b></button></div></div>
      </div>

    </div>




</div>

<footer class="row footer-stuff n2">
  <div class="container">
  <div class="row">

    <div class="col-md-4 hidden-sm hidden-xs" style="padding-left:23px;">
      <strong>FOLLOW US ON SOCIAL MEDIA...</strong>
    </div>
    <div class="col-md-4 col-sm-6  hidden-xs">
      <strong style="padding-left:25px;">WE ACCEPT...</strong>
    </div>
    <div class="col-md-4 col-sm-6">
      <p><strong>Register now to get updates on promotions and coupons</strong><br>We won't Spam You!</p>
    </div>

  </div>

  <div class="row">

    <div class="col-md-4 hidden-xs hidden-sm">
      <a href="#"  data-toggle="tooltip" data-placement="left" title="Facebook"><div class="socialfb img-circle" style="height:30px;width:10%;float:left"><img src="assets/img/socialfb.png" style="height:15px;width:30px;margin-left:2px;"></div></a>
       <a href="#"  data-toggle="tooltip" data-placement="left" title="Twitter"><div class="socialtweet img-circle" style="height:30px;width:10%;float:left"><img src="assets/img/socialtweet.png" style="height:15px;width:30px;margin-left:2px;"></div></a>
        <a href="#"  data-toggle="tooltip" data-placement="left" title="Google+"><div class="socialgo img-circle" style="height:30px;width:10%;float:left"><img src="assets/img/socialgo.png" style="height:15px;width:30px;margin-left:2px;"></div></a>
          <a href="#"  data-toggle="tooltip" data-placement="left" title="Youtube"><div class="socialyt img-circle" style="height:30px;width:10%;float:left"><img src="assets/img/socialyt.png" style="height:15px;width:30px;margin-left:2px;"></div></a>
    </div>
    <div class="col-md-4 hidden-xs col-sm-6">
      <img src="assets/img/cod.png" class="fia img-rounded">
      <img src="assets/img/paypal.png" class="fia img-circle">
    </div>
    <div class="col-md-4 col-sm-6">
      <form method="get" action="form.php" enctype="multipart/form-data">
       <div class="input-group">
        <input type="email" class="form-control" name="esub" placeholder="Your E-Mail Address" required>
         <span class="input-group-btn">
           <button class="btn btn-danger" type="email" name="btn_email">Subscribe</span></button>
         </span>
       </div>
      </form>
    </div>

  </div>
  <hr>
  <div class="row">
    <h4><center>&copy; 2016 Copyright: EarlyBird.com</center></h4>
      </div>

</div>
</footer>


  <a href="#" class="back-to-top" style="display: none;"><img src="assets/img/up.png"></a>


  <script src="assets/js/jquery-2.1.3.min.js"></script>
  <script src="assets/js/function.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/thumbnail-slider.js" type="text/javascript"></script>
  <script src="assets/js/viewportchecker.js"></script>
  <script type="text/javascript">
    function googleTranslateElementInit() {
    new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
    }
  </script>
  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</body>
</html>
