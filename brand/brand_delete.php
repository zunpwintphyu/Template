
<?php 
include "../conf/config.php";
$id= $_GET['id'];

$result = mysqli_query($conn,"DELETE FROM brand WHERE id='$id'");
header("location:http://localhost/Template/brand/brand_product.php");
//var_dump($result);
?>
