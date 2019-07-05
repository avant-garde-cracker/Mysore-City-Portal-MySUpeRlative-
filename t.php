<!DOCTYPE html>
<html>
<head>
	<title>Movies</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="movie.css">
	<style type="text/css">
		table{
			border-collapse: collapse;
			width: 100%;
			color: #3399ff;
			font-family: monospace;
			font-size: 25px;
			text-align: left;
			/*background: #ffcc66;*/
			padding-top: 40%;
		}
		th{
			background: #d96459;
			color: white;
		}

	</style>
</head>
<body>
<h1>  </h1>
	<div class="menu">
		<a href="mysuru.php"><div class="btn"><i class="fa fa-home" aria-hidden="true"></i>Home</div></a>
		<a href="mov.php"><div class="btn"><i class="fa fa-film" aria-hidden="true"></i>Movies</div></a>
	</div>
		<table>
		<!-- <tr><th colspan="2"><h1>MOVIES</h1></th></tr> -->
		<tr>
			<th>Movie Image</th>
			<th>Language</th>
			<th>Movie name</th>
			<th>Theatres</th>
		</tr>
		<?php 
include 'connection.php';
error_reporting(0);
$sql = "select * from movies";
$res = mysqli_query($conn,$sql);
if(mysqli_num_rows($res) > 0){
	while($row = mysqli_fetch_assoc($res)){
		// echo "<tr><td>". $row['lang'] . "</td><td>" . $row['movie_name'] . "</td><td>" . $row['Theatres'] . "</td></tr>";
		echo "<tr>";
		echo "<td>";?><img src="<?php echo $row['image']; ?>" height="250" width="250"> <?php echo "</td>";
		echo "<td>".$row['lang']."</td>";
		echo "<td>".$row['movie_name']."</td>";
		echo "<td>".$row['Theatres']."</td>";
		echo "</tr>";
	}
	}


 ?>

		</table>
</body>
</html>
