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
</head>
<body>

<!--navbar-->
<div class="container-fluid c1">
	<div class="header">
		<center>
			<h2 class="header-font">Court Management Sytsem</h2>
			<h3 class="header-font2">|| यतो धर्मस्ततो जयः ||</h3>
			<a href="Logout.php">
click here to log out</a>
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
      <img src="img/slide4.jpg" style="width:100%">
    </div>
  </div>

</div>

 
</body>
</html>