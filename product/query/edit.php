<?php 
include "../../conf/config.php";
$id= $_GET['id'];
$result = mysqli_query($conn,"SELECT * FROM product ORDER BY id=$id");
while($res = mysqli_fetch_array ($result))
    {
    $brandname=$res['brand_id'];
    $quantity = $res['quantity']; 
    $model =$res['model'];
    $releasedate =$res['release_date'];
    $price=$res['price'];
    $createdate=$res['create_date']; 

    }
$query = mysqli_query($conn,"SELECT * FROM brand ORDER BY id");

//  echo $brandname;
//  echo "<br>";

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
            background-color:#1abc9c;
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
<h1 id="a">Please!!  Edit Mobile Phone Information</h1><br><br><br><br>

<form action="update.php"  method="POST">

        <input type="hidden" name="id" value="<?php echo $id ?>">
            <label style="margin-left:500px;">Brand_Name:
         
     <select name="brand_id">
        <option selected="selected"> Choose One
        </option>
            <?php
                while($brand = mysqli_fetch_array($query)){
                $selected=($brandid == $brand['id'])? "selected" : "";
            ?>
        <option value="<?php echo $brand['id']; ?>" <?php echo $selected  ?> >
                  <?php echo $brand['brand_name']?>
        </option>
            <?php
            }
            ?>
          
    </select><br><br>
    
            <label style="margin-left:480px;">Quantity:
            <input type="text" name="quantity" style="margin-left:100px; color:indigo;"value="<?php echo $quantity;?>"></label><br><br>

            <label style="margin-left:500px;">Model:
            <input type="text" name="model" style="margin-left:100px; color:indigo;"value="<?php echo $model;?>"></label><br><br>

            <label style="margin-left:500px;">Release_Date:
            <input type="Date" name="release" style="margin-left:43px; color:indigo;" value="<?php echo $releasedate; ?>"></label><br><br>

            <label style="margin-left:500px;">Price:
            <input type="text" name="price" style="margin-left:110px; color:indigo;" value="<?php echo  $price; ?>"></label><br><br>
        
            <label style="margin-left:500px;">Create_Date:
            <input type="Date" name="create" style="margin-left:52px; color:indigo;" value="<?php echo $createdate; ?>"></label>
            <br>
               <div style="margin-left:900px;">
                <input type="submit" name="update" value="..Save.." style="background:#1abc9c;">
               </div><br><br><br><br><br>
    
                <div style="margin-left:30px;">
                  <button>
                   <a href="index.php" > << Previous Page </a>
                  </button>
                <div>          
</form>      
</body>
</html>