<?php
include("includes/db.php");
?>

<div class="cart_box n2 hidden-xs">
<div class="container">

  <form method="post" action="">

    <div class="row">
      <div class="col-md-3">
        <hr>
      </div>
      <div class="col-md-4" style="margin-bottom:25px;">
        <h2><span class="label label-primary" style="padding: 8px 80px;">Change Your Password</span></h2>
      </div>
      <div class="col-md-3">
        <hr>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4">
        <h4 align="right">Enter Current Password:</h4>
      </div>
      <div class="col-md-3">
        <input type="password" required class="form-control" name="current_pass" placeholder="Enter Current Password" pattern="\S{6}" required title="Password Must be More than 6 Digits">
      </div>
      <div class="col-md-4">

      </div>
    </div>

    <div class="row">
      <div class="col-md-4">
        <h4 align="right">Enter New Password:</h4>
      </div>
      <div class="col-md-3">
        <input type="password" required class="form-control" name="new_pass" placeholder="Enter New Password" pattern="\S{6}" required title="New Password Must be More than 6 Digits">
      </div>
      <div class="col-md-2" style="text-align:left;">

      </div>
    </div>

    <div class="row">
      <div class="col-md-4">
        <h4 align="right">Enter Confirm Password:</h4>
      </div>
      <div class="col-md-3">
        <input type="password" required class="form-control" name="new_pass_again" placeholder="Enter Confirm Password" pattern="\S{6}" required title="Password Must Contain More than 6 Digits">
      </div>
      <div class="col-md-2" style="text-align:left;">

      </div>
    </div>

    <div class="row">
      <div class="col-md-3">

      </div>
      <div class="col-md-4">
        <input type="submit" name="change_pass" value="Change Password" class="btn btn-success" style="padding:5px 100px;margin-bottom:15px;"/>
      </div>
      <div class="col-md-5">

      </div>
    </div>

    </div>


  </form>
</div></div>

<div class="visible-xs" style="margin-left:20px;width:300px;">
  <a href='my_account.php' class='btn btn-default' style='border-radius:100%;margin-bottom:10px;'><span class='glyphicon glyphicon-arrow-left' style='font-size:1.2em' aria-hidden='true'></span></a>
  <form method="post" action="">
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">Change Your Password</h3>
    </div>
    <div class="panel-body">
        <input type="password" required class="form-control" name="current_pass" placeholder="Enter Current Password" pattern="\S{6}" required title="Password Must be More than 6 Digits" style="margin-bottom:8px;">
        <input type="password" required class="form-control" name="new_pass" placeholder="Enter New Password" pattern="\S{6}" required title="New Password Must be More than 6 Digits" style="margin-bottom:8px;">
        <input type="password" required class="form-control" name="new_pass_again" placeholder="Enter Confirm Password" pattern="\S{6}" required title="Password Must Contain More than 6 Digits">

    </div>
    <div class="panel-footer">
        <input type="submit" name="change_pass" value="Change Password" class="btn btn-success" style="width:200px;margin-left:35px;"/>

    </div>
  </div>
</form>


</div>


<?php
  if (isset($_POST['change_pass'])) {
    $user = $_SESSION['customer_email'];

    $current_pass = $_POST['current_pass'];
    $new_pass = $_POST['new_pass'];
    $new_again = $_POST['new_pass_again'];

    $sel_pass = "select * from customers where customer_pass='$current_pass' AND customer_email='$user'";

    $run_pass = mysqli_query($con,$sel_pass);

    $check_pass = mysqli_num_rows($run_pass);
    if($check_pass==0){
       echo "<script>alert('Your Current Password Is Wrong!')</script>";
       exit();
    }

    if ($new_pass!=$new_again) {
       echo "<script>alert('New Password Do Not Match With Confirm Password!')</script>";
       exit();
    }
    else {
      $update_pass = "update customers set customer_pass='$new_pass' where customer_email='$user'";
      $run_update = mysqli_query($con,$update_pass);

      echo "<script>alert('Your Password Was Updated Successfully!')</script>";
      echo "<script>window.open('my_account.php','_self')</script>";
    }
  }

?>
