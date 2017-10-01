<table class="table table-striped table-hover">

<h4><p class="text-danger" style="font-weight:bolder">♢ View All Products ♢ </p></h4>  
  <tr>
    <th>No.</th>
    <th>Title</th>
    <th>Image</th>
    <th>Price</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
  <?php
    include ("includes/db.php");
    $get_pro = "select * from products";
    $run_pro = mysqli_query($con,$get_pro);
    $i = 0;
    while($row_pro = mysqli_fetch_array($run_pro)){

      $pro_id = $row_pro['product_id'];
      $pro_title = $row_pro['product_title'];
      $pro_image = $row_pro['product_image'];
      $pro_price = $row_pro['product_price'];
      $i++;

   ?>
  <tr class="bg-warning">
    <td><?php echo $i; ?></td>
    <td><?php echo $pro_title; ?></td>
    <td><img src="product_images/<?php echo $pro_image; ?>" width="60" height="60" class="img-thumbnail"></td>
    <td><?php echo $pro_price; ?></td>
    <td style="padding-left:15px;"><a href="index.php?edit_pro=<?php echo $pro_id; ?>"><span class="glyphicon glyphicon-edit gi-2x" aria-hidden="true"></span></a></td>
    <td style="padding-left:15px;"><a href="delete_pro.php?delete_pro=<?php echo $pro_id; ?>"><span class="glyphicon glyphicon-trash gi-2x" aria-hidden="true"></span></a></td>
  </tr>
  <?php   }   ?>
</table>
