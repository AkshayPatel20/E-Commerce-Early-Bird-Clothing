<form method="post" action="">

<div class="container">

    <div class="row">
        <div class="col-md-3 text-danger" style="font-weight:bolder"><h4 align="right">Insert New Category Here:</h4></div>
        <div class="col-md-7">
        <div class="input-group" >
        <input type="text" class="form-control" placeholder="Add New Categories" name="new_cat" required>
        <span class="input-group-btn">
        <input class="btn btn-success" name="add_cat" type="submit" value="Submit"/>
        </span>
    </div>

    </div>

</div>

</form>

<?php

include ("includes/db.php");

    if (isset($_POST['add_cat'])) {


    $new_cat = $_POST['new_cat'];
    $insert_cat = "insert into categories (cat_title) values ('$new_cat')";
    $run_cat = mysqli_query($con, $insert_cat);
    if ($run_cat) {
        echo "<script>alert('New Category has Been Inserted!')</script>";
        echo "<script>window.open('index.php?view_cats','_self')</script>";
    }
    }
?>
