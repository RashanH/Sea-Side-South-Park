


<!DOCTYPE html>
<html lang="en">

<head>
	<title>Sea Side South Park</title>
	<link rel="icon" href="favicon.png" type="image/png">
	<meta name="description" content="Sea side south part. The best hotel network.">
<meta name="keywords" content="Sea side south park, Sea side hotel, Sea side, best hotels in sri lanka, hotels to stay">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

	<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">

	<link rel="stylesheet" href="css/aos.css">

	<link rel="stylesheet" href="css/ionicons.min.css">

	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/jquery.timepicker.css">


	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/style.css">
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
					<li class="nav-item active"><a href="index.php" class="nav-link">HOME</a></li>
					<li class="nav-item"><a href="about.php" class="nav-link">ABOUT</a></li>
					<li class="nav-item"><a href="contact.php" class="nav-link">CONTACT US</a></li>
					<li class="nav-item"><a href="reserve.php" class="nav-link">RESERVE</a></li>
					<?php  if (isset($_SESSION['username'])) : ?>
					<li class="nav-item"><a href="index.php?logout=1" class="nav-link">LOGOUT (<?php echo $_SESSION['username']; ?>)</a></li>
					<?php endif ?>
					<?php  if (!isset($_SESSION['username'])) : ?>
					<li class="nav-item"><a href="login.php" class="nav-link">LOGIN</a></li>
					<?php endif ?>

				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->




	<div class="hero-wrap js-fullheight" style="background-image: url('images/bg_2.jpg');"
		data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
				data-scrollax-parent="true">
				<div class="col-md-9 text text-center " data-scrollax=" properties: { translateY: '70%' }">
					<a href="https://vimeo.com/116391312"
						class="icon-video popup-vimeo d-flex align-items-center justify-content-center mb-4">
						<span class="ion-ios-play"></span>
					</a>
					<p class="caps" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">WELCOME TO</p>
					<h1 data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">SEA SIDE SOUTH PARK</h1>
				</div>
			</div>
		</div>
	</div>

	<section class="ftco-section ftco-no-pb ftco-no-pt">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="search-wrap-1  p-4">
						<form onsubmit="return validate_dates()" method="post" action="reserve.php" class="search-property-1">
							<div class="row">
								<div class="col-lg align-items-end">
									<div class="form-group">
										<label for="#">Check-in date</label>
										<div class="form-field">
											<div class="icon"><span class="ion-ios-calendar"></span></div>
											<input type="text" name="check_in" class="form-control checkin_date" placeholder="Check In Date">
										</div>
									</div>
								</div>
								<div class="col-lg align-items-end">
									<div class="form-group">
										<label for="#">Check-out date</label>
										<div class="form-field">
											<div class="icon"><span class="ion-ios-calendar"></span></div>
											<input type="text" name="check_out" class="form-control checkout_date" placeholder="Check Out Date">
										</div>
									</div>
								</div>
								<div class="col-lg align-items-end">
									<div class="form-group">
										<label for="#">Number of rooms</label>
										<div class="form-field">
											<div class="select-wrap">
												<div class="icon"><span class="ion-ios-arrow-down"></span></div>
												<select name="" id="" class="form-control">
													<option value="">1</option>
													<option value="">2</option>
													<option value="">4</option>
													<option value="">Other</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg align-self-end">
									<div class="form-group">
										<div class="form-field">
											<input type="submit" name="booking_check" value="Book" class="form-control btn btn-primary">
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>



	<!-- notification message -->
	<?php if (isset($_SESSION['username']) && isset($_SESSION['success'])) {
		echo '<div class="alert alert-success" role="alert">';
		echo $_SESSION['success'];
		unset($_SESSION['success']);
		echo '</div>';
	} ?>
	

	<div class="alert alert-danger" role="alert"><br>
 <center> Book today and save 15% for every pax! Click <a href="/reserve.php">here</a>!</center><br>
</div>


	<section class="ftco-counter img" id="box1">
		<div class="container-fluid">
			<div class="row d-flex">
				<div class="col-md-6 d-flex">
					<div class="img d-flex align-self-stretch" style="background-image:url(images/about.jpg);"></div>
				</div>
				<div class="col-md-6 pl-md-5 py-5">
					<div class="row justify-content-start pb-3">
						<div class="col-md-12 heading-section ">
							<h2 class="mb-4 brand">SEA SIDE SOUTH PARK</h2>
							<h3 class="welcome">WELCOME TO SEA SIDE SOUTH PARK</h3>
							<blockquote>"The benchmark for supreme, seafront experience in Sri Lanka."</blockquote>
							<p>Where trade winds carried legendary explorers like Marco Polo, Ibn Battuta and Fa-Hsien
								past Sri Lanka's soaring southern cliffs on someof history's most celebrated nautical
								journeys, Sea Side South Park has become the most celebrated resort along this fabled
								island's palm-shores.</p>
							<p>Thirty minutes east of Galle, Sea Side South Park inhabits 15 manicured acres atop a
								singular promontory rising 30 meters above the Indian Ocean. Stunning panoramas await
								you, naturally complementing the 20 private retreats designed by one of Asia's most
								celebrated architects, Jefri Bawa.</p>
							<p>The hotel’s dining venues capture Weligama's iconic sunsets, as does the 50-meter
								crescent-shaped infinity pool that appears to flow seamlessly into the shimmering sea,
								while those timeless breezes ensure elegant swells unfurl onto the sun-kissed sand.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-counter img" id="why-us">
		<div class="container-fluid">
			<div class="col-md-12">
				<h1 class="whyheadline">WHY US!</h1>
				<p>20 sumptuous retreats | 15 acres of tropical gardens | 30 mins to world heritage Galle Fort | 270
					Degree ocean views</p>
			</div>
		</div>
	</section>



	<section class="ftco-counter img" id="box2" style="background-image:url(images/galle1.jpg);">
		<div class="container-fluid">
			<div class="row d-flex" style="padding: 85px 0px 85px;">
				<div class="col-lg-4">
					<div class="row justify-content-start pb-3 text-pad">
						<div class="col-md-12 heading-section ">
							<h3 class="welcome">CURATED EXPERIENCES</h3>
							<blockquote>"A wonderful experience and perfect stay"</blockquote>
							<p>From a hosted Galle Fort walk to a private boat whale watch, cinnamon estate tour to our
								adventure Centre, Sea Side South Park will immerse you in our Sri Lanka.</p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<br>
	<section class="ftco-counter img" id="box3" style="background-image:url(images/galle2.jpg);">
		<div class="container-fluid">
			<div class="row d-flex" style="padding: 85px 0px 85px;">
				<div class="col-lg-4 offset-lg-8">
					<div class="row justify-content-start pb-3 text-pad">
						<div class="col-md-12 heading-section ">
							<h3 class="welcome">CLIFF EDGE DINING</h3>
							<blockquote>"The next landmass is Antarctica!"</blockquote>
							<p>Our elevated location with panoramic Indian Ocean views allows for dramatic vistas from which to relish a special meal. Lookout Blue is located near the Surf Bar and enjoys the most amazing ocean views from the very edge of the cliff. </p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<br>
	<section class="ftco-counter img" id="box4" style="background-image:url(images/galle3.jpg);">
		<div class="container-fluid">
			<div class="row d-flex" style="padding: 85px 0px 85px;">
				<div class="col-lg-4">
					<div class="row justify-content-start pb-3 text-pad">
						<div class="col-md-12 heading-section ">
							<h3 class="welcome">RURAL BIKE RIDE</h3>
							<blockquote>"A trail through scenic rice paddies, rubber and cinnamon estates!"</blockquote>
							<p>Take a ride through the leafy, scenic back-roads of a typical southern village that lies inland from Weligama. The trail snakes its way alongside lush rice paddies, rubber and cinnamon estates, small-holder plantations and home gardens, places of worship, rural homes.</p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<br>


	<section class="ftco-section testimony-section bg-bottom">
		<div class="container">
			<div class="row justify-content-center pb-4">
				<div class="col-md-7 text-center heading-section ">
					<h2 class="mb-4">Tourist Feedback</h2>
				</div>
			</div>
			<div class="row ">
				<div class="col-md-12">
					<div class="carousel-testimony owl-carousel ftco-owl">
						<div class="item">
							<div class="testimony-wrap py-4">
								<div class="text">
									<p class="mb-4">"Ultimate location, intelligent design, no expense spared."</p>
									<div class="d-flex align-items-center">
										<div class="user-img" style="background-image: url(images/person_5.jpg)"></div>
										<div class="pl-3">
											<p class="name">Menuka Dilshan</p>
											<span class="position">Paris, France</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap py-4">
								<div class="text">
									<p class="mb-4">"A true sample of excellent hospitality!"</p>
									<div class="d-flex align-items-center">
										<div class="user-img" style="background-image: url(images/person_4.jpg)"></div>
										<div class="pl-3">
											<p class="name">Shashika Menuka</p>
											<span class="position">Dubai, United Arab Emirates</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap py-4">
								<div class="text">
									<p class="mb-4">"A rejuvenating and heartwarming stay""</p>
									<div class="d-flex align-items-center">
										<div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
										<div class="pl-3">
											<p class="name">Shashika Fernando</p>
											<span class="position">Paris, France</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap py-4">
								<div class="text">
									<p class="mb-4">Far far away, behind the word mountains, far from the countries
										Vokalia and Consonantia, there live the blind texts.</p>
									<div class="d-flex align-items-center">
										<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
										<div class="pl-3">
											<p class="name">Rukmal Mihiran</p>
											<span class="position">The Hague, The Netherlands</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap py-4">
								<div class="text">
									<p class="mb-4">Far far away, behind the word mountains, far from the countries
										Vokalia and Consonantia, there live the blind texts.</p>
									<div class="d-flex align-items-center">
										<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
										<div class="pl-3">
											<p class="name">Chamath Hasaranga</p>
											<span class="position">Dubai, United Arab Emirates</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-counter img" id="index-galary">
		<div class="container-fluid">
			<div class="row d-flex" style="padding: 85px 0px 85px;">



			</div>
		</div>
	</section>











	




	<section class="ftco-section">
		<div class="container">
		<div class="row justify-content-center pb-4">
				<div class="col-md-12 heading-section text-center ">
					<h2 class="mb-4">Upcomming festivals!</h2>
				</div>
			</div>
			<div class="row justify-content-center pb-4">
				<div class="col-md-12 heading-section text-center">
					<p>
					With four major religions, diverse culture and no less than
25 public holidays, the teardrop island of Sri Lanka is a land
of vibrant festivals and colourful celebrations.
Sri Lankan festivities don’t only showcase the culture and
religions of the country, but also its intriguing history and
beautiful traditions. Here are one of the most exciting
and intriguing festivals to experience whilst on a
stay with our hotel - Sea Side South Park!

					</p>
				</div>
			</div>
		
				<div class="col-md-4 d-flex ">
					<div class="blog-entry justify-content-end">
						<a class="block-20"
							style="background-image: url('images/image_2.jpg');">
						</a>
						<div class="text mt-3 float-right d-block">
							<div class="d-flex align-items-center mb-4 topp">
								<div class="one">
									<span class="day">29</span>
								</div>
								<div class="two">
									<span class="yr">2020</span>
									<span class="mos">September</span>
								</div>
							</div>
							<h3 class="heading"><a >MIRISSA FOOD FESTIVAL</a></h3>
							<p>Enjoy delicious foods with different varieties.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex ">
					<div class="blog-entry">
						<a class="block-20"
							style="background-image: url('images/image_3.jpg');">
						</a>
						<div class="text mt-3 float-right d-block">
							<div class="d-flex align-items-center mb-4 topp">
								<div class="one">
									<span class="day">05</span>
								</div>
								<div class="two">
									<span class="yr">2020</span>
									<span class="mos">October</span>
								</div>
							</div>
							<h3 class="heading"><a>KALA POLA</a></h3>
							<p>Buy different traditional items, surf everywhere.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<footer class="ftco-footer bg-bottom" style="background-image: url(images/footer-bg.jpg);">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Sea Side South Park</h2>
                        <p style="color: #a2a2a2 !important; text-align: left;">The benchmark for supreme, seafront
                            experience in Sri Lanka.</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <li class=""><a target="_blank"
                                    href="https://twitter.com/seasidesouthparknsbm"><span
                                        class="icon-twitter"></span></a></li>
                            <li class=""><a target="_blank"
                                    href="https://facebook.com/seasidesouthparknsbm"><span
                                        class="icon-facebook"></span></a></li>
                            <li class=""><a target="_blank"
                                    href="https://instagram.com/seasidesouthparknsbm"><span
                                        class="icon-instagram"></span></a></li>
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


				<script src="js/index-booking.js"></script>
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