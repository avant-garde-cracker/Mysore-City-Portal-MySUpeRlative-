<?php 
include 'connection.php';
error_reporting(0);
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Update Page</title>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="sss.css">

 </head>
 <body>
 	<!-- <div class="login-page"> -->
 	<!-- <div class="form"> -->
 
 <form action="" method="get"> 
<div class="container">
			<label for="event_name"><b>Id</b></label><br>
			<input type="text" name="id" value="<?php echo $_GET['di']; ?>"><br>

			<label for="event_name"><b>Image</b></label><br>
			<input type="text" name="image" value="<?php echo $_GET['im']; ?>"><br>
		
		    <label for="date_from"><b>Movie Name</b></label><br>
			<input type="text" name="movie_name" value="<?php echo $_GET['mn']; ?>"><br>

		    <label for="date_to"><b>Language</b></label><br>
			<input type="text"  name="lang" value="<?php echo $_GET['l']; ?>"><br>
    		
    		<label for="venue"><b>Theatres</b></label><br>
			<input type="text" name="theatres" value="<?php echo $_GET['th']; ?>"><br>
		
			<button type="submit" name="update">Update</button><br>
			</div>
		</form>
	<!-- </div> -->
	<script src='https://code.jquery.com/jquery-3.2.1.min.js'>
	     </script>
	     <!-- <script>
	     	$('.message a').click(function(){
	     		$('form').animate ({height:"toggle",opacity:"toggle"},"slow")
	     	})
	     	

	     </script> -->
 </body>
 </html>
 <?php  
		if(isset($_GET['update'])){
			$id = $_GET['id'];
			$evn = $_GET['image'];
			$dfm = $_GET['movie_name'];
			$dtn = $_GET['lang'];
			$v = $_GET['Theatres'];
			$q = "update movies set image='$evn', movie_name = '$dfm', lang='$dtn', Theatres='$v' where id='$id'";
			$data = mysqli_query($conn, $q);
			if($data){
				echo "<font color='green' size='40px'>Updated successfully";
				header("location:admin.php");
			}
			else{
				echo "<font color='red' size='40px'>Not updated";
			}
		}
		else{
			echo "<font color='white' size='40px'>click on update to save changes";
		}
?>