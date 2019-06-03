<!DOCTYPE html>
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color:#009911;
}

li {
  float: left;
  border-right:1px solid #bbb;
}

li:last-child {
  border-right: none;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color:#006633;
  
}
div{
  background-color:green;
  width:100%;
  height:auto;
}
body {
 /* background-image: url("images.jpg"); */
 background-color: #cccccc;
 background-repeat: no-repeat;
}
</style>
</head>
<body>
<!--<img src="images.jpg" width="100px" height="90px"><br><br>-->

<ul>
  <li><a  href="home.php">Home</a></li>
  <li><a href="#">About</a></li>
  <li><a href="brand/brand_create.php">Brand</a></li>
  <li><a href="product/product.php">Product</a></li>
  <li style="float:right"><a href="Login/login.php">Login</a></li>
  <li style="float:right"><a href="#">Logout</a></li>
  <li style="float:right"><a href="Register/register.php">Register</a></li>
</ul>
<div></div>
</body>
</html>
