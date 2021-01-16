<?php include('admin/server.php') ?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Work.IT | Admin</title>
	<!-- CSS Stylesheet for Index Page -->
	<link href="css/components.css" rel="stylesheet" type="text/css">
	<!-- Website Icons -->
	<link href="images/favicon workit.png" rel="shortcut icon" type="image/x-icon">
	<link href="images/webclip workit.png" rel="apple-touch-icon">
	<!-- General Body Style -->
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
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
		</div>
	</div>
	<!-- Log In Form -->
	<div id="Feature" class="feature">
		<div class="container-flex form">
			<form action="admin.php" method="post">
			<div class="container">
				<label for="idnum"><b style="color: white">Admin ID</b></label>
					<input type="text" placeholder="Enter ID" name="adminidnum" required>
				<label for="psw"><b style="color: white">Password</b></label>
					<input type="password" placeholder="Enter Password" name="adminpsw" required>
				<label style="color: white">
					<input type="checkbox" checked="checked" name="remember"> Remember Me
				</label>
				<button type="submit" name="adminlogin_btn">Log In</button>
			</div>
			</form>
		</div>		
	</div>	
</body>
</html>