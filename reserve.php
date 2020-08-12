<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

?>

<?php
//handle rederectes
if (!isset($_SESSION['username'])) {
    $_SESSION['success'] = "You must log in first!";
    header('location: login.php?booking=true');
}

$check_in = "";
$check_out = "";
if (isset($_POST['booking_check'])) {


    if (isset($check_in) and isset($check_out)){
        $check_in = $_POST['check_in'];
        $check_out = $_POST['check_out'];
    }
    
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <title>Reserve | Sea Side South Park</title>
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
                    <li class="nav-item active"><a href="reserve.php" class="nav-link">RESERVE</a></li>
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


    <section>
       
            <div class="container" style="margin-top: 200px;">






            <?php
if (isset($_POST['place_booking'])) {

    $rooms_un = "";

    if (isset($_POST['room1'])){
        $rooms_un = $rooms_un . "Room type 1: " . $_POST['room1_qty'] . " room(S)" . "\n";
    }
    if (isset($_POST['room2'])){
        $rooms_un = $rooms_un . "Room type 2: " . $_POST['room2_qty'] . " room(S)" . "\n";
    }
    if (isset($_POST['room3'])){
        $rooms_un = $rooms_un . "Room type 3: " . $_POST['room3_qty'] . " room(S)" . "\n";
    }
    if (isset($_POST['room4'])){
        $rooms_un = $rooms_un . "Room type 4: " . $_POST['room4_qty'] . " room(S)" . "\n";
    }

    $db = mysqli_connect('localhost', 'root', '', 'seaside');

    $username =$_SESSION['username'];
    $booking_date = date("Y/m/d H:i:s");
    $check_in =  mysqli_real_escape_string($db, $_POST['check_in']);
    $check_out =  mysqli_real_escape_string($db, $_POST['check_out']);
    $room_list = $rooms_un;
    $notes = mysqli_real_escape_string($db, $_POST['notes']);

    $query = "INSERT INTO bookings (username, booking_date, check_in, check_out, room_list, notes) 
					  VALUES('$username', '$booking_date', '$check_in', '$check_out', '$room_list', '$notes')";

    if (empty($username) || empty($booking_date) || empty($check_in) || empty($check_out) || empty($notes)) { 
        echo '<div class="error" style="text-align: center;">Please enter all details correctly.</div>';
    } elseif ($result = mysqli_query($db, $query)) {
        //success
        echo '<div class="success" style="text-align: center;">Booking submitted. Make sure to make your payment via following link and send us your invoice number to <b>booking@nsbm.cloud</b>.<br><br><a href="https://paypal.me/seasidesouthpark" target="_blank" style="color: #2f2f2f;"><b>Make payment ></b></a></div>';
    } else {
        echo '<div class="error" style="text-align: center;">Error - 503</div>';
    }
    //header('location: reserve.php');


}

?>

<form onsubmit="return validate_booking()" method="post" action="reserve.php">

                <div class="row no-gutters">
                    <div class="col-md-5">
                        <div class="booking-panel">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label>First name</label>
                                        <input type="text" class="form-control" placeholder="John"
                                            value="<?php  if (isset($_SESSION['username'])) : echo $_SESSION['fname']; endif ?>"
                                            disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label>Last name</label>
                                        <input type="text" class="form-control" placeholder="Doe"
                                            value="<?php  if (isset($_SESSION['username'])) : echo $_SESSION['lname']; endif ?>"
                                            disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">

                                        <label>Email address</label>
                                        <input type="email" class="form-control" placeholder="example@example.com"
                                            value="<?php  if (isset($_SESSION['username'])) : echo $_SESSION['email']; endif ?>"
                                            disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" class="form-control" placeholder="07XXXXXXXX"
                                            value="<?php  if (isset($_SESSION['username'])) : echo $_SESSION['phone']; endif ?>"
                                            disabled>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="#">Check-in date</label>
                                        <div class="form-field">
                                            <input type="text" name="check_in" class="form-control checkin_date"
                                                placeholder="Check in date" value="<?php echo $check_in ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="#">Check-out date</label>
                                        <div class="form-field">
                                            <input type="text" name="check_out" class="form-control checkout_date"
                                                placeholder="Check out date" value="<?php echo $check_out ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col"> <label>Room selection</label></div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-check" onclick="hideqty('room_1_qty','room1')">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1"
                                            name="room1">
                                        <label class="form-check-label" for="defaultCheck1">
                                            Room type 1
                                        </label>
                                        <input type="number" class="form-control" placeholder="Qty." min="1" max="12"
                                            id="room_1_qty" style="display: none;" name="room1_qty">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-check" onclick="hideqty('room_2_qty','room2')">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck2"
                                            name="room2">
                                        <label class="form-check-label" for="defaultCheck2">
                                            Room type 2
                                        </label>
                                        <input type="number" class="form-control" placeholder="Qty." min="1" max="6"
                                            id="room_2_qty" style="display: none;" name="room2_qty">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-check" onclick="hideqty('room_3_qty','room3')">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck3"
                                            name="room3">
                                        <label class="form-check-label" for="defaultCheck3">
                                            Room type 3
                                        </label>
                                        <input type="number" class="form-control" placeholder="Qty." min="1" max="4"
                                            id="room_3_qty" style="display: none;" name="room3_qty">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-check" onclick="hideqty('room_4_qty','room4')">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck4"
                                            name="room4">
                                        <label class="form-check-label" for="defaultCheck4">
                                            Room type 4
                                        </label>
                                        <input type="number" class="form-control" placeholder="Qty." min="1" max="2"
                                            id="room_4_qty" style="display: none;" name="room4_qty">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                <div class="form-group">
                                    <label for="notesx">Special notes</label>
                                    <textarea class="form-control" id="notesx" rows="3" name="notes"></textarea>
                                </div>
                                </div>
                            </div>
                            

                            <div class="row">
                                <div class="col" style="text-align: center; margin: 30px;">
                                    <button class="btn btn-primary" type="submit" name="place_booking">SUBMIT BOOKING
                                        REQUEST</button>
                                </div>
                            </div>






                        </div>
                    </div>

                    <div class="col-md-7">
                        <div class="row">
                            <div class="col">
                                <div class="card mb-3">
                                    <img class="card-img-top" src="images/bg-01.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural
                                            lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="card mb-3">
                                    <img class="card-img-top" src="images/bg-01.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural
                                            lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>


                </div>
                </form>
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



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" /></svg></div>


    <script src="js/booking.js"></script>
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