<?php 
include "../conf/config.php";
//$result=mysqli_query($conn,"UPDATE `crud` SET `id`=[value-1],`name`=[value-2],`rollno`=[value-3],`address`=[value-4],`email`=[value-5],`phoneno`=[value-6] WHERE 1");
$result = mysqli_query($conn,"SELECT  brand_name, product.* FROM product LEFT JOIN brand ON brand.id=product.brand_id ORDER BY product.id ASC");
//$res=mysqli_fetch_array($result);
//var_dump($res);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Store</title>
</head>
<body>
<br>
<button><a href="../../Template/index.php"> << Previous </a></button>
<div style="margin-left:1110px;">
 <form action="create.php" method="POST">
  <button type="submit" class="btn btn-info">+ Add New Data</button>
 </form> 
</div><br>

<table border="1" width="100%" height="auto" background="#002233">
  <tr>
    <th><center>ID</center></th>
    <th><center>Brand_Name</center></th>
    <th><center>Quantity</center></th> 
    <th><center>Model</center></th>
    <th><center>Release_Date</center></th>
    <th><center>Price</center></th> 
    <th><center>Create_Date</center></th>
    <th colspan="2"><center>Action</center></th>
  </tr>
  <?php
               while($res = mysqli_fetch_array($result))
                 {
                   echo "<tr>";
                   echo "<td>".$res['id']."</td>";
                   echo "<td>".$res['brand_name']."</td>";
                   echo "<td>".$res['quantity']."</td>";
                   echo "<td>".$res['model']."</td>";
                   echo "<td>".$res['release_date']."</td>";
                   echo "<td>".$res['price']."</td>";
                   echo "<td>".$res['create_date']."</td>";
                   echo "<td><button><a href=\"query/edit.php?id=$res[id]\">Edit</a></button></td>";
                   echo "<td><button><a href=\"query/delete.php?id=$res[id]\" onclick=\"return confirm('Are you sure want to delete?')\">DELETE</a></button></td>";
                   echo "</tr>";
                 }
  ?> 
</table>
</body>
</html>




