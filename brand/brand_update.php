<?php 
include "../conf/config.php";

if(isset($_POST['update']))
{  
    $id=$_POST['id'];
    $brandname= $_POST['change'];
    
    //echo $brandname;
    //echo "<br>";

    // echo $model;
    // echo "<br>";

    // echo $releasedate;
    // echo "<br>";

    // echo $price;
    // echo "<br>";

    // echo $createdate;
    // echo "<br>";

    // exit;

    $result = mysqli_query($conn,"UPDATE brand SET brand_name='$brandname' WHERE id=$id");
    //var_dump($result);
    header("location:http://localhost/Template/brand/brand_product.php");
}