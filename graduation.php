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
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</div>
		</div>
	</nav>
	
	<div id="fh5co-page">
		<header>
			<div class="container">
				<div class="fh5co-navbar-brand">
					<center>
					<a href="wandys2.html"><img src="images/logo4.png"/></a>
					</center>
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
				</div>
			</div>
		</header>

		<div id="fh5co-intro-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center animate-box">
						<h2 class="intro-heading">Baby Shower Cakes</h2>
						<p><span>A quick peek of our various cake designs.</span></p>
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-photos-section">
			<div class="container">
				<div class="row text-center">
					<?php

				
$sql=mysqli_connect('localhost','root','','wandy_bakery');

					$stat = "SELECT * FROM cakes WHERE cake_type= 'graduation' ORDER BY id DESC";

					$result = mysqli_query($sql, $stat);

					$num = mysqli_num_rows($result);

					if ($num > 0) {
						while ($rows = mysqli_fetch_assoc($result)) {?>
<div class="col-md-4 animate-box">
						<a href="<?php echo $rows['cake_picture'];?>" class="grid-photo img-popup" style="background-image: url(<?php echo $rows['cake_picture'];?>);">
							<div class="desc">
								<span><?php echo $rows['cake_description'];?></span>
							</div>
						</a>
					</div>
						<?php } ?>
						<?php
					}
					else{
					echo "THERE ARE NO GRADUATION CAKES AVAILABLE.";
				}
					?>
				</div>
			</div>
		</div>
		<footer>
			<div id="footer">
				<div class="container">
						<center>
							<div class="col-md-12">
							<ul>
								<li><a href="#">Terms &amp; Condition</a></li>
								<li><a href="#">License</a></li>
								<li><a href="#">Privacy &amp; Policy</a></li>
								<li><a href="#">Contact Us</a></li>
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
	<!-- Magnific Popup -->
	<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>

	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>

	</body>
</html>