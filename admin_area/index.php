<?php

session_start();

if(!isset($_SESSION['user_email'])) {
    echo "<script>window.open('login.php?not_admin=You are not a admin','_self')</script>";
}
else {



?>


<!DOCTYPE html>
<html>
<head>
  <link href='https://fonts.googleapis.com/css?family=Amaranth:400italic' rel='stylesheet' type='text/css'>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Dashboard</title>
  <link rel="icon" type="image/png" href="../assets/img/icon.png">
  <link rel="stylesheet" href="../assets/css/style2.css" type="text/css">
  <link rel="stylesheet" href="../assets/css/style1.css" type="text/css">
  <link rel="stylesheet" href="../assets/css/bootstrapadmin.css" type="text/css">
  <link href="../assets/css/animate.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="../assets/css/adminstyle.css" type="text/css">
</head>

<body class="animated pulse">


<div class="main_wrapperad">

<div class="content_wrapperad">

  <nav class="navbar navbar-fixed-top">
    <div id="sidebarad">
      <div id="sidebar_titlead"></div>
        <ul id="catsad">

          <li><a href="index.php" style="background-color:#F2552C;"><span class="glyphicon glyphicon-dashboard gi-2x" aria-hidden="true"></span> Dashboard</a></li>
          <li class="class1"><a href="index.php?insert_product">Insert New Product</a></li>
          <li class="class1"><a href="index.php?view_products">View All Product</a></li>
          <li class="class1"><a href="index.php?insert_cat">Insert New Category</a></li>
          <li class="class1"><a href="index.php?view_cats">View All Categories</a></li>
          <li class="class1"><a href="index.php?insert_brand">Insert New Brand</a></li>
          <li class="class1"><a href="index.php?view_brands">View All Brands</a></li>
          <li class="class1"><a href="index.php?view_customers">View Customers</a></li>
        <!--   <li><a href="index.php?view_orders">View Orders</a></li>     -->
        <!--  <li><a href="index.php?view_payments">View Payments</a></li>   -->
          <li><a href="logout.php"><button class="btn btn-danger"><span class="glyphicon glyphicon-off gi-2x" aria-hidden="true"></span> Log Out</button></a></li>

        </ul>

    </div>
  </nav>



  <div class="backimage" style="background-image: url('../assets/img/bgadmin.jpg');">
    <div class="backwindow">
         <div class="logo2" style="background-image: url('../assets/img/logo1.svg');">  </div>
         <h4 style="position:absolute;color:orange;top:150px;text-shadow: -1px -1px #aa3030;left:515px;">Power In Your Hands Use The Power Wisely</h4>
         <h2 style="position:absolute;top:80px;color:white;text-shadow: -1px -1px #aa3030;left:15px;">Welcome,<br>Administrator!</h2>
    </div>
  </div>



  <div id="content_areaad" class="n2">

    <div id="shopping_cartad">



    </div>


      <div id="products_boxad">

        <div class="container">
        <?php
          if (isset($_GET['insert_product'])) {
            include "insert_product.php";
          }
          if (isset($_GET['view_products'])) {
            include "view_products.php";
          }
          if (isset($_GET['edit_pro'])) {
            include "edit_pro.php";
          }
          if (isset($_GET['insert_cat'])) {
            include "insert_cat.php";
          }
          if (isset($_GET['view_cats'])) {
            include "view_cats.php";
          }
          if (isset($_GET['edit_cat'])) {
            include "edit_cat.php";
          }
          if (isset($_GET['insert_brand'])) {
            include "insert_brand.php";
          }
          if (isset($_GET['view_brands'])) {
            include "view_brands.php";
          }
          if (isset($_GET['edit_brand'])) {
            include "edit_brand.php";
          }
          if (isset($_GET['view_customers'])) {
            include "view_customers.php";
          }

        ?>

        <?php
          if (!isset($_GET['insert_product'])) {
            if (!isset($_GET['view_products'])) {
              if (!isset($_GET['edit_pro'])) {
               if (!isset($_GET['insert_cat'])) {
                 if (!isset($_GET['view_cats'])) {
                   if (!isset($_GET['edit_cat'])) {
                     if (!isset($_GET['insert_brand'])) {
                       if (!isset($_GET['view_brands'])) {
                         if (!isset($_GET['edit_brand'])) {
                           if (!isset($_GET['view_customers'])) {

                             echo"
                             <div class='container'>
                                <h3 style='margin-left:2px;font-weight:bolder' class='text-danger'>♢ Dashboard ♢</h3>
                                <p style='margin-left:10px;' class='text-muted'>You Can Manage Early Bird Site From This Page.</p>
                                <br>
                             </div>
                             <div class='container'>
                             <div class='row'>
                              <div class='col-md-4'>
                                <div class='slide-up-boxes n2'>

                                <a href='index.php?insert_product'>
                                <h5 style='font-size:16px;'>Insert Product <span class='glyphicon glyphicon-tasks' style='right:-70px;font-size:2.4em;color: rgba(0, 0, 0, .5);'></span></h5>
                                <div style='background-color:#6ed3cf;text-decoration:none;color:white;'>Add New Product clothing Product From this tab....</div>
                                </a>
                                </div>

                                </div>

                                <div class='col-md-4'>
                                  <div class='slide-up-boxes n2'>

                                  <a href='index.php?view_products'>
                                  <h5 style='font-size:16px;'>View Products <span class='glyphicon glyphicon-filter' style='right:-70px;font-size:2.4em;color: rgba(0, 0, 0, .5);'></span></h5>
                                  <div style='background-color:#b56969;color:white;'>Add New Product clothing Product From this tab....</div>
                                  </a>
                                  </div>

                                  </div>

                                  <div class='col-md-4'>
                                    <div class='slide-up-boxes n2'>

                                    <a href='index.php?insert_cat'>
                                    <h5 style='font-size:16px;'>Insert New Category <span class='glyphicon glyphicon-edit' style='right:-50px;font-size:2.4em;color: rgba(0, 0, 0, .5);'></span></h5>
                                    <div style='background-color:#daad86;color:white;'>Add New Product clothing Product From this tab....</div>
                                    </a>
                                    </div>

                                    </div>

                              </div>
                              </div>

                              <div class='container'>
                              <div class='row'>
                               <div class='col-md-4'>
                                 <div class='slide-up-boxes n2'>

                                 <a href='index.php?view_cats'>
                                 <h5 style='font-size:16px;'>View All Categoires <span class='glyphicon glyphicon-list-alt' style='right:-55px;font-size:2.4em;color: rgba(0, 0, 0, .5);'></span></h5>
                                 <div style='background-color:#729f98;color:white;'>Add New Product clothing Product From this tab....</div>
                                 </a>
                                 </div>

                                 </div>

                                 <div class='col-md-4'>
                                   <div class='slide-up-boxes n2'>

                                   <a href='index.php?insert_brand'>
                                   <h5 style='font-size:16px;'>Insert New Brand <span class='glyphicon glyphicon-tags' style='right:-60px;font-size:2.4em;color: rgba(0, 0, 0, .5);'></span></h5>
                                   <div style='background-color:#b0aac2;color:white;'>Add New Product clothing Product From this tab....</div>
                                   </a>
                                   </div>

                                   </div>

                                   <div class='col-md-4'>
                                     <div class='slide-up-boxes n2'>

                                     <a href='index.php?view_brands'>
                                     <h5 style='font-size:16px;'>View All Brand <span class='glyphicon glyphicon-calendar' style='right:-70px;font-size:2.4em;color: rgba(0, 0, 0, .5);'></span></h5>
                                     <div style='background-color:#62bcfa;color:white;'>Add New Product clothing Product From this tab....</div>
                                     </a>
                                     </div>

                                     </div>

                               </div>
                               </div>

                               <div class='container'>
                               <div class='row'>
                                <div class='col-md-4'>
                                  <div class='slide-up-boxes n2'>

                                  <a href='index.php?view_customers'>
                                  <h5 style='font-size:16px;'>View Customers <span class='glyphicon glyphicon-user' style='right:-65px;font-size:2.4em;color: rgba(0, 0, 0, .5);'></span></h5>
                                  <div style='background-color:#e05915;color:white;'>Check How Many Customers Are Register With Early Bird.</div>
                                  </a>
                                  </div>

                                  </div>

                                  <div class='col-md-4'>
                                    <div class='slide-up-boxes n2'>

                                    <a href='../index.php'>
                                    <h5 style='font-size:16px;'>Early Bird User <span class='glyphicon glyphicon-eye-open' style='right:-60px;font-size:2.4em;color: rgba(0, 0, 0, .5);'></span></h5>
                                    <div style='background-color:#b0aac2;color:white;'>Add New Product clothing Product From this tab....</div>
                                    </a>
                                    </div>

                                    </div>


                                  <div class='col-md-4'>
                                    <div class='slide-up-boxes n2'>

                                    <a href='logout.php'>
                                    <h5 style='font-size:16px;'>Log Out <span class='glyphicon glyphicon-off' style='right:-90px;font-size:2.4em;color: rgba(0, 0, 0, .5);'></span></h5>
                                    <div style='background-color:#f2b632;color:white;'>You Can Easly Log Out From This Tabs.</div>
                                    </a>
                                    </div>

                                    </div>
                                  </div>
                                  </div>

                             ";





                     }
                    }
                   }
                  }
                 }
                }
               }
              }
            }
          }

        ?>

      </div>
    </div>


  </div>





</div>
</div>




  <script src="../assets/js/jquery-2.1.3.min.js"></script>
  <script src="../assets/js/function.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
  <script src="../assets/js/thumbnail-slider.js" type="text/javascript"></script>
  <script src="../assets/js/viewportchecker.js"></script>


</body>
</html>

<?php } ?>
