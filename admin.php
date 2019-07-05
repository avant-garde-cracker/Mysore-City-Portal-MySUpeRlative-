<?php 
session_start();
include 'connection.php';
error_reporting(0);
 echo "WELCOME ".$_SESSION['username'];
?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Admin Page</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.w3-button {width:150px;}
button{
	float: right;
}
</style>
 	<link rel="stylesheet" type="text/css" href="adm.css">
 </head>
 <body>
 	<button class="w3-button w3-yellow">
 		<a href="logot.php">Logout</a>
</button>
 <?php 
  $q = "select * from register";
 $data = mysqli_query($conn, $q);
 $total = mysqli_num_rows($data);
 echo "<h1><b>Register accounts</b></h1>";
 echo "<table border='1'>
 		<tr>
			<th>ID</th>
			<th>Username</th>
			<th>Password</th>
			<th>Full Name</th>
			<th>Email ID</th>
			<th>Address</th>
			<th>Phone no.</th>
			<th>City</th>
		</tr>";
 if($total!= 0){
 	while( $row = mysqli_fetch_assoc($data)){
 		echo "<tr>";
		echo "<td>".$row['id']."</td>";
		echo "<td>".$row['username']."</td>";
		echo "<td>".$row['password']."</td>";
		echo "<td>".$row['name']."</td>";
		echo "<td>".$row['email']."</td>";
		echo "<td>".$row['address']."</td>";
		echo "<td>".$row['contact_no']."</td>";
		echo "<td>".$row['city']."</td>";
		echo "</tr>";
 	}
 	echo "</table>";
 }
 $sql = "select * from details";
$res = mysqli_query($conn, $sql);
$num = mysqli_num_rows($res);

if($num!=0){
	echo "<h1>Promotional events</h1>";
	echo "<table border='1'>
			<tr>
				<th>Username</th>
				<th>Id</th>
				<th>Event name</th>
				<th>Date_from</th>
				<th>Date_to</th>
				<th>Venue</th>
				<th>Time</th>
				<th>Price</th>
				<th>Event_type</th>
				<th colspan='2'>Operations</th>
			</tr>";
while($row = mysqli_fetch_assoc($res)){
	    echo "<tr>";
		echo "<td>".$row['username']."</td>";
		echo "<td>".$row['id']."</td>";
		echo "<td>".$row['event_name']."</td>";
		echo "<td>".$row['date_from']."</td>";
		echo "<td>".$row['date_to']."</td>";
		echo "<td>".$row['venue']."</td>";
		echo "<td>".$row['time']."</td>";
		echo "<td>".$row['price']."</td>";
		echo "<td>".$row['event_type']."</td>";
		echo "<td><a href='up.php?us=$row[username]&di=$row[id]&en=$row[event_name]&df=$row[date_from]&dt=$row[date_to]&ven=$row[venue]&tim=$row[time]&p=$row[price]&et=$row[event_type]'>Edit</a></td>";
		echo "<td><a href='del.php?di=$row[id]' onclick='return checkdelete()'>Delete</a></td>";
		echo "</tr>";
}
echo "</table>";
}
$s = "select c.id,c.event_name, c.date_from, c.date_to, c.venue, c.time, c.price from cultural_event c";
$y = mysqli_query($conn, $s);
$u = mysqli_num_rows($y);
if($u != 0 ){
	echo "<h1>Cultural Events In Mysore</h1>";
	echo "<table border='1'>
			<tr>
				<th>Id</th>
				<th>Event Name</th>
				<th>Date_from</th>
				<th>Date_to</th>
				<th>Venue</th>
				<th>Time</th>
				<th>Price</th>
				<th colspan='2'>Operations</th>
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
		echo "<td><a href='update.php?di=$row[id]&en=$row[event_name]&df=$row[date_from]&dt=$row[date_to]&ven=$row[venue]&tim=$row[time]&p=$row[price]'>Edit</a></td>";
		echo "<td><a href='de.php?di=$row[id]' onclick='return checkdelete()'>Delete</a></td>";
		echo "</tr>";
	}
	echo "</table>";
}
$sy = "select s.id,s.event_name, s.date_from, s.date_to, s.venue, s.time, s.price from sports s";
$ys = mysqli_query($conn, $sy);
$v = mysqli_num_rows($ys);
if($v != 0 ){
	echo "<h1>Sports Events In Mysore</h1>";
	echo "<table border='1'>
			<tr>
				<th>Id</th>
				<th>Event Name</th>
				<th>Date_from</th>
				<th>Date_to</th>
				<th>Venue</th>
				<th>Time</th>
				<th>Price</th>
				<th colspan='2'>Operations</th>
			</tr>";
	while($row = mysqli_fetch_assoc($ys)){
		echo "<tr>";
		echo "<td>".$row['id']."</td>";		
		echo "<td>".$row['event_name']."</td>";
		echo "<td>".$row['date_from']."</td>";
		echo "<td>".$row['date_to']."</td>";
		echo "<td>".$row['venue']."</td>";
		echo "<td>".$row['time']."</td>";
		echo "<td>".$row['price']."</td>";
		echo "<td><a href='upd.php?di=$row[id]&en=$row[event_name]&df=$row[date_from]&dt=$row[date_to]&ven=$row[venue]&tim=$row[time]&p=$row[price]'>Edit</a></td>";
		echo "<td><a href='dele.php?di=$row[id]' onclick='return checkdelete()'>Delete</a></td>";
		echo "</tr>";
	}
	echo "</table>";
}
$pp = "select * from movies";
$f = mysqli_query($conn, $pp);
$d = mysqli_num_rows($f);
if($d > 0){
	echo "<h1>Movies In Mysuru</h1>";
	echo "<table border='1'>
			<tr>
				<th>Id</id>
				<th>Image</th>
				<th>Movie Name</th>
				<th>Language</th>
				<th>Theatres</th>
				<th colspan='2'>Operations</th>
			</tr>";
	while($row = mysqli_fetch_assoc($f)){
		echo "<tr>";
		echo "<td>".$row['id']."</td>";
		echo "<td>";?><img src="<?php echo $row['image']; ?>" height="250" width="250"> <?php echo "</td>";
		echo "<td>".$row['movie_name']."</td>";
		echo "<td>".$row['lang']."</td>";
		echo "<td>".$row['Theatres']."</td>";
		echo "<td><a href='updt.php?di=$row[id]&im=$row[image]&mn=$row[movie_name]&l=$row[lang]&th=$row[Theatres]'>Edit</a></td>";
		echo "<td><a href='de.php?di=$row[id]' onclick='return checkdelete()'>Delete</a></td>";
		echo "</tr>";
	}
	echo "</table>";
}
   ?>
   <script>
   	function checkdelete(){
   		return confirm('Are you sure you want to delete this data???');
   	}
   </script>
 </body>
 </html>