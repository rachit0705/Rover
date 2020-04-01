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
				<div class="logo"><a href="Rishikesh.html">ROVER</a></div>
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
			<section id="banner" class="bg-img" data-bg="rishikeshrafting.jpg">
				<div class="inner">
					<header>
						<h1 style="font-size: 50">RISHIKESH</h1>
					</header>
				</div>
				
			</section>

		<!-- One -->
			<section id="one" class="wrapper post bg-img" data-bg="lakshmanjhula.jpg">
				<div class="inner">
					<article class="box">
						<header><h2>LAKSHMAN JHULA</h2>
							
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
	$sql4= "select descp from places where places_name='Lakshman Jhula'" ;
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
			<section id="two" class="wrapper post bg-img" data-bg="ramjhula.jpg">
				<div class="inner">
					<article class="box">
						<header>
							<h2>RAM JHULA</h2>
							
						</header>
						<div class="content">
<?php



if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}
else
{
	$sql4= "select descp from places where places_name='Ram Jhula'" ;
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
			<section id="three" class="wrapper post bg-img" data-bg="trivenighat.jpg">
				<div class="inner">
					<article class="box">
						<header>
							<h2>TRIVENI GHAT</h2>
							
						</header>
						<div class="content">
<?php



if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}
else
{
	$sql4= "select descp from places where places_name='Triveni Ghat'" ;
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
			<section id="four" class="wrapper post bg-img" data-bg="NeelkanthaMahadevaTemple.jpg">
				<div class="inner">
					<article class="box">
						<header>
							<h2>NEELKANTHA MAHADEVA TEMPLE</h2>
							
						</header>
						<div class="content">
<?php



if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}
else
{
	$sql4= "select descp from places where places_name='Neelkantha Mahadeva Temple'" ;
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
			<section id="four" class="wrapper post bg-img" data-bg="parmarthniketan.jpg">
				<div class="inner">
					<article class="box">
						<header>
							<h2>PARMARTH NIKETAN</h2>
							
						</header>
						<div class="content">
<?php



if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}
else
{
	$sql4= "select descp from places where places_name='Parmarth Niketan Ashram'" ;
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
			<section id="four" class="wrapper post bg-img" data-bg="geetabhawan.jpg">
				<div class="inner">
					<article class="box">
						<header>
							<h2>GEETA BHAWAN</h2>
							
						</header>
						<div class="content">
<?php



if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}
else
{
	$sql4= "select descp from places where places_name='Geeta Bhawan'" ;
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
			<section id="four" class="wrapper post bg-img" data-bg="kaudiyala.jpg">
				<div class="inner">
					<article class="box">
						<header>
							<h2>KAUDIYALA</h2>
							
						</header>
						<div class="content">
							<?php



if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}
else
{
	$sql4= "select descp from places where places_name='Kaudiyala'" ;
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
			<section id="four" class="wrapper post bg-img" data-bg="kuaripass.jpg">
				<div class="inner">
					<article class="box">
						<header>
							<h2>KUARI PASS</h2>
							
						</header>
						<div class="content">
							<?php



if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}
else
{
	$sql4= "select descp from places where places_name='Kuari Pass'" ;
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
			<section id="four" class="wrapper post bg-img" data-bg="gangaaarti.jpeg">
				<div class="inner">
					<article class="box">
						<header>
							<h2>GANGA AARTI</h2>
							
						</header>
						<div class="content">
							<?php



if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}
else
{
	$sql4= "select descp from places where places_name='Ganga Aarti'" ;
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
			<section id="four" class="wrapper post bg-img" data-bg="rishikund.jpg">
				<div class="inner">
					<article class="box">
						<header>
							<h2>RISHI KUND</h2>
							
						</header>
						<div class="content">
							<?php



if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}
else
{
	$sql4= "select descp from places where places_name='Rishi Kund'" ;
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
			<section id="four" class="wrapper post bg-img" data-bg="phoolchatti.jpg">
				<div class="inner">
					<article class="box">
						<header>
							<h2>PHOOL CHATTI WATERFALL</h2>
							
						</header>
						<div class="content">
							<?php



if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}
else
{
	$sql4= "select descp from places where places_name='Phool Chatti Waterfalls'" ;
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