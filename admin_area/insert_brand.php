<form method="post" action="">

<div class="container">

    <div class="row">
        <div class="col-md-3 text-danger" style="font-weight:bolder"><h4 align="right">Insert New Brands Here:</h4></div>
        <div class="col-md-7">
        <div class="input-group" >
        <input type="text" class="form-control" placeholder="Add New Brands" name="new_brand" required>
        <span class="input-group-btn">
        <input class="btn btn-success" name="add_brand" type="submit" value="Submit"/>
        </span>
    </div>

    </div>

</div>

</form>

<?php

include ("includes/db.php");

    if (isset($_POST['add_brand'])) {


    $new_brand = $_POST['new_brand'];
    $insert_brand = "insert into brands (brand_title) values ('$new_brand')";
    $run_brand = mysqli_query($con, $insert_brand);
    if ($run_brand) {
        echo "<script>alert('New brand has Been Inserted!')</script>";
        echo "<script>window.open('index.php?view_brands','_self')</script>";
    }
    }
?>
