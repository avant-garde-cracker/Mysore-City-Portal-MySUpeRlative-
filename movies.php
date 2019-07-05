<!DOCTYPE html>
<html>
<head>
	<title>Movies In Mysuru</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="sty.css">
</head>
<body>
	<h1>Movies In Mysuru</h1>
<div class="container">
    <div class="row">
	    <div class="col-lg-4 col-md-4 col-sm-12">
    	  <p class="hii">
			<h2>Theatres in Mysuru</h2>
			
			<?php $link_name="DRC: Habitat mall"; ?>
			<a href="movies.php"> <?php echo "$link_name"; ?></a><br>
	<?php 
include 'connection.php';
error_reporting(0);
	$link_name = "select * from movies;";
	$result = mysqli_query($conn,$link_name);
	$resultcheck = mysqli_num_rows($result);
	if($resultcheck > 0){
		while ($row = mysqli_fetch_assoc($result)) {
			echo 'Image: ' . $row['$image'] . '<br>' . 'Movie Name: ' . $row['movie_name'] . '<br>' . 'Theatres: ' . $row['THeatres'];
		}
	}
 ?> 
			
			<br><a href="#">INOX: Mall of Mysore</a><br>
			<a href="#">PVR: Garuda Mall</a><br>
			<a href="#">Sterling Theatre</a>
	 	 </p>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12">
   		   <img src="https://www.slashfilm.com/wp/wp-content/images/movietheater-screen-seats.jpg" style="width:700px;height:400px" class="center"><br>
   		    <p class="jumbotron container">
    	Movies, also known as films, are a type of visual communication which uses moving pictures and sound to tell stories or inform (help people to learn). People in every part of the world watch movies as a type of entertainment, a way to have fun. For some people, fun movies can mean movies that make them laugh, while for others it can mean movies that make them cry, or feel afraid.<br>

		Most movies are made so that they can be shown on big screens at movie theatres and at home. After movies are shown on movie screens for a 	period of weeks or months, they may be marketed through several other media. They are shown on pay television or cable television, and sold or rented on DVD disks or video cassette tapes, so that people can watch the movies at home. You can also download or stream movies. Older movies are shown on television broadcasting stations.
    </p>
   		</div>
   	</div>
</div>
<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<!-- <?php 
include 'connection.php';
error_reporting(0);
	$sql = "select * from drc;";
	$result = mysqli_query($conn,$sql);
	$resultcheck = mysqli_num_rows($result);
	if($resultcheck > 0){
		while ($row = mysqli_fetch_assoc($result)) {
			echo $row['movie_name'] , "<br>";
		}
	}
 ?> -->
</body>
</html> 