<?php 
include 'connection.php';
error_reporting(0);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Sports</title>
	<link rel="stylesheet" type="text/css"  href="soprts.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css ">
	<style type="text/css">
		table{
			border-collapse: collapse;
			width: 100%;
			color: #000000;
			font-family: monospace;
			font-size: 25px;
			text-align: left;
			/*background: #ffcc66;*/
			padding-top: 40%;
		}
		th{
			background: #d96459;
			color: black;
		}

	</style>
</head>
<body>
	<h1> SPORTS EVENTS IN MYSORE </h1>
	<div class="menu">

		<a href="mysuru.php"><div class="btn"><i class="fa fa-home" aria-hidden="true"></i>Home</div></a>
		<a href="sp.php"><div class="btn"><i class="fa fa-futbol-o" aria-hidden="true"></i>sports</div>
	</div></a>
	
</body>
</html>
<?php
$s = "select s.id,s.event_name, s.date_from, s.date_to, s.venue, s.time, s.price from sports s";
$y = mysqli_query($conn, $s);
$u = mysqli_num_rows($y);
if($u != 0 ){
	// echo "<h1>Cultural Events In Mysore</h1>";
	echo "<table border='1'>
			<tr>
				<th>Id</th>
				<th>Event Name</th>
				<th>Date_from</th>
				<th>Date_to</th>
				<th>Venue</th>
				<th>Time</th>
				<th>Price</th>
			</tr>";
	while($row = mysqli_fetch_assoc($y)){
		echo "<tr>";
		echo "<td>".$row['id']."</td>";		
		echo "<td>".$row['event_name']."</td>";
		echo "<td>".$row['date_from']."</td>";
		echo "<td>".$row['date_to']."</td>";
		echo "<td>".$row['venue']."</td>";
		echo "<td>".$row['time']."</td>";
		echo "<td>".$row['price']."</td>";
		echo "</tr>";
	}
	echo "</table>";
}
?>
