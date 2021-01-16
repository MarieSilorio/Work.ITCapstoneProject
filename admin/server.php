<?php
session_start();

// initializing variables
$adminidnum = "";
$adminname = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', 'MhQWuYcLVnz41Vhg', 'workitcapstoneproject');

  // first check the database to make sure 
  // a user does not already exist with the same membership ID and/or email
  $user_check_query = "SELECT * FROM adminlogin WHERE adminidnum='$adminidnum' OR adminname='$adminname' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if Membership ID exists
    if ($user['adminidnum'] === $adminidnum) {
      array_push($errors, "Admin ID already exists");
    }

    if ($user['adminname'] === $adminname) {
      array_push($errors, "Admin Name already exists");
    }
  }
	
// LOGIN USER
if (isset($_POST['adminlogin_btn'])) {
  $adminidnum = mysqli_real_escape_string($db, $_POST['adminidnum']);
  $adminpsw = mysqli_real_escape_string($db, $_POST['adminpsw']);

  if (empty($adminidnum)) {
  	array_push($errors, "Admin ID is required");
  }
  if (empty($adminpsw)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$psw = md5($psw);
  	$query = "SELECT * FROM adminlogin WHERE adminidnum='$adminidnum' AND adminpsw='$adminpsw'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['adminidnum'] = $adminidnum;
  	  $_SESSION['success'] = "";
  	  header('location: admindashboard.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}
?>