<?php session_start(); 
include "../conf/config.php";

if(isset($_POST['Submit'])) {
    $user=$_POST['Username'];
	$pass=$_POST['Password'];
    
}
		$result = mysqli_query($conn, "SELECT register.* FROM register WHERE username='$user' AND userpassword=md5('$pass')")
					or die("Could not execute the select query.");
		$row = mysqli_fetch_assoc($result);
		echo $user;
		echo $pass;
		
		var_dump($row);
		exit();
        if(is_array($row) && !empty($row)) {
			$validuser = $row['username'];
			$_SESSION['valid'] = $validuser;
			$_SESSION['name'] = $row['username'];
			$_SESSION['id'] = $row['id'];
        }
        if(isset($_SESSION['valid'])) {
        	header("location:http://localhost/Template/product/product.php");
             }
        else {
			echo "Invalid username or password.";
			echo "<br/>";
			echo "<a href='login.php'>Go back</a>";
		}

		// if(isset($_SESSION['valid'])) {
		// 	header("location:http://localhost/Template/product/product.php");
        // }

      
// 		if(is_array($row) && !empty($row)) {
// 			$validuser = $row['Username'];
// 			$_SESSION['valid'] = $validuser;
// 			$_SESSION['Username'] = $row['Username'];
// 			$_SESSION['Password'] = $row['Password'];
// 		} else {
// 			echo "Invalid username or password.";
// 			echo "<br/>";
// 			echo "<a href='login.php'>Go back</a>";
// 		}

// 		if(isset($_SESSION['valid'])) {
// 			header('Location: index.php');				
//         }
//         else
//         {
//             header("location:http://localhost/Template/Login/query.php"); 
//         }
// 	}
// }       
         


//  echo $username;
//  echo "<br>";

//  echo $password;
//  echo "<br>";

//  $res=mysqli_query($conn,"SELECT * FROM register ");
//  $result = mysqli_fetch_array($res);
//  if($result['username'] == '$username' && $result['userpassword']=='$password')
//  {
//      echo "Login Success";
//  }
//  else{
//     echo "Login Fill";
//  }
 //header("location:http://localhost/Template");
 //var_dump($res);

