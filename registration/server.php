<?php
session_start();

// initializing variables
$lastn = "";
$firstn = "";
$bday = "";
$homeaddress = "";
$homecity = "";
$idnum = "";
$contactnum = "";
$emailad    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', 'MhQWuYcLVnz41Vhg', 'workitcapstoneproject');

// REGISTER USER
if (isset($_POST['signup_btn'])) {
  // receive all input values from the form
  $lastn = mysqli_real_escape_string($db, $_POST['lastn']);
  $firstn = mysqli_real_escape_string($db, $_POST['firstn']);
  $bday = mysqli_real_escape_string($db, $_POST['bday']);
  $homeaddress = mysqli_real_escape_string($db, $_POST['homeaddress']);
  $homecity = mysqli_real_escape_string($db, $_POST['homecity']);
  $idnum = mysqli_real_escape_string($db, $_POST['idnum']);
  $contactnum = mysqli_real_escape_string($db, $_POST['contactnum']);
  $emailad    = mysqli_real_escape_string($db, $_POST['emailad']);
  $psw1 = mysqli_real_escape_string($db, $_POST['psw1']);
  $psw2 = mysqli_real_escape_string($db, $_POST['psw2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($lastn)) { array_push($errors, "Last Name is required"); }
  if (empty($firstn)) { array_push($errors, "First Name is required"); }
  if (empty($bday)) { array_push($errors, "Birthday is required"); }
  if (empty($homeaddress)) { array_push($errors, "Location is required"); }
  if (empty($homecity)) { array_push($errors, "City is required"); }
  if (empty($idnum)) { array_push($errors, "Membership ID is required"); }
  if (empty($contactnum)) { array_push($errors, "Contact Number is required"); }	
  if (empty($emailad)) { array_push($errors, "Email Address is required"); }
  if (empty($psw1)) { array_push($errors, "Password is required"); }
  if ($psw1 != $psw2) { array_push($errors, "The two passwords do not match"); }

  // first check the database to make sure 
  // a user does not already exist with the same membership ID and/or email
  $user_check_query = "SELECT * FROM users WHERE idnum='$idnum' OR emailad='$emailad' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if Membership ID exists
    if ($user['idnum'] === $idnum) {
      array_push($errors, "Membership ID already exists");
    }

    if ($user['emailad'] === $emailad) {
      array_push($errors, "Email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$psw = md5($psw1);//encrypt the password before saving in the database

	$query = "INSERT INTO users (idnum, lastn, firstn, bday, homeaddress, homecity, contactnum, emailad, psw) 
  			  VALUES('$idnum', '$lastn', '$firstn', '$bday', '$homeaddress', '$homecity', '$contactnum', '$emailad', '$psw')";
  	mysqli_query($db, $query);
  	$_SESSION['idnum'] = $idnum;
  	$_SESSION['success'] = "";
  	header('location: memberdashboard.php');
	}
}
	
// LOGIN USER
if (isset($_POST['login_btn'])) {
  $idnum = mysqli_real_escape_string($db, $_POST['idnum']);
  $psw = mysqli_real_escape_string($db, $_POST['psw']);

  if (empty($idnum)) {
  	array_push($errors, "Membership ID is required");
  }
  if (empty($psw)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$psw = md5($psw);
  	$query = "SELECT * FROM users WHERE idnum='$idnum' AND psw='$psw'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['idnum'] = $idnum;
  	  $_SESSION['success'] = "";
  	  header('location: memberdashboard.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}
?>