<table class="table table-striped table-hover">

<h4><p class="text-danger" style="font-weight:bolder">♢ View All Customers ♢ </p></h4>
  <tr>
    <th>No.</th>
    <th>Name</th>
    <th>Email</th>
    <th>Image</th>
    <th>Delete</th>
  </tr>
  <?php
    include ("includes/db.php");
    $get_c = "select * from customers";
    $run_c = mysqli_query($con,$get_c);
    $i = 0;
    while($row_c = mysqli_fetch_array($run_c)){

      $c_id = $row_c['customer_id'];
      $c_name = $row_c['customer_name'];
      $c_email = $row_c['customer_email'];
      $c_image = $row_c['customer_image'];
      $i++;

   ?>
  <tr class="bg-warning">
    <td><?php echo $i; ?></td>
    <td><?php echo $c_name; ?></td>
    <td><?php echo $c_email; ?></td>
    <td><img src="../customer/customer_images/<?php echo $c_image; ?>" width="50" height="50" class="img-circle"></td>
    <td style="padding-left:15px;"><a href="delete_c.php?delete_c=<?php echo $c_id; ?>"><span class="glyphicon glyphicon-trash gi-2x" aria-hidden="true"></span></a></td>
  </tr>
  <?php   }   ?>
</table>
