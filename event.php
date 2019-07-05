<?php 
include 'connection.php';
error_reporting(0);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Cultural Events</title>
	<link rel="stylesheet" type="text/css"  href="sit.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css ">
</head>
<body>
	<h1> CULTURAL EVENTS IN MYSORE </h1>
	<div class="menu">

		<a href="mysuru.php"><div class="btn"><i class="fa fa-home" aria-hidden="true"></i>Home</div></a>
		<a href="et.php"><div class="btn"><i class="fa fa-music" aria-hidden="true"></i>events</div></a>
	</div>
</body>
</html>
<?php
$s = "select c.id,c.event_name, c.date_from, c.date_to, c.venue, c.time, c.price from cultural_event c";
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