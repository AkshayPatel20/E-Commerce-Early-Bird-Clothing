<?php
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();                                   // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                            // Enable SMTP authentication
$mail->Username = 'undestroyable.ap@gmail.com';          // SMTP username
$mail->Password = 'apmakeap'; // SMTP password
$mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                 // TCP port to connect to
$e2 = $_GET["esub"];
$mail->setFrom('earlybird@gmail.com', 'EARLYBIRD');
$mail->addReplyTo('earlybird@gmail.com', 'EARLYBIRD');
$mail->addAddress($e2);   // Add a recipient
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML

$bodyContent = '<h3>HELLO</h3>';
$bodyContent .= '<p>Thank you for your subscription to <b>Early Bird</b> newsletter.</p>';
$bodyContent .= '<p>We’re very glad that you’re interested in our updates.Please take this free shipping on your All order.</p>';

$mail->Subject = 'Early Bird subscription Notification';
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo "<script>alert('Thank you For Subscribing to our newsletter')</script>";
    echo "<script>window.open('index.php','_self')</script>";
}
?>
