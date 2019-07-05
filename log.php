<!DOCTYPE html>
<html>
<head>
	<title>login and registration</title>
	<link rel="stylesheet" href="sil.css">
</head>
<body>
	<a href="mysuru.php"><button>back</button></a>
	<div class="login-page">
		<div class="form">

		<form class="register_form" action="" method="post" enctype="data-part/form-data"> 
			<input type="text" placeholder="user name" name="username" required />
			<input type="password" placeholder="password" name="password" required />
			<input type="text" placeholder="Full Name" name="name" required />

			<input type="email" placeholder="email id" name="email" required />
			<input type="text" placeholder="address" name="address" required />
			<input type="text" placeholder="contact number" name="contact_no" required />
			<input type="text" placeholder="city" name="city" required />
			<!-- <input type="submit" name="create" value="Create"> -->
            <button type="submit" name="create">create</button>
            <p class="message">Already Registred? <a href="#"> Login</a></p>
         </form>
         <form class="login-form" action="" method="post" enctype="multi-part/form-data">
         	<input type="text" placeholder="user name" name="username" required />
            <input type="password" placeholder="password" name="password" required />
            <button type="submit" name="log_in">login</button>
            <p class="message">Not Registred? <a href="#">Register</a></p>             	
         </form>
		</div>
	     </div>
	     <script src='https://code.jquery.com/jquery-3.2.1.min.js'>
	     </script>
	     <script>
	     	$('.message a').click(function(){
	     		$('form').animate ({height:"toggle",opacity:"toggle"},"slow")
	     	})
	     	

	     </script>
	     
<?php 
session_start();
include 'connection.php';

if(isset($_POST['create'])){
$username = $_POST['username'];
$password = $_POST['password'];
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$contact_no = $_POST['city'];
$city = $_POST['city'];
$qy = "select * from register where username = '$username'";
$result = mysqli_query($conn, $qy);
$num = mysqli_num_rows($result);
if($num == 1){
	echo "<font color='white'>duplicate data";
}
else
{
    $sql = "insert into register(username, password, name, email, address, contact_no, city) values('$username', '$password', '$name', '$email', '$address', '$contact_no', '$city')";
    mysqli_query($conn, $sql);
    echo "<font color='white' size='40px'>data inserted successfully";
}
}
if(isset($_POST['log_in']))
{
   $username = $_POST['username'];
   $password = $_POST['password'];
   $q = "select * from register where username = '$username' and password = '$password'";
   $res = mysqli_query($conn, $q);
   $n = mysqli_num_rows($res);
   if($n == 1){
   	$_SESSION['username'] = $username;
   	header('location:prmte.php');
   }
   else
   {
   	echo "<font color='white' size='40px'>Invalid Data. Try again";
   }
}
 ?>
</body>
</html>