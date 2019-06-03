<?php 
include "../conf/config.php";
$result = mysqli_query($conn,"SELECT brand.* FROM brand  ORDER BY id ASC");
//$result = mysqli_query($conn,"SELECT  brand* FROM brand LEFT JOIN brand ON brand.id=product.brand_id ORDER BY product.id ASC");

//var_dump($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  
</head>
<body>
<div class="container">
  <br>
  <h2>Category of Mobile Phone</h2><br>
  <table border=1; style="width:100%; height:auto;">
      <tr>
        <th class="table-info">ID</th>
        <th class="table-danger">Brand</th>
        <th colspan="2"  class="table-info">Action</th>
      </tr>
      <?php
               while($res = mysqli_fetch_array($result))
                 {
                   echo "<tr>";
                   echo "<td>".$res['id']."</td>";
                   echo "<td>".$res['brand_name']."</td>";
                   echo "<td ><button><a href=\"brand_edit.php?id=$res[id]\">Edit</a></button></td>" ;
                   echo "<td><button><a href=\"brand_delete.php?id=$res[id]\" onclick=\"return confirm('Are you sure want to delete?')\">DELETE</a></button></td>";
                   echo "</tr>";
                 }
      ?> 
    
  </table><br><br>
  <button><a href="brand_create.php"> << Previous </a></button>
</div>
</body>
</html>
