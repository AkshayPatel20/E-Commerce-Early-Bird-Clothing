<?php

include ("includes/db.php");

if(isset($_GET['edit_cat'])){
  $cat_id = $_GET['edit_cat'];
  $get_cat = "select * from categories where cat_id='$cat_id'";
  $run_cat = mysqli_query($con,$get_cat);
  $row_cat = mysqli_fetch_array($run_cat);

  $cat_id = $row_cat['cat_id'];
  $cat_title = $row_cat['cat_title'];

}

?>


<form method="post" action="">

<div class="container">

    <div class="row">
        <div class="col-md-3 text-danger" style="font-weight:bolder"><h4 align="right">Update Category Here:</h4></div>
        <div class="col-md-7">
        <div class="input-group" >
        <input type="text" class="form-control" name="new_cat" value="<?php echo $cat_title; ?>">
        <span class="input-group-btn">
        <input class="btn btn-success" name="update_cat" type="submit" value="Update"/>
        </span>
    </div>

    </div>

</div>

</form>

<?php



    if (isset($_POST['update_cat'])) {

    $update_id = $cat_id;

    $new_cat = $_POST['new_cat'];
    $update_cat = "update categories set cat_title='$new_cat' where cat_id='$update_id'";
    $run_cat = mysqli_query($con, $update_cat);
    if ($run_cat) {
        echo "<script>alert('Category has Been Updated!')</script>";
        echo "<script>window.open('index.php?view_cats','_self')</script>";
    }
    }
?>
