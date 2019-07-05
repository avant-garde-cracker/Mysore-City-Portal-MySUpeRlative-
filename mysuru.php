<!DOCTYPE html>
<html>
<head>
	<title>MYSUpeRlative</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Charmonman:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="hello.css">
  <style type="text/css">
    body{
      background-color: black;
    }
  </style>
</head>
<body>
       <nav class="navbar navbar-expand-lg navbar-light container navbar fixed-top" style="background-color: #051733">
  <a class="navbar-brand" href="#">MYSUpeRlative</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse inverse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">About<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="l.php">Login</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" class="btn btn-secondary dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Events
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="event.php">Cultural Events</a>
          <a class="dropdown-item" href="mov.php">Movies</a>
          <a class="dropdown-item" href="sp.php">Sports</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Others</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div class="jumbotron container">
	<h1>MYSUpeRlative</h1>
	<p><h3>The road of excess leads to the place of wisdom</h3></p>
  <p class="hi">Want to join us??</p>
  <a href="log.php"><button type="button" class="btn btn-warning">Login</button></a>
</div>
<p><h2>Hey people !!!</h2></p>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
   <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <a href="event.php"><img class="d-block w-100" src="images/raghu.jpg" width="50" height= "500" alt="Decathlon Sports"></a>
      <div class="carousel-caption d-none d-md-block d-block">
      	<h5>Musical Extravaganza</h5>
      	<p>In aid of Pratham Mysore Children's Education Initiatives
        Saturday, *th december 2018 Q6.00 pm at Mysore socials, Hebbal Industrial Area, Mysore</p>
      </div>
    </div>
    <div class="carousel-item">
      <a href="event.php"><img class="d-block w-100" src="images/larger.jpg" width="50" height="500" alt="Ambaari"></a>
      <div class="carousel-caption d-none d-md-block d-block">
      	<h5>Mysuru Food Festival</h5>
      	<p>Fusion Kookery events present Mysuru Food Festival Season 2.
This year it will be held at VK Function Hall from 30th November to 2nd December 2018.</p>
      </div>
    </div>
    <div class="carousel-item">
      <a href="t.php"><img class="d-block w-100" src="images/gitsw.jpg" width="50" height= "500" alt="Food festival"></a>
      <div class="carousel-caption d-none d-md-block d-block">
      	<h4>The Girl in the Spider's Web</h4>
      	<p>The Girl in the Spider's Web is a 2018 American crime thriller film directed by Fede Álvarez and written by Álvarez, Steven Knight, and Jay Basu, based on the novel of the same name by David Lagercrantz, which in turn is based on characters in the book series by Stieg Larsson.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="row">
	<div class="col-lg-4 col-md-6 col-sm-6">
		<div>
		  <a href="event.php"><input type="image" src="https://s3.india.com/wp-content/uploads/2018/08/Untitled-Mysore.jpg" class="img-thumbnail">
		 </div>
		 <div class="bottom-left">Cultural Events</div></a>
	</div>
	<div class="col-lg-4 col-md-6 col-sm-6">
		<div>
		 <a href="mov.php"><input type="image" src="https://cmkt-image-prd.global.ssl.fastly.net/0.1.0/ps/2957213/2417/1608/m1/fpnw/wm1/%D0%BF%D1%80%D0%B5%D0%B2%D1%8C%D1%8E-2-.jpg?1499759151&s=c6d32a12e1cbdd45d9cf964d8de4d0db" class="img-thumbnail">
		  <div class="bottom-left">Movies In Mysore</div></a>
		 </div>
	</div>
	<div class="col-lg-4 col-md-6 col-sm-6">
		<div>
		  <a href="sp.php"><input type="image" src="https://www.bls.gov/spotlight/2017/sports-and-exercise/images/cover_image.jpg" class="img-thumbnail"> 
		</div>
		<div class="bottom-left">Sports</div></a>
	</div>
</div>
<div class="row">
	<div class="col-lg-4 col-md-6 col-sm-6">
		<div>
		  <input type="image" src="https://www.educationalappstore.com/images/best-apps-for-education.jpg" class="img-thumbnail">
		  <div class="bottom-left">Educational Events</div>
		 </div>
	</div>
</div>
<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>