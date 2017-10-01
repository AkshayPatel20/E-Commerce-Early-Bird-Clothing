<?php
session_start();
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


  <div class="mainslide">

    <div class="adminbg" style="background-image: url('../assets/img/bgadmin.jpg');">
        <div class="bgwindow">

         <div class="logo1" style="background-image: url('../assets/img/logo1.svg');">  </div>

         <div class="m1"><h4><?php echo @$_GET['logged_out'];  ?></h4></div>
         <div class="container loginform">


               <h3 class="text-danger">♢ Login to Our Site ♢</h3>
               <div id="result"></div>
               <h3><span class="glyphicon glyphicon-lock s1 text-danger" aria-hidden="true"></span></h3>
               <p class="text-muted">Enter Your UserName and Password to Log on.</p>
               <hr>
               <form method="post" action="login.php">
                 <div class="input-group" style="margin-bottom:5px;">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></div>
               <input type="email" name="email" class="form-control design1" placeholder="Username.." required>
                 </div>
                 <div class="input-group" style="margin-bottom:5px;">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></div>
               <input type="password" name="password" class="form-control design1" placeholder="Password.." required>
                 </div>
               <button type="submit" class="btn btn-danger design1 form-control" name="login" id="login">Sign In</button>
               </form>


         </div>

       </div>


     </div>
  </div>





  <script src="../assets/js/jquery-2.1.3.min.js" type="text/javascript"></script>
  <script src="../assets/js/function.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
  <script src="../assets/js/thumbnail-slider.js" type="text/javascript"></script>
  <script src="../assets/js/viewportchecker.js"></script>


</body>
</html>

<?php

include ("includes/db.php");


if(isset($_POST['login'])){
  $email = $_POST['email'];
  $pass = $_POST['password'];

  $sel_user = "select * from admins where user_email='$email' AND user_pass='$pass'";
  $run_user = mysqli_query($con,$sel_user);

  $check_user = mysqli_num_rows($run_user);

  if($check_user==1){

    $_SESSION['user_email']=$email;

    echo "<script>window.open('index.php?logged_in=You have successfully Logged in!','_self')</script>";

  }
  else {
    echo "<script>alert('UserName OR Password is Incorrect,try again!')</script>";
  }

}
?>
