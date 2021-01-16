<?php include('registration/server.php') ?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Work.IT | Log In</title>
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

		input[type=text], input[type=password] {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #354C5E;
			box-sizing: border-box;
		}

		button {
			background-color: #3C62C3;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			cursor: pointer;
			width: 100%;
		}

		button:hover {
			opacity: 0.8;
		}

		.imgcontainer {
			text-align: center;
			margin: 24px 0 12px 0;
		}

		.container {
			padding: 16px;
			text-align: left;
		}

		span.psw {
			float: right;
			padding-top: 16px;
		}

		@media screen and (max-width: 479px) {
			span.psw {
				display: block;
				float: none;
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
					<a href="signup.php" class="nav-link w-nav-link signup">Sign Up</a>
				</nav>
			</div>
		</div>
	</div>
	<!-- Log In Form -->
	<div id="Feature" class="feature">
		<div class="container-flex form">
			<form action="login.php" method="post">
			<div class="container">
				<label for="idnum"><b style="color: white">Login ID</b></label>
					<input type="text" placeholder="Enter ID" name="idnum" required>
				<label for="psw"><b style="color: white">Password</b></label>
					<input type="password" placeholder="Enter Password" name="psw" required>
				<label style="color: white">
					<input type="checkbox" checked="checked" name="remember"> Remember Me
				</label>
				<button type="submit" name="login_btn">Log In</button>
			</div>
			</form>
		</div>		
	</div>	
</body>
</html>