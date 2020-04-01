<!DOCTYPE HTML>
<!--
	Road Trip by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>ROVER</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<div class="logo"><a href="Uttarpradesh.html">ROVER</a></div>
				<a href="#menu"><span>Menu</span></a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="http://localhost/ROVER-HOMEPAGE.html">HOME</a></li>
					<li><a href="">CREAM OF INIDA</a></li>
				</ul>
			</nav>

		<!-- Banner -->
		<!--
			Note: To show a background image, set the "data-bg" attribute below
			to the full filename of your image. This is used in each section to set
			the background image.
		-->
			<section id="banner" class="bg-img" data-bg="uttarpradesh.jpg">
				<div class="inner">
					<header>
						<h1 style="font-size: 50">UTTAR PRADESH</h1>
					</header>
				</div>
				<a href="#one" class="more">EXPLORE</a>
			</section>

		<!-- One -->
			<section id="one" class="wrapper post bg-img" data-bg="taj3.jpg">
				<div class="inner">
					<article class="box">
						<header><h2>AGRA</h2>
						</header>
						<div class="content">
							<?php
$servername = "localhost:3306";
$username = "root";
$password="";
$dbname = "rover";


$conn = new mysqli($servername, $username,$password, $dbname);

// Check connection
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}
else
{
	$sql4= "select c_descp from city where c_code=1001" ;
	$result4=($conn->query($sql4));
	while($row4 = mysqli_fetch_array($result4)){
//	echo "<div class='col-md-3'>";
//echo "<div class='well text-center'>";
//echo '<img src="data:image/jpeg;base64,'.base64_encode( $row4['image'] ).'"" height="300px" width="200px""/>';
	//if($row4 = $result4->fetch_assoc())
	//{
		echo "<h6>".$row4['c_descp']."</h6>";
	//}

}
}
?>
						</div>
						<footer>
							<a href="http://localhost/agra.php" class="button alt">EXPLORE</a>
						</footer>
					</article>
				</div>
				<a href="http://localhost/agra.php" class="more">EXPLORE</a>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper post bg-img" data-bg="varanasi1.jpg">
				<div class="inner">
					<article class="box">
						<header>
							<h2>VARANASI</h2>
						</header>
						<div class="content">
							<?php

if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}
else
{
	$sql4= "select c_descp from city where c_code=1002" ;
	$result4=($conn->query($sql4));
	while($row4 = mysqli_fetch_array($result4)){
//	echo "<div class='col-md-3'>";
//echo "<div class='well text-center'>";
//echo '<img src="data:image/jpeg;base64,'.base64_encode( $row4['image'] ).'"" height="300px" width="200px""/>';
	//if($row4 = $result4->fetch_assoc())
	//{
		echo "<h6>".$row4['c_descp']."</h6>";
	//}

}
}
?>
						</div>
						<footer>
							<a href="http://localhost/varanasi.php" class="button alt">EXPLORE</a>
						</footer>
					</article>
				</div>
				<a href="#three" class="more">EXPLORE</a>
			</section>

		
     
		
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>