<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
} 
if (isset($_SESSION['username'])) {
	$_SESSION['msg'] = "You are already logged in!";
	header('location: index.php');
}
?>

<?php include('server.php') ?>



















<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login | Sea Side South Park</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

	<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">

	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/aos.css">

	<link rel="stylesheet" href="css/ionicons.min.css">

	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/jquery.timepicker.css">


	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/style.css">

	<link rel="stylesheet" type="text/css" href="css/login-style.css">
	<link rel="stylesheet" href="css/custom.css">
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="index.php">Sea Side South Park<span>Your best choice!</span></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
				aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="index.php" class="nav-link">HOME</a></li>
					<li class="nav-item"><a href="about.php" class="nav-link">ABOUT</a></li>
					<li class="nav-item"><a href="contact.php" class="nav-link">CONTACT US</a></li>
					<li class="nav-item"><a href="reserve.php" class="nav-link">RESERVE</a></li>
					<li class="nav-item active"><a href="login.php" class="nav-link">LOGIN</a></li>

				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->

	<div class="hero-wrap js-fullheight" style="background-image: url('images/w-south-beach.jpg');"
		data-stellar-background-ratio="0.5">
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
			<div class="container">

			<div class="row justify-content-md-center">
				<div class="col-lg-6">
			<form method="post" action="login.php">

			<H5>ACCOUNT SIGN IN</H5>
			<P>Sign in with your username and password!</P>

<?php include('errors.php'); ?>
<?php if (isset($_GET['booking'])) {  echo '<div class="success">Login / sign up to reserve rooms.</div>'; } ?>

<div class="input-group">
	<label>Username</label>
	<input type="text" name="username" >
</div>
<div class="input-group">
	<label>Password</label>
	<input type="password" name="password">
</div>
<div class="input-group">
	<button type="submit" class="btn" name="login_user">Login</button>
</div>
<p>
	Not yet a member? <a href="register.php">Sign up</a> for faster booking.
</p>
</form>

</div>
</div></div>
			</div>
		</div>
	</div>
	

	<footer class="ftco-footer bg-bottom" style="background-image: url(images/footer-bg.jpg);">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Sea Side South Park</h2>
                        <p style="color: #a2a2a2 !important; text-align: left;">The benchmark for supreme, seafront
                            experience in Sri Lanka.</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <li class="ftco-animate"><a target="_blank"
                                    href="https://twitter.com/seasidesouthparknsbm"><span
                                        class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a target="_blank"
                                    href="https://facebook.com/seasidesouthparknsbm"><span
                                        class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a target="_blank"
                                    href="https://instagram.com/seasidesouthparknsbm"><span
                                        class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-5">
                        <h2 class="ftco-heading-2">Links</h2>
                        <ul class="list-unstyled">
                            <li><a href="index.php" class="py-2 d-block">Homepage</a></li>
                            <li><a href="about.php" class="py-2 d-block">About</a></li>
                            <li><a href="contact.php" class="py-2 d-block">Contact</a></li>
                            <li><a href="network.php" class="py-2 d-block">Our network</a></li>
                            <li><a href="reserve.php" class="py-2 d-block">Reserve</a></li>
                            <li><a href="login.php" class="py-2 d-block">Account</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">38/02, Temple Road,
                                        Weligama, Sri Lanka.</span></li>
                                <li><a><span class="icon icon-phone"></span><span class="text">+94 11
                                            7745730</span></a></li>
                                <li><a><span class="icon icon-envelope"></span><span
                                            class="text">reservations@nsbm.cloud</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p style="color: #a2a2a2 !important; text-align: center;">
                        Copyright 2020 - Sea Side South Park
                    </p>
                </div>
            </div>
        </div>
    </footer>



	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
				stroke="#F96D00" /></svg></div>


	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-migrate-3.0.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/aos.js"></script>
	<script src="js/jquery.animateNumber.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/scrollax.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
	</script>
	<script src="js/google-map.js"></script>
	<script src="js/main.js"></script>

</body>

</html>