<html>
<title>Promote Events</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="pm.css">
<body>
	<div class="container"> 
	<button style="float: right;" class="btn btn-danger">
		<a href="logout.php">Logout</a>
	</button>
</div>
	<br><br>
	<h1>EVENTS</h1>
<form  action="" method="post" enctype="multi-part/form-data"> 
    <div class="container">

			<label for="event_name"><b>Event Name</b></label><br>
			<input type="text" placeholder="event_name" name="event" required/><br>
		
		    <label for="date_from"><b>Date From</b></label><br>
			<input type="date" placeholder="date" name="date_from" required/><br>

		    <label for="date_to"><b>Date To</b></label><br>
			<input type="date" placeholder="date" name="date_to" required/><br>
    		
    		<label for="venue"><b>Venue</b></label><br>
			<input type="text" placeholder="venue" name="venue" required/><br>
		
		    <label for="time"><b>Time</b></label><br>
			<input type="time" placeholder="time" name="time" required/><br>
		
		    <label for="price"><b>Price</b></label><br>
			<input type="text" placeholder="price(if any) else enter 0" name="price" required/><br>
			<label><b>Event type</b></label><br>
			<select name="event_type" required>
				<option>Default</option>
				<option>Cultural</option>
				<option>Sports</option>
				<option>Others</option>
			</select><br><br>
			<!-- <label for="image"><b>Event Image</b></label><br>
    		<input type="file" placeholder="image" name="uploadfile" required/><br> -->
			<button type="submit" name="submit">submit</button><br>
	</div>
</form>
</body>
</html>
 <?php 
 session_start();
 error_reporting(0);
 include 'connection.php';
 echo "<b>WELCOME</b>".$_SESSION['username'];
 $userprofile = $_SESSION['username'];
 if($userprofile){

 }
 else
 {
 	header("loaction:log.php");
 }
 $query = "select id from register where username = '$userprofile'";
 $data = mysqli_query($conn, $query);
 $total = mysqli_fetch_assoc($data);
 		if(isset($_POST["submit"]))
 		{
 			// $filename = $_FILES['uploadfile']['name'];
 			// $tempname = $_FILES['uploadfile']['tmp_name'];
 			// $folder = 'uploads/'.$filename;
 			// move_uploaded_file($tempname, $folder);

 			
 echo $sql="insert into promote(cust_id,event_name,date_from,date_to,time,venue,price,event_type) values('".$total['id']."','".$_POST['event']."','".$_POST['date_from']."','".$_POST['date_to']."','".$_POST['time']."','".$_POST['venue']."','".$_POST['price']."','".$_POST['event_type']."')";

	$result=mysqli_query($conn,$sql);
	if($result)
	{
		echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}
 		/*echo	$query =mysqli_query($conn,"insert into register(username,password,email,address,contact_no,city) values('".$_POST['username']."','".$_POST['password']."','".$_POST['email']."','".$_POST['address']."','".$_POST['contact_no']."','".$_POST['city']."')");
 			//$data = mysqli_query($conn,$query);

 			if($query)
 			{
 				echo "Data inseted successfully";
 				//header('location:login.php');
 			}
 			else
 			{
 				echo "data not inserted";
 				//echo mysqlI_error($conn);
 			}*/
if(isset($_POST["submit"])){
	$sq = "select event_name, date_from, date_to, venue, time, price from promote where id = (select prmte_id from events where cultural ='y' and id = (select max(id) from events))";
	 $r = mysqli_query($conn, $sq);
	 $p = mysqli_num_rows($r);
	 if($p){
	 	$q = "CALL prd('".$_POST['event']."', '".$_POST['date_from']."', '".$_POST['date_to']."', '".$_POST['venue']."', '".$_POST['time']."', '".$_POST['price']."')";
	 	$re = mysqli_query($conn, $q);
	 	if ($re){
	 		header("location:prmte.php?inserted=1");
	 	}
	 }
	 if(isset($_GET['inserted=1'])){
	 	echo '<script>alert("data inserted")<?script>';
	 }
	}

if(isset($_POST["submit"])){
	 $p = "select event_name, date_from, date_to, venue, time, price from promote where id=(select prmte_id from events where sports ='y' and id = (select max(id) from events))";
	 $rt = mysqli_query($conn, $p);
	 $e = mysqli_num_rows($rt);
	 if($e){
	 	$tq = "CALL abc('".$_POST['event']."', '".$_POST['date_from']."', '".$_POST['date_to']."', '".$_POST['venue']."', '".$_POST['time']."', '".$_POST['price']."')";
	 	$pq = mysqli_query($conn, $tq);
	 	if($pq){
	 		header("loaction:prmte.php?inserted=1");
	 	}
	 	if(isset($_GET['inserted=1'])){
	 	echo '<script>alert("data inserted")<?script>';
	 }
	 }
}
?>