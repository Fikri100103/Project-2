<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="" method="post">
     	<h1>LOGIN</h1>
     	<label>Username</label>
     	<input type="text" name="username" placeholder="Username"><br>
     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>
		<a href="registrasi-user.php" class="ca">Create an account</a>
     	<button type="submit"><a href="index.php">Sign In</a></button>
		
     </form>

	 <?php

include "koneksi.php";

$username=$_POST["username"];
$password=md5($_POST["password"]);

  $sql="insert into user (username,password) values
		('$username','$password')";

  $hasil=mysqli_query($kon,$sql); 

?>

</body>
</html>