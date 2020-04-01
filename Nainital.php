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
				<div class="logo"><a href="Nainital.html">ROVER</a></div>
				<a href="#menu"><span>Menu</span></a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="http://localhost/ROVER-HOMEPAGE.html">HOME</a></li>
					<li><a href="http://localhost/Uttarakhand.php">STATE</a></li>
					<li><a href="">CREAM OF INDIA</a></li>
				</ul>
			</nav>

		<!-- Banner -->
		<!--
			Note: To show a background image, set the "data-bg" attribute below
			to the full filename of your image. This is used in each section to set
			the background image.
		-->
			<section id="banner" class="bg-img" data-bg="nainital.jpg">
				<div class="inner">
					<header>
						<h1 style="font-size: 50">NAINITAL</h1>
					</header>
				</div>
				
			</section>

		<!-- One -->
			<section id="one" class="wrapper post bg-img" data-bg="ecocavegarden.jpg">
				<div class="inner">
					<article class="box">
						<header><h2>ECO CAVE GARDEN</h2>
							
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
	$sql4= "select descp from places where places_name='Eco Cave Gardens'" ;
	$result4=($conn->query($sql4));
	while($row4 = mysqli_fetch_array($result4)){
//	echo "<div class='col-md-3'>";
//echo "<div class='well text-center'>";
//echo '<img src="data:image/jpeg;base64,'.base64_encode( $row4['image'] ).'"" height="300px" width="200px""/>';
	//if($row4 = $result4->fetch_assoc())
	//{
		echo "<h6>".$row4['descp']."</h6>";
	//}

}
}
?>
						</div>
						
					</article>
				</div>
				
			</section>

		<!-- Two -->
			<section id="two" class="wrapper post bg-img" data-bg="nainadevitemple.jpg">
				<div class="inner">
					<article class="box">
						<header>
							<h2>NAINA DEVI TEMPLE</h2>
							
						</header>
						<div class="content">
<?php

if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}
else
{
	$sql4= "select descp from places where places_name='Naina Devi Temple'" ;
	$result4=($conn->query($sql4));
	while($row4 = mysqli_fetch_array($result4)){
//	echo "<div class='col-md-3'>";
//echo "<div class='well text-center'>";
//echo '<img src="data:image/jpeg;base64,'.base64_encode( $row4['image'] ).'"" height="300px" width="200px""/>';
	//if($row4 = $result4->fetch_assoc())
	//{
		echo "<h6>".$row4['descp']."</h6>";
	//}

}
}
?>
						</div>
						
					</article>
				</div>
				
			</section>

		<!-- Three -->
			<section id="three" class="wrapper post bg-img" data-bg="nainitallake.jpg">
				<div class="inner">
					<article class="box">
						<header>
							<h2>NAINITAL LAKE</h2>
							
						</header>
						<div class="content">
<?php

if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}
else
{
	$sql4= "select descp from places where places_name='Nainital Lake'" ;
	$result4=($conn->query($sql4));
	while($row4 = mysqli_fetch_array($result4)){
//	echo "<div class='col-md-3'>";
//echo "<div class='well text-center'>";
//echo '<img src="data:image/jpeg;base64,'.base64_encode( $row4['image'] ).'"" height="300px" width="200px""/>';
	//if($row4 = $result4->fetch_assoc())
	//{
		echo "<h6>".$row4['descp']."</h6>";
	//}

}
}
?>
						</div>
						
					</article>
				</div>
				
			</section>

		<!-- Four -->
			<section id="four" class="wrapper post bg-img" data-bg="chinapeak.jpg">
				<div class="inner">
					<article class="box">
						<header>
							<h2>CHINA PEAK</h2>
							
						</header>
						<div class="content">
							<?php

if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}
else
{
	$sql4= "select descp from places where places_name='China Peak'" ;
	$result4=($conn->query($sql4));
	while($row4 = mysqli_fetch_array($result4)){
//	echo "<div class='col-md-3'>";
//echo "<div class='well text-center'>";
//echo '<img src="data:image/jpeg;base64,'.base64_encode( $row4['image'] ).'"" height="300px" width="200px""/>';
	//if($row4 = $result4->fetch_assoc())
	//{
		echo "<h6>".$row4['descp']."</h6>";
	//}

}
}
?>
						</div>
						
					</article>
				</div>
			</section>
        		<!-- Five -->
			<section id="four" class="wrapper post bg-img" data-bg="nainitalropeway.jpg">
				<div class="inner">
					<article class="box">
						<header>
							<h2>NAINITAL ROPEWAY</h2>
							
						</header>
						<div class="content">
							<?php

if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}
else
{
	$sql4= "select descp from places where places_name='Nainital Ropeway'" ;
	$result4=($conn->query($sql4));
	while($row4 = mysqli_fetch_array($result4)){
//	echo "<div class='col-md-3'>";
//echo "<div class='well text-center'>";
//echo '<img src="data:image/jpeg;base64,'.base64_encode( $row4['image'] ).'"" height="300px" width="200px""/>';
	//if($row4 = $result4->fetch_assoc())
	//{
		echo "<h6>".$row4['descp']."</h6>";
	//}

}
}
?>						</div>
						
					</article>
				</div>
			</section>
        		<!-- Six -->
			<section id="four" class="wrapper post bg-img" data-bg="PeoraNainitalOverview.jpg">
				<div class="inner">
					<article class="box">
						<header>
							<h2>PEORA</h2>
							
						</header>
						<div class="content">
							<?php

if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}
else
{
	$sql4= "select descp from places where places_name='Peora'" ;
	$result4=($conn->query($sql4));
	while($row4 = mysqli_fetch_array($result4)){
//	echo "<div class='col-md-3'>";
//echo "<div class='well text-center'>";
//echo '<img src="data:image/jpeg;base64,'.base64_encode( $row4['image'] ).'"" height="300px" width="200px""/>';
	//if($row4 = $result4->fetch_assoc())
	//{
		echo "<h6>".$row4['descp']."</h6>";
	//}

}
}
?>
						</div>
						
					</article>
				</div>
			</section>
                		<!-- Seven -->
			<section id="four" class="wrapper post bg-img" data-bg="mallroadnainital.jpg">
				<div class="inner">
					<article class="box">
						<header>
							<h2>THE MALL ROAD</h2>
							
						</header>
						<div class="content">
							<?php

if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}
else
{
	$sql4= "select descp from places where places_name='The Mall Road' AND c_code=5003" ;
	
	$result4=($conn->query($sql4));
	while($row4 = mysqli_fetch_array($result4)){
//	echo "<div class='col-md-3'>";
//echo "<div class='well text-center'>";
//echo '<img src="data:image/jpeg;base64,'.base64_encode( $row4['image'] ).'"" height="300px" width="200px""/>';
	//if($row4 = $result4->fetch_assoc())
	//{
		echo "<h6>".$row4['descp']."</h6>";
	//}

}
}
?>
						</div>
						
					</article>
				</div>
			</section>				
					
        
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>