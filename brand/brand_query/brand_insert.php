<h1>hello</h1>
<?php
include "../../conf/config.php";
$id=$_POST['id'];
$brandname = $_POST['brandname']; 

// echo $id;
// echo "<br>";

// echo $brandname;
// echo "<br>";


//  exit();



 $res=mysqli_query($conn,"INSERT INTO brand (brand_name) VALUES ('$brandname')");
header("location:http://localhost/Template/brand/brand_product.php");
 
//var_dump($res);
//$res = mysqli_query($conn,"UPDATE product SET brand_name='$brandname',model='$model',release_date='$releasedate',price='$price',create_date='$createdate' WHERE id=$id");
?>