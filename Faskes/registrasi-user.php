<!DOCTYPE html>
<html>
<head>
<title>Registrasi User</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
    <form action="" method="post">
      <h1>Registrasi User</h1>
        <div class="form-group">
            <label>Username :</label>
            <input type="text" name="username" class="form-control" placeholder="Username" />
        </div>
        <div class="form-group">
            <label>Password :</label>
            <input type="password" name="password" class="form-control" placeholder="Password" />
        </div>
        <div class="form-group">
            <label>Email :</label>
            <input type="email" name="email" class="form-control" placeholder="Email" />
        </div>
        <input type="hidden" name="create" id="create" value="<?php echo date("Y-m-d"); ?>">
        <input type="hidden" name="login" id="login" value="<?php echo date("Y-m-d"); ?>">
        <input type="hidden" name="status" id="status" value="<?php echo 1 ?>">
		<div class="form-group">
            <label>Role :</label>
            <input type="text" name="role" class="form-control" placeholder="Administrator or Public" />
        </div>
		
		<a href="login.php" class="ca">Already have an account?</a>
        <button type="submit" name="submit" class="btn btn-primary"><a href="login.php">Submit</a></button>
    </form>
</div>

<?php

include "koneksi.php";

$username=$_POST["username"];
$email=$_POST["email"];
$role=$_POST["role"];
$status=$_POST["status"];
$password=md5($_POST["password"]);

  $sql="insert into user (username,email,password,role,status) values
		('$username','$email','$password','$role','$status')";

  $hasil=mysqli_query($kon,$sql); 

?>

</body>
</html>