<?php



session_start();

session_destroy();

echo "<script>window.open('login.php?logged_out=Thanks for stopping by!We hope to see you again soon.','_self')</script>";




?>
