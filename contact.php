<!DOCTYPE html>
<html>
<head>
	<title>WANDY'S BAKERS</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory-->
	<link rel="shortcut icon" href="favicon.ico">
	<!-- Animate.css-->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- animatedresponsiveImagegrid  -->
	<link rel="stylesheet" href="css/animatedresponsiveImagegrid.css">
	<!-- Magnific Popup  -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

	<nav id="fh5co-main-nav" role="navigation">
		<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle active"><i></i></a>
		<div class="js-fullheight fh5co-table">
			<div class="fh5co-table-cell js-fullheight">
				<ul>
					<li><a href="wandys2.html">Home</a></li>
					<li><a href="gallery.html">Gallery</a></li>
					<li><a href="purchase.html">Order</a></li>
					<li class="active"><a href="contact.html">Contact</a></li>
				</ul>
			</div>
		</div>
	</nav>
	
	<div id="fh5co-page">
		<header>
			<div class="container">
				<div class="fh5co-navbar-brand">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
				</div>
				<a href="wandys2.html"><img src="images/logo4.png"/></a>
				<h1>Wandy's Bakers</h1>
				<h4>...for wonderful cakes.</h4>
			</div>
		</header>
		<div id="fh5co-intro-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center animate-box">
						<h2 class="intro-heading">Contact Us</h2>
						<p><span>Hey there! You can reach us on the following hotlines for any comments and feedback.</span></p>
					</div>
				</div>
			</div>
		</div>
		<div id="fh5co-contact-section">
			<div class="container">
				<div class="row">
					<div class="col-md-4 animate-box">
						<h3>Our Address</h3>
						<ul class="contact-info">
							<li><i class="icon-location-pin"></i>Nairobi,Kenya</li>
							<li><i class="icon-phone2"></i>+254-721535400</li>
							<li><i class="icon-phone2"></i>+254-727825738</li>
							<li><i class="icon-mail"></i><a href="#">ww.essie@gmail.com</a></li>
							<li><i class="icon-globe2"></i><a href="#">www.wandys.co.ke</a></li>
						</ul>
					</div>
					<form action="contact.php" method="POST">
						<div class="col-md-8 animate-box">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" name="var2" class="form-control" placeholder="Name">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" name="var3" class="form-control" placeholder="Email">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<textarea name="var4" class="form-control" id="" cols="30" rows="7" placeholder="Message"></textarea>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<input type="submit" name="submit" value="Send Message" class="btn btn-primary">
								</div>
							</div>
						</div>
					</div>

					</form>
					
				</div>
			</div>
		</div>
		<!-- End: fh5co-contact-section -->
		<footer>
			<div id="footer">
				<div class="container">
						<center>
							<div class="col-md-12">
							<ul>
								<li><a href="purchase.html">Order Now</a></li>
								<li><a href="wandys2.html">Home</a></li>
							</ul>
						</div>
						</center>
					</div>
					<div class="row copy-right">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p class="fh5co-social-icon">
								<a href="www.twitte.comr/wandy's bakers"><i class="icon-twitter2"></i></a>
								<a href="www.facebook.com/wandy's bakers"><i class="icon-facebook2"></i></a>
								<a href="www.instagram.com/wandy's bakers"><i class="icon-instagram"></i></a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>

	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>

	</body>
</html>

<?php
if(isset($_POST['submit'])){
$var2=$_POST['var2'];
$var3=$_POST['var3'];
$var4=$_POST['var4'];
$var5=date("d");
$var6=date("m");
$var7=date("Y");


$con=mysqli_connect('localhost','root','','wandy_bakery');
if(!$con){
	echo "Not connected to the database";
}
$sql="INSERT INTO `feedback`(`name`, `email`, `message`, `day`, `month`, `year`) VALUES ('$var2','$var3','$var4','$var5','$var6','$var7')";
$result=mysqli_query($con,$sql);
if($result){
	echo "Hurray!!!!";
}
	else{
		echo "nooo!!!";
	}


}




?>