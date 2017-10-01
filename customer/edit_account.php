<?php
include("includes/db.php");

$user = $_SESSION['customer_email'];

$get_customer = "select * from customers where customer_email='$user'";
$run_customer = mysqli_query($con,$get_customer);

$row_customer = mysqli_fetch_array($run_customer);

$c_id = $row_customer['customer_id'];
$name = $row_customer['customer_name'];
$email = $row_customer['customer_email'];
$pass = $row_customer['customer_pass'];
$image = $row_customer['customer_image'];
$country = $row_customer['customer_country'];
$city = $row_customer['customer_city'];
$contact = $row_customer['customer_contact'];
$address = $row_customer['customer_address'];

?>
    <div class="cart_box n2 hidden-xs">
    <div class="container">

      <form method="post" action="" enctype="multipart/form-data">

        <div class="row">
          <div class="col-md-3">
            <hr>
          </div>
          <div class="col-md-4" style="margin-bottom:25px;">
            <h2><span class="label label-primary" style="padding: 8px 45px;">Update Your Early Bird Account</span></h2>
          </div>
          <div class="col-md-3  ">
            <hr>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <h4 align="right">Name:</h4>
          </div>
          <div class="col-md-3">
            <input type="text" class="form-control" name="c_name" value="<?php echo $name; ?>">
          </div>
          <div class="col-md-4">

          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <h4 align="right">Email:</h4>
          </div>
          <div class="col-md-3">
            <input type="email" class="form-control" name="c_email" value="<?php echo $email; ?>">
          </div>
          <div class="col-md-2" style="text-align:left;">

          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <h4 align="right">Password:</h4>
          </div>
          <div class="col-md-3">
            <input type="password" class="form-control" name="c_pass" value="<?php echo $pass; ?>" disabled>
          </div>
          <div class="col-md-2" style="text-align:left;">

          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <h4 align="right">Profile Image:</h4>
          </div>
          <div class="col-md-3">
            <input type="file" class="form-control" name="c_image">
          </div>
          <div class="col-md-2" style="text-align:left;">
                  <img src="customer_images/<?php echo $image;  ?>" width="40px" height="40px" class="img-circle">
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <h4 align="right">Country:</h4>
          </div>
          <div class="col-md-3">
          <select name="c_country" class="form-control" disabled><option><?php echo $country; ?></option><option>India</option><option>USA</option><option>China</option><option>Japan</option><option>Pakistan</option><option>Nepal</option></select>
          </div>
          <div class="col-md-2" style="text-align:left;">

          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <h4 align="right">City:</h4>
          </div>
          <div class="col-md-3">
            <input type="text" class="form-control" name="c_city" value="<?php echo $city; ?>">
          </div>
          <div class="col-md-2" style="text-align:left;">

          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <h4 align="right">Contact Number:</h4>
          </div>
          <div class="col-md-3">
            <input type="text" class="form-control" name="c_contact" value="<?php echo $contact; ?>" pattern="[0-9]{10}" title="Your Mobile Number Should Be 10 Digit Number">
          </div>
          <div class="col-md-2" style="text-align:left;">

          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <h4 align="right">Address:</h4>
          </div>
          <div class="col-md-3">
            <input type="text" class="form-control" name="c_address" value="<?php echo $address; ?>">
          </div>
          <div class="col-md-2" style="text-align:left;">

          </div>
        </div>

        <div class="row">
          <div class="col-md-3">

          </div>
          <div class="col-md-4">
            <input type="submit" name="update" value="Update Account" class="btn btn-success" style="padding:5px 120px;margin-bottom:15px;margin-top:5px"/>
          </div>
          <div class="col-md-5">

          </div>
        </div>


      </form>

    </div>
    </div>




  </div>

  <div class="visible-xs" style="margin-left:20px;width:300px;">
      <form method="post" action="" enctype="multipart/form-data">
            <a href='my_account.php' class='btn btn-default' style='border-radius:100%;margin-bottom:10px;'><span class='glyphicon glyphicon-arrow-left' style='font-size:1.2em' aria-hidden='true'></span></a>
          <div class="panel panel-info">
              <div class="panel-heading">
                  <h3 class="panel-title">Edit Account</h3>
              </div>
              <div class="panel-body">
          <input type="text" class="form-control" name="c_name" value="<?php echo $name; ?>" style="margin-bottom:8px">
          <input type="email" class="form-control" name="c_email" value="<?php echo $email; ?>" style="margin-bottom:8px">
          <select name="c_country" class="form-control" disabled style="margin-bottom:8px"><option><?php echo $country; ?></option><option>India</option><option>USA</option><option>China</option><option>Japan</option><option>Pakistan</option><option>Nepal</option></select>
          <input type="text" class="form-control" name="c_city" value="<?php echo $city; ?>" style="margin-bottom:8px;width:130px;">
          <input type="text" class="form-control" name="c_contact" value="<?php echo $contact; ?>" pattern="[0-9]{10}" title="Your Mobile Number Should Be 10 Digit Number" style="margin-bottom:8px;width:140px;margin-top:-42px;margin-left:138px;width:130px">
          <input type="file" class="form-control" name="c_image" style="width:210px;"><img src="customer_images/<?php echo $image;  ?>" width="40px" height="40px" class="img-rounded" style="margin-top:-50px;margin-left:220px">
          <input type="text" class="form-control" name="c_address" value="<?php echo $address; ?>" style="margin-bottom:8px">
          <input type="password" class="form-control" id="edit_passcheck" name="c_pass" value="<?php echo $pass; ?>" disabled style="margin-bottom:8px">
              </div>
        <div class="panel-footer"><input type="submit" name="update" value="Update Account" class="btn btn-info" style="width:200px;margin-left:35px;"/></div>

          </div>


      </form>
  </div>


</div>








<?php

  if(isset($_POST['update'])){
    $ip = getIp();

    $customer_id = $c_id;
    $c_name = $_POST['c_name'];
    $c_email = $_POST['c_email'];
    $c_image = $_FILES['c_image']['name'];
    $c_image_tmp = $_FILES['c_image']['tmp_name'];
    $c_city = $_POST['c_city'];
    $c_contact = $_POST['c_contact'];
    $c_address = $_POST['c_address'];

    move_uploaded_file($c_image_tmp,"customer_images/$c_image");

    $update_c = "update customers set customer_name='$c_name',customer_email='$c_email',customer_city='$c_city',customer_contact='$c_contact',customer_address='$c_address',customer_image='$c_image' where customer_id='$customer_id'";
    $run_update = mysqli_query($con,$update_c);

    if($run_update){
        echo "<script>alert('Your Account Successfully Updated')</script>";
        echo "<script>window.open('my_account.php','_self')</script>";
    }

  }


?>
