<?php include('registration/server.php') ?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Work.IT | Sign Up</title>
	<!-- CSS Stylesheet for Index Page -->
	<link href="css/components.css" rel="stylesheet" type="text/css">
	<!-- Website Icons -->
	<link href="images/favicon workit.png" rel="shortcut icon" type="image/x-icon">
	<link href="images/webclip workit.png" rel="apple-touch-icon">
	<!-- General Body Style -->
	<style>
		body{
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale;
			background-color: #708cea;
			font-family: "Yu Gothic UI Light", "Calibri Light";
		}
		form {
			border: 3px solid #354C5E;
			background: #354C5E;
			border-radius: 10px;
			
		}

		input[type=text], input[type=password], input[type=number] {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #354C5E;
			box-sizing: border-box;
		}
		
		input[type=date] {
			width: 100%;
			padding: 10px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #354C5E;
			box-sizing: border-box;			
		}
		
		input[type=text]:focus, input[type=password]:focus, input[type=number]:focus, input[type=date]:focus {
		background-color: #ddd;
		outline: none;
		}

		button {
			background-color: #3C62C3;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			cursor: pointer;
			width: 100%;
			opacity: 0.9;
		}

		button:hover {
			opacity: 1;
		}
		
		.cancelbtn {
			padding: 14px 20px;
			background-color: #222222;
		}

		.cancelbtn, .signupbtn {
			float: left;
			width: 50%;
		}
		
		.container {
			padding: 16px;
			text-align: left;
		}
		
		.clearfix::after {
			content: "";
			clear: both;
			display: table;
		}
		
		@media screen and (max-width: 479px) {
			.cancelbtn, .signupbtn {
			width: 100%;
			}
		}
	</style>
</head>

<body>
	<!-- Home Page, Sign Up Page, and Log In Page Navbar -->
	<div data-collapsed="medium" data-animation="default" data-duration="400" id="Navigation" class="navbar w-nav">
		<div class="navigation-container">
			<!-- Navbar Left Side for Brand Specifications -->
			<div class="navigation-left"><a href="index.html" class="brand w-nav-brand"><img src="images/webclip workit.png" width="40" alt="Brand Icon"><div class="text-block">Work.IT</div></a></div>
			<!-- Navbar Right Side for Other Pages inside the Website -->
			<div class="navigation-right">
				<div class="menu-button w-nav-button">
					<div class="icon w-icon-nav-menu"></div>
				</div>
				<nav role="navigation" class="nav-menu w-nav-menu">
					<a href="login.php" class="nav-link w-nav-link">Log In</a>
					<a href="signup.php" class="nav-link w-nav-link signup-current">Sign Up</a>
				</nav>
			</div>
		</div>
	</div>
	<!-- Sign Up Form -->
	<div id="Feature" class="feature">
		<div class="container-flex">
			<form action="signup.php" method="post">
			<div class="container signupform">
				<div class="label1">
					<label for="lastname"><b style="color: white">Last Name</b></label>
					<input type="text" placeholder="Enter Last Name" name="lastn" value="<?php echo $lastn; ?>" required>
				</div>
				<div class="label2">
					<label for="firstname"><b style="color: white">First Name</b></label>
					<input type="text" placeholder="Enter First Name" name="firstn" value="<?php echo $firstn; ?>" required>				
				</div>
				<div class="label3">
					<label for="birthday"><b style="color: white">Birthday</b></label>
					<input type="date" name="bday" value="<?php echo $bday; ?>" required>				
				</div>
				<div class="label4">
					<label for="location"><b style="color: white">Location</b></label>
					<input type="text" placeholder="Enter Address" name="homeaddress" value="<?php echo $homeaddress; ?>" required>					
				</div>
				<div class="label5">
					<label for="city"><b style="color: white">City</b></label>
					<input type="text" placeholder="Enter City" name="homecity" value="<?php echo $homecity; ?>" required>					
				</div>
				<div class="label6">
					<label for="membership"><b style="color: white">Membership ID</b></label>
					<input type="number" placeholder="Enter ID Number" name="idnum" value="<?php echo $idnum; ?>" required>					
				</div>
				<div class="label7">
					<label for="contact"><b style="color: white">Contact Number</b></label>
					<input type="number" placeholder="Enter Phone Number" name="contactnum" value="<?php echo $contactnum; ?>" required>					
				</div>
				<div class="label8">
					<label for="email"><b style="color: white">Email Address</b></label>
					<input type="text" placeholder="Enter Email Address" name="emailad" value="<?php echo $emailad; ?>" required>				
				</div>
				<div class="label9">
					<label for="psw"><b style="color: white">Password</b></label>
					<input type="password" placeholder="Enter Password" name="psw1" required>					
				</div>
				<div class="label10">
					<label for="psw-repeat"><b style="color: white">Repeat Password</b></label>
					<input type="password" placeholder="Repeat Password" name="psw2" required>					
				</div>
				<div class="label11">
					<label style="color: white">
						<input type="checkbox" checked="checked" name="remember"> Remember Me
						<p style="color: white">By creating an account you agree to our <a href="#" style="color:#FFFFFF">Terms & Privacy</a>.</p>
					</label>										
				</div>
				<div class="label12">
					<div class="clearfix">
						<button type="submit" class="signupbtn" name="signup_btn">Sign Up</button>						
						<button type="button" class="cancelbtn">Cancel</button>
					</div>					
				</div>
				</div>
			</form>
		</div>		
	</div>
</body>
</html>