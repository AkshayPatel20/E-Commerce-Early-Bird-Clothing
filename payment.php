<?php

include("includes/db.php");

$total = 0;
global $con;
$ip = getIp();
$sel_price = "select * from cart where ip_add='$ip'";
$run_price = mysqli_query($con,$sel_price);

while($p_price = mysqli_fetch_array($run_price)){

  $pro_id = $p_price['p_id'];
  $pro_price = "select * from products where product_id='$pro_id'";
  $run_pro_price = mysqli_query($con,$pro_price);
  while ($pp_price = mysqli_fetch_array($run_pro_price)) {
    $product_price = array($pp_price['product_price']);
    $product_name = $pp_price['product_title'];
     $values = array_sum($product_price);

     $total +=$values;

}
}
?>

<div class="paypal_button">
<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">

  <!-- Identify your business so that you can collect the payments. -->
  <input type="hidden" name="business" value="earlybird@gmail.com">

  <!-- Specify a Buy Now button. -->
  <input type="hidden" name="cmd" value="_xclick">

  <!-- Specify details about the item that buyers will purchase. -->
  <input type="hidden" name="item_name" value="<?php echo $product_name; ?>">
  <input type="hidden" name="amount" value="<?php echo $total; ?>">
  <input type="hidden" name="currency_code" value="USD">

  <input type="hidden" name="return" value="http://localhost/e-commerce/payment_success.php">

  <!-- Display the payment button. -->
  <input type="image" name="submit" border="0"
  src="assets/img/paypalbutton.png"
  alt="Buy Now" class="paypal_button_size">
  <img alt="" border="0" width="1" height="1"
  src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >

</form>
</div>

<form method="post" action="">
<div class="container n2 hidden-xs" style="border-left:3px solid brown;width:90%;">
  <div class="row">
    <div class="col-md-12 col-xs-12">
      <h4 style="color:brown">Select Payment Methods:</h4>
      <hr style="border-top:2px soild #eee;">
    </div>
    </div>

    <div class="row">
      <div class="col-md-12">
      <div style=" border: 1px solid #ccc;border-radius: 4px;line-height: 1.42857143;padding: 9.5px;margin-bottom:8px;"><img src="assets/img/paypal.png" style="height:50px;width:60px;margin-left:15px;"><b style="margin-left:20px;">PayPal</b><span style="margin-left:20px;" class="text-success">"Pay Your Bill Faster with Paypal."</span></div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div style=" border: 1px solid #ccc;border-radius: 4px;line-height: 1.42857143;padding: 9.5px;margin-bottom:25px;"><img src="assets/img/cod.jpg" style="height:50px;width:60px;margin-left:15px;"><b style="margin-left:20px;">Cash On Delivery</b><span style="margin-left:20px;" class="text-success">"Pay When You Get Product."</span></div>
      </div>
    </div>

    <input type="submit" value="Place Your Order" name="porders" class="form-control btn-warning" style="position:absolute;width:250px;height:40px;top:333px;left:900px;">

    <div class="row" style="margin-bottom:30px;">
    </div>

</div>
</form>

<form method="post" action="">
<div class="visible-xs">
    <h4 style="color:brown;margin-left:-15px;">Select a Payment Method</h4>
    <div class='well' style='height:80px;width:310px;margin-left:-15px;padding-left:0px;padding-top:8px;padding-bottom:5px;margin-top:15px  ;'>
      <p style="margin-left:10px;">Get 10% cashback<br><span class="text-muted">Pay using Paypal or make your first debit card transaction to get 10% cashback.</span></p>
    </div>

      <div style="width:310px;background-color:white;border: 1px solid #ccc;margin-left:-15px;border-radius: 4px;line-height: 1.42857143;padding: 9.5px"><b style="margin-left:10px;">PayPal</b></div>
      <div style="width:310px;background-color:white;border: 1px solid #ccc;border-top:0px;margin-left:-15px;border-radius: 4px;line-height: 1.42857143;padding: 9.5px;margin-bottom:8px;"><b style="margin-left:10px;">Cash on Delivery</b>
        <input type="submit" value="Place Your Order" name="porders" class="form-control btn-warning" style="position:absolute;width:150px;height:30px;top:313px;left:180px;">
      </div>

    <div style="width:310px;background-color:white;border: 1px solid #ccc;margin-left:-15px;border-radius: 4px;line-height: 1.42857143;padding: 9.5px"><span style="margin-left:10px;">Gift Cards,Vouchers & Promotional Codes</span>
      <input type="text" placeholder="Enter Code" class="form-control" name="code" style="margin-left:7px;margin-top:8px;width:160px"><input type="submit" name="apply" value="Apply" class="btn btn-default" style="float:right;width:110px;margin-top:-35px">
    </div>


</div>


</form>

<?php
require 'PHPMailer/PHPMailerAutoload.php';

if (isset($_POST['porders'])) {
  $user = $_SESSION['customer_email'];

  $get_img = "select * from customers where customer_email='$user'";
  $run_img = mysqli_query($con,$get_img);

  $row_img = mysqli_fetch_array($run_img);
  $c_image = $row_img['customer_image'];

  $c_name = $row_img['customer_name'];



$mail = new PHPMailer;

$mail->isSMTP();                                   // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                            // Enable SMTP authentication
$mail->Username = 'undestroyable.ap@gmail.com';          // SMTP username
$mail->Password = 'apmakeap'; // SMTP password
$mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                 // TCP port to connect to

$mail->setFrom('earlybird@gmail.com', 'EARLYBIRD');
$mail->addReplyTo('earlybird@gmail.com', 'EARLYBIRD');
$mail->addAddress($user);   // Add a recipient
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML

$bodyContent = '<h3>HELLO</h3>';
$bodyContent .= '<p>Thank you for your order. We’ll send a confirmation when your order ships.</p>';
$bodyContent .= '<p>We hope to see you again soon.</p>';
$bodyContent .= '<h4><b>EarlyBird.com</b></h4>';

$mail->Subject = 'Early Bird Product Purchase Mail';
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo "<script>alert('Thank you for your order.')</script>";
    echo "<script>window.open('index.php','_self')</script>";
}

}
?>
