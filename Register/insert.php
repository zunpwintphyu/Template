<?php
include "../conf/config.php";
$username = $_POST['name']; 
$email=$_POST['email']; 
$password = $_POST['password'];
$confirmpassword = $_POST['confpassword'];



//  echo $username;
//  echo "<br>";

//  echo $email;
//  echo "<br>";

//  echo $password;
//  echo "<br>";

//  echo $confirmpassword;
//  echo "<br>";

 $res=mysqli_query($conn,"INSERT INTO register (username,email,userpassword,confirmpassword) VALUES ('$username','$email','$password','$confirmpassword')");
 header("location:http://localhost/Template");
?>
