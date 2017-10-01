<table class="table table-striped table-hover">

<h4><p class="text-danger" style="font-weight:bolder">♢ View All Categories ♢ </p></h4>
  <tr>
    <th>Category ID</th>
    <th>Category Title</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
  <?php
    include ("includes/db.php");
    $get_cat = "select * from categories";
    $run_cat = mysqli_query($con,$get_cat);
    $i = 0;
    while($row_cat = mysqli_fetch_array($run_cat)){

      $cat_id = $row_cat['cat_id'];
      $cat_title = $row_cat['cat_title'];
      $i++;

   ?>
  <tr class="bg-warning">
    <td><?php echo $i; ?></td>
    <td><?php echo $cat_title; ?></td>
    <td style="padding-left:15px;"><a href="index.php?edit_cat=<?php echo $cat_id; ?>"><span class="glyphicon glyphicon-edit gi-2x" aria-hidden="true"></span></a></td>
    <td style="padding-left:15px;"><a href="delete_cat.php?delete_cat=<?php echo $cat_id; ?>"><span class="glyphicon glyphicon-trash gi-2x" aria-hidden="true"></span></a></td>
  </tr>
  <?php   }   ?>
</table>
