<!DOCTYPE html>
<html lang="en">

<head>
    <title>Help | Sea Side South Park</title>
    <link rel="icon" href="favicon.png" type="image/png">
    <meta name="description" content="Sea side south part. The best hotel network.">
<meta name="keywords" content="Sea side south park, Sea side hotel, Sea side, best hotels in sri lanka, hotels to stay">
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

    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/contact-css.css">
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
                    <?php  if (isset($_SESSION['username'])) : ?>
                    <li class="nav-item"><a href="index.php?logout=1" class="nav-link">LOGOUT
                            (<?php echo $_SESSION['username']; ?>)</a></li>
                    <?php endif ?>
                    <?php  if (!isset($_SESSION['username'])) : ?>
                    <li class="nav-item"><a href="login.php" class="nav-link">LOGIN</a></li>
                    <?php endif ?>

                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->


    <section style="background-image: url(images/bg-01.jpg); background-size: cover;">
        <div class="container">
            <div class="row no-gutters">
                <div class="container contact-form">
                    <div class="row">
                        <div class="col">
                        <h2 styel="    text-align: center; margin: 20px;">Need Help? We're here for you!</h2>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left" type="button"
                                                data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                How can I get more information about the room or property's facility?
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                        You can find details about the property in your confirmation email. For anything else, you can also contact us directly.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                                data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                                aria-controls="collapseTwo">
                                                When do I get a confirmation email?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                        In most cases, you will receive this email along with the booking voucher (PDF file) within 30 minutes of booking. If you still haven't received it after that time, please check your junk mail and/or spam filters. You can also download or resend your booking voucher online.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                                data-toggle="collapse" data-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                Is breakfast included in the room rate?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                        If breakfast is included, it will display "Breakfast Included" below the room type. If it is not mentioned, the hotel is not including breakfast with this room deal.
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
    <script src="js/main.js"></script>

</body>

</html>