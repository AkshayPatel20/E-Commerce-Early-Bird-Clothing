<?php
include("includes/db.php");
?>

<div class="cart_box n2 hidden-xs">
<div class="container">

  <form id="loginForm" method="post" action="">

    <div class="row">
      <div class="col-md-3">
        <hr>
      </div>
      <div class="col-md-4" style="margin-bottom:25px;">
      <h3><p class="text-danger" style="font-weight:bolder">♢ Login To Buy Product! ♢ </p></h3>
      </div>
      <div class="col-md-3">
        <hr>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4">
        <h4 align="right">Email:</h4>
      </div>
      <div class="col-md-3">
        <input type="email" class="form-control" name="email" placeholder="Enter E-Mail ID" required>
      </div>
      <div class="col-md-4">

      </div>
    </div>

    <div class="row">
      <div class="col-md-4">
        <h4 align="right">Password:</h4>
      </div>
      <div class="col-md-3">
        <input type="password" class="form-control" name="pass" placeholder="Enter Password" pattern="\S{6}" required title="Password Must Contain More than 6 Digits">
      </div>
      <div class="col-md-2" style="text-align:left;">
        <!-- <a href="checkout.php?forgot_pass">Forgot Password?</a> -->
      </div>
    </div>

    <div class="row">
      <div class="col-md-3">

      </div>
      <div class="col-md-5" style="margin-bottom:10px;margin-left:30px;">
          <div class="g-recaptcha" data-sitekey="6Lc8kg0UAAAAAM88aXTf0ua8ZeCJEt1FLu7V7_Zk"></div>
      </div>
      <div class="col-md-4">

      </div>
    </div>


    <div class="row">
      <div class="col-md-3">

      </div>
      <div class="col-md-4">
        <input type="submit" name="login" value="Login" class="btn btn-success" style="padding:5px 160px;margin-bottom:15px;"/>
      </div>
      <div class="col-md-5">

      </div>
    </div>

    <div class="row">
      <div class="col-md-3">
        <hr>
      </div>
      <div class="col-md-3">
        <h6>New to Early Bird?</h6>
      </div>
      <div class="col-md-4">
        <hr>
      </div>
    </div>

    <div class="row">
      <div class="col-md-3">

      </div>
      <div class="col-md-4" style="margin-bottom:20px;">
        <a href="customer_register.php" style="text-decoration:none;color:white"><button type="button" class="btn btn-warning" style="padding:5px 87px;">Create Your Early Bird Account</button></a>
      </div>
      <div class="col-md-5">

      </div>
    </div>


  </form>
</div>
</div>

  <div class="visible-xs" style="margin-left:-33px;">

  <div class="col-xs-12" style="margin-top:-23px;margin-bottom:10px;"><h3 style="color:brown">Welcome</h3></div>
  <div class="panel-group col-xs-4" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Create an account. <small>New to Early Bird?</small>
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">

        <form method="post" action="customer_register.php" enctype="multipart/form-data">
        <input type="text" class="form-control" name="c_name" placeholder="Enter Your Name" style="margin-bottom:8px" required>
        <input type="email" class="form-control" name="c_email" placeholder="Enter Email-ID" style="margin-bottom:8px" required>
        <select name="c_country" class="form-control" style="margin-bottom:8px;"><option>Select a Country</option><option>India</option><option>USA</option><option>China</option><option>Japan</option><option>Pakistan</option><option>Nepal</option></select>
        <input type="text" class="form-control" name="c_city" placeholder="Enter City" style="margin-bottom:8px;width:130px;" required>
        <input type="text" class="form-control" name="c_contact" placeholder="Mobile Number" style="margin-bottom:8px;width:140px;margin-top:-42px;margin-left:138px" required>
        <input type="file" class="form-control" name="c_image" style="margin-bottom:8px">
        <textarea cols="20" rows="5" class="form-control" name="c_address" style="margin-bottom:8px" placeholder="Your Address" required></textarea>
        <input type="password" class="form-control" id="Password" name="c_pass" placeholder="Create Password" style="margin-bottom:8px" required>
        <input type="checkbox" onchange="document.getElementById('Password').type = this.checked ? 'text': 'Password'" style="">&nbsp;Show Password
        <input type="submit" name="register" value="Create Account" class="btn btn-warning" style="margin-top:15px;width:280px;margin-bottom:15px;"/>
        <small>By Creating an account, you agree to EarlyBird's <span class="text-primary">Condition of Use</span> and <span class="text-primary">Privacy Policy.</span></small>
        </form>

      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Login. <small>Already a customer?</small>
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
          <form id="loginForm" method="post" action="">
          <input type="email" class="form-control" name="email" placeholder="E-Mail ID" required>
          <input type="password" class="form-control" id="login_pass" name="pass" placeholder="EarlyBird Password" pattern="\S{6}" required title="Password Must Contain More than 6 Digits" style="margin-bottom:15px;">
          <input type="checkbox" onchange="document.getElementById('login_pass').type = this.checked ? 'text': 'Password'" style="">&nbsp;Show Password
          <input type="submit" name="loginm" value="Login" class="btn btn-warning" style="margin-top:15px;width:280px;margin-bottom:15px;"/>
          <small>By signing in you are agreeing to our terms listed in the <span class="text-primary">Legal Information section</span> and <span class="text-primary">Privacy Notice.</span></small>
          </form>


      </div>
    </div>
  </div>

  </div>



    </div>




<div class="hidden-xs">
<?php
if (isset($_POST['login'])) {

 if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){
    $secret = "6Lc8kg0UAAAAAPE-0nLL4RAv0eMfK7ut8E78s0eb";
    $response = $_POST['g-recaptcha-response'];
    $remoteip = $_SERVER['REMOTE_ADDR'];
    $url = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$remoteip");
    $responseData = json_decode($url);
    if($responseData->success){

      $c_email = $_POST['email'];
      $c_pass = $_POST['pass'];

      $sel_c = "select * from customers where customer_pass='$c_pass' AND customer_email='$c_email'";
      $run_c = mysqli_query($con,$sel_c);
      $check_customer = mysqli_num_rows($run_c);


      if($check_customer==0)
      {
        echo "<script>alert('Password Or Email is Incorrect!')</script>";
        exit();
      }
      $ip = getIp();
      $sel_cart = "select * from cart where ip_add='$ip'";
      $run_cart = mysqli_query($con,$sel_cart);

      $check_cart = mysqli_num_rows($run_cart);

        if($check_customer>0 AND $check_cart==0){
          $_SESSION['customer_email']=$c_email;

          echo "<script>alert('You Logged in Successfully.')</script>";
          echo "<script>window.open('customer/my_account.php','_self')</script>";
        }
        else {
          $_SESSION['customer_email']=$c_email;

          echo "<script>alert('You Logged in Successfully.')</script>";
          echo "<script>window.open('checkout.php','_self')</script>";
        }

    }

    else {
      echo "<script>alert('Password Or Email is Incorrect!')</script>";
    }
  }
}

?>
</div>


<div class="visible-xs">
<?php
if (isset($_POST['loginm'])) {


      $c_email = $_POST['email'];
      $c_pass = $_POST['pass'];

      $sel_c = "select * from customers where customer_pass='$c_pass' AND customer_email='$c_email'";
      $run_c = mysqli_query($con,$sel_c);
      $check_customer = mysqli_num_rows($run_c);


      if($check_customer==0)
      {
        echo "<script>alert('Password Or Email is Incorrect!')</script>";
        exit();
      }
      $ip = getIp();
      $sel_cart = "select * from cart where ip_add='$ip'";
      $run_cart = mysqli_query($con,$sel_cart);

      $check_cart = mysqli_num_rows($run_cart);

        if($check_customer>0 AND $check_cart==0){
          $_SESSION['customer_email']=$c_email;

          echo "<script>alert('You Logged in Successfully.')</script>";
          echo "<script>window.open('customer/my_account.php','_self')</script>";
        }
        else {
          $_SESSION['customer_email']=$c_email;

          echo "<script>alert('You Logged in Successfully.')</script>";
          echo "<script>window.open('checkout.php','_self')</script>";
        }

}


?>
</div>


<?php

  if(isset($_POST['register'])){
    $ip = getIp();
    $c_name = $_POST['c_name'];
    $c_email = $_POST['c_email'];
    $c_pass = $_POST['c_pass'];
    $c_image = $_FILES['c_image']['name'];
    $c_image_tmp = $_FILES['c_image']['tmp_name'];
    $c_country = $_POST['c_country'];
    $c_city = $_POST['c_city'];
    $c_contact = $_POST['c_contact'];
    $c_address = $_POST['c_address'];

    move_uploaded_file($c_image_tmp,"customer/customer_images/$c_image");

    $insert_c = "insert into customers (customer_ip,customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,customer_address,customer_image) values ('$ip','$c_name','$c_email','$c_pass','$c_country','$c_city','$c_contact','$c_address','$c_image')";

    $run_c = mysqli_query($con,$insert_c);

    $sel_cart = "select * from cart where ip_add='$ip'";
    $run_cart = mysqli_query($con,$sel_cart);

    $check_cart = mysqli_num_rows($run_cart);

    if($check_cart==0){
        $_SESSION['customer_email']=$c_email;

        echo "<script>alert('Account Has Been Created Successfully.')</script>";
        echo "<script>window.open('customer/my_account.php','_self')</script>";

    }
    else {
      $_SESSION['customer_email']=$c_email;

      echo "<script>alert('Account Has Been Created Successfully.')</script>";
      echo "<script>window.open('checkout.php','_self')</script>";
    }


  }


?>
