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
				<div class="logo"><a href="Varanasi.html">ROVER</a></div>
				<a href="#menu"><span>Menu</span></a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="http://localhost/ROVER-HOMEPAGE.html">HOME</a></li>
					<li><a href="http://localhost/Uttarpradesh.php">STATE</a></li>
					<li><a href="">CREAM OF INDIA</a></li>
				</ul>
			</nav>

		<!-- Banner -->
		<!--
			Note: To show a background image, set the "data-bg" attribute below
			to the full filename of your image. This is used in each section to set
			the background image.
		-->
			<section id="banner" class="bg-img" data-bg="varanasi.jpg">
				<div class="inner">
					<header>
						<h1 style="font-size: 50">VARANASI</h1>
					</header>
				</div>
				
			</section>

		<!-- One -->
			<section id="one" class="wrapper post bg-img" data-bg="kashi.jpg">
				<div class="inner">
					<article class="box">
						<header><h2>KASHI VISHWANATH TEMPLE</h2>
							
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
	$sql4= "select descp from places where places_name='Kashi Vishwanath Temple'" ;
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
			<section id="two" class="wrapper post bg-img" data-bg="DashashwamedhGhat.jpg">
				<div class="inner">
					<article class="box">
						<header>
							<h2>DASHASHWAMEDH GHAT</h2>
							
						</header>
						<div class="content">
<?php


if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}
else
{
	$sql4= "select descp from places where places_name='Dashashwamedh Ghat'" ;
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
			<section id="three" class="wrapper post bg-img" data-bg="assighat.jpg">
				<div class="inner">
					<article class="box">
						<header>
							<h2>ASSI GHAT</h2>
							
						</header>
						<div class="content">
<?php


if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}
else
{
	$sql4= "select descp from places where places_name='Assi Ghat'" ;
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
			<section id="four" class="wrapper post bg-img" data-bg="newtemple.jpg">
				<div class="inner">
					<article class="box">
						<header>
							<h2>NEW VISHWANATH TEMPLE</h2>
							
						</header>
						<div class="content">
<?php


if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}
else
{
	$sql4= "select descp from places where places_name='New Vishwanath Temple'" ;
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
			<section id="four" class="wrapper post bg-img" data-bg="TulsiManasaTemple.jpg">
				<div class="inner">
					<article class="box">
						<header>
							<h2>TULSI MANASA TEMPLE</h2>
							
						</header>
						<div class="content">
<?php


if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}
else
{
	$sql4= "select descp from places where places_name='Tulsi Manasa Temple'" ;
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
        		<!-- Six -->
			<section id="four" class="wrapper post bg-img" data-bg="ManikarnikaGhat.jpg">
				<div class="inner">
					<article class="box">
						<header>
							<h2>MANIKARNIKA GHAT</h2>
							
						</header>
						<div class="content">
<?php


if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}
else
{
	$sql4= "select descp from places where places_name='Manikarnika Ghat'" ;
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
			<section id="four" class="wrapper post bg-img" data-bg="BanarasHinduUniversity.jpg">
				<div class="inner">
					<article class="box">
						<header>
							<h2>BANARAS HINDU UNIVERSITY</h2>
							
						</header>
						<div class="content">
<?php


if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}
else
{
	$sql4= "select descp from places where places_name='Banaras Hindu University'" ;
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
					
        
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>