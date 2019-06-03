<?php 
include "../conf/config.php";
$id= $_GET['id'];
$result = mysqli_query($conn,"SELECT brand.* FROM brand ORDER BY id=$id");
while($res = mysqli_fetch_array ($result))
    {
        $id=$res['id'];
        $brandname=$res['brand_name'];
    }
//$query = mysqli_query($conn,"SELECT * FROM brand ORDER BY id");

//   echo $brandname;
//   echo "<br>";
//  echo $model;
//  echo "<br>";

//  echo $releasedate;
//  echo "<br>";

//  echo $price;
//  echo "<br>";

//  echo $createdate;
//  echo "<br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <style>
     #a{
            text-align: center;
            background-color:#888888;
            color:white;
            height:70px;
            padding-top:30px;
            padding-bottom:10px;
            font-size: 40px;
        }
    form{
         color:indigo;
         font-size:20px;
         font-style:bold;
        }
    </style>
</head>
<body>
<h1 id="a">Please!!  Edit Mobile Brand</h1><br>
            <div style="margin-left:30px;">
                  <button>
                   <a href="index.php" > << Previous Page </a>
                  </button>
            <div>
<form action="brand_update.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <h1><b><label style="margin-left:450px;">Brand:
            <input type="text" name="change"  style="margin-left:100px; color:indigo;"value="<?php echo $brandname;?>"></label></b></h1>
            <div style="margin-left:1200px;">
                <input type="submit" name="update" value="..Change.." style="background:#888888;">
            </div>  
</form>      
</body>
</html>