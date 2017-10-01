<div class="cart_box n2 hidden-xs">
<div class="container">

  <form method="post" action="">

    <div class="row">
      <div class="col-md-3">
        <hr>
      </div>
      <div class="col-md-4" style="margin-bottom:25px;">
        <h2><span class="label label-primary" style="padding: 8px 80px;">Delete Account</span></h2>
      </div>
      <div class="col-md-3">
        <hr>
      </div>
    </div>

    <div class="row">
      <div class="col-md-10">
        <h4>Do you Really want to DELETE your Account? But you may not be able to restore it Back.</h4>
      </div>
      <div class="col-md-2">
      </div>

    </div>

    <div class="row"  style="margin-bottom:30px">
      <div class="col-md-5" style="text-align:right">
        <input type="submit" name="yes" value="Yes I Want" class="btn btn-danger" style="padding:5px 100px;margin-bottom:15px;"/>
      </div>
      <div class="col-md-3">
        <input type="submit" name="no" value="No I Don't Want" class="btn btn-warning sweet-3" style="padding:5px 100px;margin-bottom:15px;"/>

      </div>
      <div class="col-md-4" style="text-align:left;">

      </div>
    </div>




  </form>
</div></div>


      <div class="visible-xs" style="margin-left:-10px;width:300px;">
        <form method="post" action="">
        <div class="panel panel-danger">
          <div class="panel-heading">
            <h3 class="panel-title">Delete Account</h3>
          </div>
          <div class="panel-body">
            Do you Really want to DELETE your Account? But you may not be able to restore it Back.
          </div>
          <div class="panel-footer">
            <input type="submit" name="yes" value="Yes I Want" class="btn btn-danger" style="width:130px;"/>
            <input type="submit" name="no" value="No I Don't Want" class="btn btn-warning sweet-3" style="width:130px;"/>

          </div>
        </div>
      </form>


      </div>

<?php
include("includes/db.php");

$user = $_SESSION['customer_email'];
if(isset($_POST['yes'])){
  $delete_customer = "delete from customers where customer_email='$user'";
  $run_customer = mysqli_query($con,$delete_customer);
  echo "<script>alert('Your Account has been Deleted!')</script>";
  echo "<script>window.open('../index.php','_self')</script>";
}
if(isset($_POST['no'])){
  echo "<script>alert('Your Account is Safe!')</script>";
  echo "<script>window.open('my_account.php','_self')</script>";
}


?>
