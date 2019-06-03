<?php
include "../../conf/config.php";
$brandname = $_POST['brandname']; 
$quantity=$_POST['quantity']; 
$model = $_POST['model'];
$releasedate = $_POST['release'];
$price=$_POST['price'];
$createdate=$_POST['create']; 



//   echo $brandname;
//   echo "<br>";

//  echo $quantity;
//  echo "<br>";

//  echo $model;
//  echo "<br>";

//  echo $releasedate;
//  echo "<br>";

//   echo $price;
//   echo "<br>";

//   echo $createdate;
//   echo "<br>";
  



 $res=mysqli_query($conn,"INSERT INTO product (brand_id,quantity, model, release_date, price, create_date) VALUES ('$brandname','$quantity','$model','$releasedate','$price','$createdate')");
 header("location:http://localhost/Template/product/product.php");
 
//  var_dump($res);
// $res = mysqli_query($conn,"UPDATE product SET brand_name='$brandname',model='$model',release_date='$releasedate',price='$price',create_date='$createdate' WHERE id=$id");