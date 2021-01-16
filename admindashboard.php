<?php session_start();

$con = mysqli_connect('localhost', 'root', 'MhQWuYcLVnz41Vhg', 'workitcapstoneproject');
if($con){
	echo "";
}else{
	echo "No Connection";
}

if (!isset($_SESSION['adminidnum'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: admin.php');
  }

  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['adminidnum']);
  	header("location: admin.php");
  }
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Work.IT | Admin</title>
	<!-- CSS Stylesheet for the Dashboard Pages -->
	<link href="css/dashboardstyle.css" rel="stylesheet" type="text/css">
	<!-- CSS Stylesheet for the Navbar -->
	<link href="css/components.css" rel="stylesheet" type="text/css">
	<!-- Website Icons -->
	<link href="images/favicon workit.png" rel="shortcut icon" type="image/x-icon">
	<link href="images/webclip workit.png" rel="apple-touch-icon">
	<!-- General Body Style -->
	<style>
		body{
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale;
			background-color: #FFFFFF;
		}		
	</style>
	<style type="text/css">
		.tg  {border-collapse:collapse;border-spacing:0;
		width: 100%
		}
		.tg td{border-color:black;border-style:solid;border-width:1px;font-family:'Yu Gothic UI Light';font-size:14px;
		  overflow:hidden;padding:10px 5px;word-break:normal;}
		.tg th{border-color:black;border-style:solid;border-width:1px;font-family:'Yu Gothic UI Light';font-size:14px;
		  font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
		.tg .tg-sbv0{background-color:transparent;border-color:transparent;text-align:right;vertical-align:top}
		.tg .tg-iksh{background-color:transparent;border-color:transparent;font-size:22px;font-weight:bold;text-align:center;vertical-align:top}
		.tg .tg-077p{background-color:transparent;border-color:transparent;text-align:center;vertical-align:top}
		.tg .tg-akna{background-color:transparent;border-color:transparent;font-weight:bold;text-align:left;vertical-align:top}
	</style>
</head>

<body>
	<!-- Home Page, Sign Up Page, and Log In Page Navbar -->
	<div data-collapsed="medium" data-animation="default" data-duration="400" id="Navigation" class="dbnavbar w-nav">
		<div class="navbardbcontainer">
			<!-- Navbar Left Side for Brand Specifications -->
			<div class="navigation-left"><a href="index.html" class="brand w-nav-brand"><img src="images/webclip workit.png" width="40" alt="Brand Icon"><div class="text-block">Work.IT</div></a></div>
			<!-- Navbar Right Side for Other Pages inside the Website -->
			<div class="navigation-right">
				<div class="menu-button w-nav-button">
					<div class="icon w-icon-nav-menu"></div>
				</div>
				<nav role="navigation" class="nav-menu w-nav-menu">
					<a href="memberdashboard.php?logout='1'" class="nav-link w-nav-link">Log Out</a>
				</nav>
			</div>
		</div>
	</div>
	<!-- Dashboard Layout Start -->
	<div id="Dashboard" class="dashboarddiv">
		<div class="dbcontainer-flex dashboardgrid">
			<div class="div1">			
				<table class="tg">
				<thead>
				  <tr>
					<th class="tg-077p" colspan="2"><img src="data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512'%3e%3cpath fill='%238a8a8a' d='M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z'/%3e%3c/svg%3e" alt="Member" width="100" height="100"></th>
				  </tr>
				</thead>
				<tbody>
				  <tr>
					<td class="tg-iksh" colspan="2">Luke Leyco</td>
				  </tr>
				  <tr>
					<td class="tg-077p" colspan="2">ID Number: 
						<?php  if (isset($_SESSION['adminidnum'])) : ?>
    					<?php echo $_SESSION['adminidnum']; ?>
    					<?php endif ?>
				  </td>
				  </tr>
				  <tr>
					<td class="tg-077p" colspan="2">Manager</td>
				  </tr>					
				  <tr>
					<td class="tg-akna" colspan="2"><a href="" style="text-decoration: none; color: black;">Add Accounts</a></td>
				  </tr>
				  <tr>
					<td class="tg-akna" colspan="2"><a href="" style="text-decoration: none; color: black;">Update Accounts</a></td>
				  </tr>
				  <tr>
					<td class="tg-akna" colspan="2"><a href="" style="text-decoration: none; color: black;">Remove Accounts</a></td>
				  </tr>					
				</tbody>
				</table>
			</div>
			<div class="div2">
				<h3>Members Attendance</h3>
				<table>
				  <thead>
					<tr>
					  <th class="name-col">Student Name</th>
					  <th>1</th>
					  <th>2</th>
					  <th>3</th>
					  <th>4</th>
					  <th>5</th>
					  <th>6</th>
					  <th>7</th>
					  <th>8</th>
					  <th>9</th>
					  <th>10</th>
					  <th>11</th>
					  <th>12</th>
					  <th class="missed-col">Days Missed-col</th>
					</tr>
				  </thead>
				  <tbody>
					<tr class="student">
					  <td class="name-col">Slappy the Frog</td>
					  <td class="attend-col"><input type="checkbox"></td>
					  <td class="attend-col"><input type="checkbox"></td>
					  <td class="attend-col"><input type="checkbox"></td>
					  <td class="attend-col"><input type="checkbox"></td>
					  <td class="attend-col"><input type="checkbox"></td>
					  <td class="attend-col"><input type="checkbox"></td>
					  <td class="attend-col"><input type="checkbox"></td>
					  <td class="attend-col"><input type="checkbox"></td>
					  <td class="attend-col"><input type="checkbox"></td>
					  <td class="attend-col"><input type="checkbox"></td>
					  <td class="attend-col"><input type="checkbox"></td>
					  <td class="attend-col"><input type="checkbox"></td>
					  <td class="missed-col">0</td>
					</tr>
					<tr class="student">
					  <td class="name-col">Lilly the Lizard</td>
					  <td class="attend-col"><input type="checkbox"></td>
					  <td class="attend-col"><input type="checkbox"></td>
					  <td class="attend-col"><input type="checkbox"></td>
					  <td class="attend-col"><input type="checkbox"></td>
					  <td class="attend-col"><input type="checkbox"></td>
					  <td class="attend-col"><input type="checkbox"></td>
					  <td class="attend-col"><input type="checkbox"></td>
					  <td class="attend-col"><input type="checkbox"></td>
					  <td class="attend-col"><input type="checkbox"></td>
					  <td class="attend-col"><input type="checkbox"></td>
					  <td class="attend-col"><input type="checkbox"></td>
					  <td class="attend-col"><input type="checkbox"></td>
					  <td class="missed-col">0</td>
					</tr>
					<tr class="student">
					  <td class="name-col">Paulrus the Walrus</td>
					  <td class="attend-col"><input type="checkbox"></td>
					  <td class="attend-col"><input type="checkbox"></td>
					  <td class="attend-col"><input type="checkbox"></td>
					  <td class="attend-col"><input type="checkbox"></td>
					  <td class="attend-col"><input type="checkbox"></td>
					  <td class="attend-col"><input type="checkbox"></td>
					  <td class="attend-col"><input type="checkbox"></td>
					  <td class="attend-col"><input type="checkbox"></td>
					  <td class="attend-col"><input type="checkbox"></td>
					  <td class="attend-col"><input type="checkbox"></td>
					  <td class="attend-col"><input type="checkbox"></td>
					  <td class="attend-col"><input type="checkbox"></td>
					  <td class="missed-col">0</td>
					</tr>
					<tr class="student">
					  <td class="name-col">Gregory the Goat</td>
					  <td class="attend-col"><input type="checkbox"></td>
					  <td class="attend-col"><input type="checkbox"></td>
					  <td class="attend-col"><input type="checkbox"></td>
					  <td class="attend-col"><input type="checkbox"></td>
					  <td class="attend-col"><input type="checkbox"></td>
					  <td class="attend-col"><input type="checkbox"></td>
					  <td class="attend-col"><input type="checkbox"></td>
					  <td class="attend-col"><input type="checkbox"></td>
					  <td class="attend-col"><input type="checkbox"></td>
					  <td class="attend-col"><input type="checkbox"></td>
					  <td class="attend-col"><input type="checkbox"></td>
					  <td class="attend-col"><input type="checkbox"></td>
					  <td class="missed-col">0</td>
					</tr>
					<tr class="student">
					  <td class="name-col">Adam the Anaconda</td>
					  <td class="attend-col"><input type="checkbox"></td>
					  <td class="attend-col"><input type="checkbox"></td>
					  <td class="attend-col"><input type="checkbox"></td>
					  <td class="attend-col"><input type="checkbox"></td>
					  <td class="attend-col"><input type="checkbox"></td>
					  <td class="attend-col"><input type="checkbox"></td>
					  <td class="attend-col"><input type="checkbox"></td>
					  <td class="attend-col"><input type="checkbox"></td>
					  <td class="attend-col"><input type="checkbox"></td>
					  <td class="attend-col"><input type="checkbox"></td>
					  <td class="attend-col"><input type="checkbox"></td>
					  <td class="attend-col"><input type="checkbox"></td>
					  <td class="missed-col">0</td>
					</tr>
				  </tbody>
				</table>
			</div>
			<div class="div6">
				<div id="curve_chart" style="width: 100%; height: 100%"></div>			
			</div>
			<div class="div7">
				<div class="container content">
					<div class="row">
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
							<div class="card">
								<div class="card-header">Notifications</div>
									<div class="card-body height3">
									<ul class="chat-list">
										<li class="in">
											<div class="chat-img">
												<img alt="Avtar" src="https://bootdey.com/img/Content/avatar/avatar1.png">
											</div>
											<div class="chat-body">
												<div class="chat-message">
													<h5>Jimmy Willams (Instructor)</h5>
													<p>Avoid too much fatty food this week.</p>
												</div>
											</div>
										</li>
										<li class="out">
											<div class="chat-img">
												<img alt="Avtar" src="https://bootdey.com/img/Content/avatar/avatar6.png">
											</div>
											<div class="chat-body">
												<div class="chat-message">
													<h5>Serena (Owner)</h5>
													<p>Monthly payment due on the 24th.</p>
												</div>
											</div>
										</li>										
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>	
<!-- JavaScript for Drilldown Chart -->
<script src= "js/drilldownchart.js"></script>
<script src= "js/attendance.js"></script>
</body>
</html>