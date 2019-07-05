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

			<label for="event_name"><b>Event Name</b></label><br>
			<input type="text" name="event" value="<?php echo $_GET['en']; ?>"><br>
		
		    <label for="date_from"><b>Date From</b></label><br>
			<input type="date" name="date_from" value="<?php echo $_GET['df']; ?>"><br>

		    <label for="date_to"><b>Date To</b></label><br>
			<input type="date"  name="date_to" value="<?php echo $_GET['dt']; ?>"><br>
    		
    		<label for="venue"><b>Venue</b></label><br>
			<input type="text" name="venue" value="<?php echo $_GET['ven']; ?>"><br>
		
		    <label for="time"><b>Time</b></label><br>
			<input type="time" name="time" value="<?php echo $_GET['tim']; ?>"><br>
		
		    <label for="price"><b>Price</b></label><br>
			<input type="text" name="price" value="<?php echo $_GET['p']; ?>"><br>
			<!-- <label for="image"><b>Event Image</b></label><br>
    		<input type="file" placeholder="image" name="uploadfile" required/><br> -->
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
			$evn = $_GET['event'];
			$dfm = $_GET['date_from'];
			$dtn = $_GET['date_to'];
			$v = $_GET['venue'];
			$t = $_GET['time'];
			$pc = $_GET['price'];
			$q = "update sports set event_name='$evn', date_from = '$dfm', date_to='$dtn', venue='$v', time='$t', price='$pc' where id = '$id'";
			$data = mysqli_query($conn, $q);
			if($data){
				echo "<font color='green'>Updated successfully";
								header("location:admin.php");

			}
			else{
				echo "<font color='red'>Not updated";
			}
		}
		else{
			echo "<font color='white' size='40px'>click on update to save changes";
		}
?>