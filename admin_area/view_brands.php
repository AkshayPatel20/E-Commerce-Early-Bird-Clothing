<table class="table table-striped table-hover">

<h4><p class="text-danger" style="font-weight:bolder">♢ View All Brands ♢ </p></h4>
  <tr>
    <th>Brand ID</th>
    <th>Brand Title</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
  <?php
    include ("includes/db.php");
    $get_brand = "select * from brands";
    $run_brand = mysqli_query($con,$get_brand);
    $i = 0;
    while($row_brand = mysqli_fetch_array($run_brand)){

      $brand_id = $row_brand['brand_id'];
      $brand_title = $row_brand['brand_title'];
      $i++;

   ?>
  <tr class="bg-warning">
    <td><?php echo $i; ?></td>
    <td><?php echo $brand_title; ?></td>
    <td style="padding-left:15px;"><a href="index.php?edit_brand=<?php echo $brand_id; ?>"><span class="glyphicon glyphicon-edit gi-2x" aria-hidden="true"></span></a></td>
    <td style="padding-left:15px;"><a href="delete_brand.php?delete_brand=<?php echo $brand_id; ?>"><span class="glyphicon glyphicon-trash gi-2x" aria-hidden="true"></span></a></td>
  </tr>
  <?php   }   ?>
</table>
