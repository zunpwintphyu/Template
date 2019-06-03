<?php 
include "../../conf/config.php";

if(isset($_POST['update']))
{  
    $id= $_POST['id'];
    $brandid= $_POST['brand_id'];
    $model = $_POST['model']; 
    $releasedate = $_POST['release'];
    $price= $_POST['price'];
    $createdate=$_POST['create'];
    
 
    // echo $id;
    // echo "<br>";
    // echo $brandid;
    // echo "<br>";

    // echo $model;
    // echo "<br>";

    // echo $releasedate;
    // echo "<br>";

    // echo $price;
    // echo "<br>";

    // echo $createdate;
    // echo "<br>";

    // exit;

    $result = mysqli_query($conn,"UPDATE product SET brand_id='$brandid',model='$model',release_date='$releasedate',price='$price',create_date='$createdate' WHERE id=$id");
     //var_dump($result);
     header("location:http://localhost/Template/product/product.php");
}