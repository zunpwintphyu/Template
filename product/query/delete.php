
<?php 
include "../../conf/config.php";
$id= $_GET['id'];

$result = mysqli_query($conn,"DELETE FROM product WHERE id='$id'");
header("location:http://localhost/Template/product/product.php");

?>
