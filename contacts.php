<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Santoskumar Bhagavathi</title>
	<meta name="keywords" content="HTML5,CSS3,HTML,Template,VCard,Resume,CV" >
	<meta name="description" content="santoskumar Bhagavathi- Resume HTML Template">
	<meta name="author" content="Santoskumar Bhagavathi">
	
	<!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,400italic,700italic|Oswald:400,300,700' rel='stylesheet' type='text/css'>

	<!-- Include jQuery -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	
	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="vendors/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="vendors/bootstrap/css/bootstrap-theme.min.css">

	<!-- Fontawesome -->
	<link rel="stylesheet" type="text/css" href="vendors/font-awesome/css/font-awesome.min.css">

	<!-- Animsition -->
	<link rel="stylesheet" type="text/css" href="vendors/animsition/css/animsition.min.css">
	<script type="text/javascript" src="vendors/animsition/js/jquery.animsition.min.js"></script>

	<!-- PieProgress -->
	<link rel="stylesheet" type="text/css" href="vendors/asPieProgress/progress.css">
	<script type="text/javascript" src="vendors/asPieProgress/jquery-asPieProgress.min.js"></script>

	<!-- Stylesheet -->
	<link rel="stylesheet" type="text/css" href="style.css">

	<!-- Google Map -->
	<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;language=en"></script>

</head>
<body class="animsition">

<!-- Burger menu 
================================================== -->
<a href="javascript:;" id="burger-menu" class="burger-menu">
	<span></span>
	<span></span>
	<span></span>
</a>

<!-- Main navigation section
================================================== -->
<nav id="navigation">
	<div class="inner-table">
		<div class="inner-cell">
			<div class="nav-wrapper">
				
				<a href="javascript:;" id="close-menu">
					<span></span>
					<span></span>
				</a>

				<div class="row">
					<div class="col-md-4 col-md-offset-4">
						
						<ul>
							<li>
								<a href="index-2.html" class="active at-link">
									<i class="fa fa-home"></i>
									<span>About</span>
								</a>
							</li>
							<li>
								<a href="profile.html" class="at-link">
									<i class="fa fa-user"></i>
									<span>Profile</span>
								</a>
							</li>
							<li>
								<a href="resume.html" class="at-link">
									<i class="fa fa-file-text-o"></i>
									<span>Resume</span>
								</a>
							</li>

							<li>
								<a href="portfolio.html" class="at-link">
									<i class="fa fa-briefcase"></i>
									<span>Portfolio</span>
								</a>
							</li>

							
							<li>
								<a href="contacts.php" class="at-link">
									<i class="fa fa-phone"></i>
									<span>Contact us</span>
								</a>
							</li>
						</ul>

						<h4>Home</h4>

					</div>
				</div>

			</div>
		</div>
	</div>
</nav>



<!-- Header -->
<header id="header">
	<div class="container">
		<div class="row">
			<div class="col-xs-10">
				
				<a href="index.html" id="logo" class="at-link">Santoskumar Bhagavathi</a>

				<div class="page-title">
					<div class="title-wrap">
						<h1>Contact Us</h1>
						<p class="lead">Get in touch with me</p>
					</div>
				</div>

			</div>
			<div class="col-xs-2 text-right">
				<div class="burger-menu-wrapper">
					<a href="javascript:;" class="burger-menu">
						<span></span>
						<span></span>
						<span></span>
					</a>
				</div>
			</div>
		</div>
	</div>
</header>
<!--End of Header -->
<?php
if(isset($_POST['name']) && $_POST['name']!=''){
	// the message
	$msg = $_POST['comment'] ? $_POST['comment'] : '';

	// use wordwrap() if lines are longer than 70 characters
	//$msg = wordwrap($msg,70);
	$email = $_POST['email'] ? $_POST['email'] : '';
	$msg.=" From : ".$email;
	// send email
	mail("santoskumarbhagavathi@gmail.com",$_POST['name']." - From Your site - ",$msg);
	echo "<div class='alert alert-info'>Thanks for contacting me..</div>";
}
?>



<!-- Content section
================================================== -->
<section class="content">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<div id="map_canvas" class="tt-google-map" data-lat="-33.7032706" data-lng="150.9524145" data-color="" data-zoom="16" data-marker="images/pages/marker-small.png" style="width:100%; height: 420px;"></div>

				<br><br>
			</div>
		</div>

		<div class="row">
			<div class="col-md-4">
				<h3 class="title-md">CONTACT ADDRESS</h3>
				<address>
					<table>
						<tr>
							<td><img src="images/svg/map-marker.svg" class="address-icon"></td>
							<td>#39-16-8,Madhavadhara,Visakahapatnam-530 007</td>
						</tr>
						<tr>
							<td><img src="images/svg/mobile-phone.svg" class="address-icon"></td>
							<td>Phone : +91-9010888807</td>
						</tr>
						<tr>
							<td><img src="images/svg/envelope.svg" class="address-icon"></td>
							<td>Email: santoskumarbhagavathi@gmail.com </td>
						</tr>
						<tr>
							<td><img src="images/svg/home.svg" class="address-icon"></td>
							<td>Website : santoskumarbhagavathi.com</td>
						</tr>
					</table>
				</address>

				<ul class="socials">
					<li><a href="javascript:;"><i class="fa fa-facebook"></i></a></li>
					<li><a href="javascript:;"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="javascript:;"><i class="fa fa-google-plus"></i></a></li>
					
				</ul>
			</div>
			<div class="col-md-1"></div>
			<div class="col-md-7">
				<h3 class="title-md">LET’S HAVE A FUN</h3>

				<form method="post" id="contactform">
					<p><input type="text" placeholder="Your name *" name="name" required></p>
					<p><input type="email" placeholder="Your email *" name="email" required></p>
					<p><textarea placeholder="Your message" name="comment" required></textarea></p>
					<p><input type="submit" value="Send message"></p>
				</form>
			</div>
		</div>
	</div>
</section>



<!-- Footer section
================================================== -->
<footer id="footer" class="text-center">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<p>Copyright © <a href="frensol.com">FRENSOL SOLUTIONS</a>. All rights reserved.</p>
				<p>Made with love by <a href="santoskumarbhagavathi.com"> Santoskumar Bhagavathi</a></p>

				<ul class="social">
					<li><a href="www.facebook.com/santoskumarbhagavathi1" target="_blank"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					
				</ul>
			</div>
		</div>
	</div>
</footer>
<!-- End of Footer -->


<!-- Scripts
================================================== -->
<script type="text/javascript" src="vendors/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="vendors/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
<script type="text/javascript" src="js/google-maps.js"></script>


</body>
</html>