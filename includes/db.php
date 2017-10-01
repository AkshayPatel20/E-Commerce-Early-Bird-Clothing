<?php

$con = mysqli_connect("localhost","root","","ecommerce");

if (mysqli_connect_errno())
 {
  echo "Failed to connect to mysql: " . mysqli_connect_error();
 }

?>
