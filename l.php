<?php 
session_start();
include 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>LOG IN</title>
		<link rel="stylesheet" href="sil.css">
		<style type="text/css">
			body{
				background-image: url(images/bae.jpg);
			}
		</style>

</head>
<body>
	<button><a href="mysuru.php">back</a></button>
	<!-- <div class="container"> -->
		<div class="login-page">
		<div class="form">

		<form class="login-form" action="" method="post" enctype="multi-part/form-data">
         	<input type="text" placeholder="user name" name="username" required />
            <input type="password" placeholder="password" name="password" required />
            <button type="submit" name="log_in">login</button>
            <!-- <p class="message">Not Registred? <a href="#">Register</a></p>             	 -->
         </form>
</div>
</div>

</body>
</html>
<?php
if(isset($_POST['log_in']))
{
   $username = $_POST['username'];
   $password = $_POST['password'];
   $q = "select * from admin where username = '$username' and password = '$password'";
   $res = mysqli_query($conn, $q);
   $n = mysqli_num_rows($res);
   if($n == 1){
   	$_SESSION['username'] = $username;
   	header('location:admin.php');
   }
   else
   {
   	echo "<font color='black' size='40px'>Invalid Data. Try again !!!";
   }
}
 ?>