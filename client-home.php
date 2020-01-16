<!DOCTYPE html>


<?php
   include('session.php');
?>

<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/navbar.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
	ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: RGB(25, 25, 111);
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
  </style>
</head>
<body>

<!--navbar-->
<div class="container-fluid c1">
	<div class="header">
		<center>
			<h2 class="header-font">Court Management Sytsem</h2>
			<h3 class="header-font2">|| यतो धर्मस्ततो जयः ||</h3>
		</center>
	</div>
</div>

<!--carousel-->

<div id="myCarousel" class="carousel slide myslide" data-ride="carousel">

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="img/slide1.jpg" style="width:100%">
    </div>

    <div class="item">
      <img src="img/slide2.jpg" style="width:100%">
    </div>

    <div class="item">
      <img src="img/slide3.jpg" style="width:100%">
    </div>
	<div class="item">
      <img src="img/slide4.jpg" style	="width:100%">
    </div>
  </div>

</div>

		<ul>
			<li><a class="active" href="#home">Home</a></li>
			<li><a href="#news">News</a></li>
			<li><a href="#contact">Contact</a></li>
			<li><a href="#about">About</a></li>
			<li style="float:right;"><a href="logout.php">
  <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp Logout</a></li>
		</ul>

 


 
</body>
</html>