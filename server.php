<?php 
	if(!isset($_SESSION)) 
	{ 
		session_start(); 
	} 

	// variable declaration
	$fname = "";
	$lname = "";
	$username = "";
	$email    = "";
	$phone = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'seaside');

	//CONTACT
	if (isset($_POST['contact_submit'])) {
		$name = mysqli_real_escape_string($db, $_POST['name']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$phone = mysqli_real_escape_string($db, $_POST['phone']);
		$msg = mysqli_real_escape_string($db, $_POST['msg']);

		if (empty($name) || empty($email) || empty($phone) || empty($msg)) { array_push($errors, "Fill all details!"); }

		if (count($errors) == 0) {
			$query = "INSERT INTO contact_queries (cname, email, phone, msg) 
					  VALUES('$name', '$email', '$phone', '$msg')";
			mysqli_query($db, $query);
			//unset($_SESSION['success']);
			$_SESSION['success'] = "You are now logged in";
			//$_SESSION['success'] = "We'll get back to you soon!";
			header('location: contact.php');
		}

	}

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$fname = mysqli_real_escape_string($db, $_POST['fname']);
		$lname = mysqli_real_escape_string($db, $_POST['lname']);
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
		$phone = mysqli_real_escape_string($db, $_POST['phone']);

		// form validation: ensure that the form is correctly filled
		if (empty($fname) || empty($lname) || empty($username) || empty($email) || empty($password_1) || empty($phone)) { array_push($errors, "Fill all details!"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO users (fname, lname, username, email, password, phone) 
					  VALUES('$fname', '$lname', '$username', '$email', '$password', '$phone')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['fname'] = $fname;
			$_SESSION['lname'] = $lname;
			$_SESSION['email'] = $email;
			$_SESSION['phone'] = $phone;
			$_SESSION['success'] = "You are now logged in";
			header('location: index.php');
		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);
		

			if (mysqli_num_rows($results) == 1) {
				while ($row = $results->fetch_assoc()) {
					$_SESSION['fname'] =  $row['fname'];
					$_SESSION['lname'] =  $row['lname'];
					$_SESSION['email'] =  $row['email'];
					$_SESSION['phone'] =  $row['phone'];
				}
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: index.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}
	

?>