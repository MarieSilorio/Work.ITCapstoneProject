<?php require('logincheck.php') ?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Work.IT | Dashboard</title>
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
	<!-- Line Chart for BMI, Height, and Weight -->
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
		<script type="text/javascript">
		  google.charts.load('current', {'packages':['corechart']});
		  google.charts.setOnLoadCallback(drawChart);

		  function drawChart() {
			var data = google.visualization.arrayToDataTable([
			  ['Month', 'Height (in cm)', 'Weight (in kg)', 'BMI'],
			  ['Jan',  168,      50,		21],
			  ['Feb',  170,      60,		20],
			  ['Mar',  172,      70,		23],
			  ['Apr',  174,      90,		24]
			]);

			var options = {
			  title: 'Height, Weight, and Body Mass Index',
			  curveType: 'function',
			  legend: { position: 'bottom' }
			};

			var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

			chart.draw(data, options);
		  }
	</script>	
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
					<td class="tg-iksh" colspan="2">Khalid Ramber</td>
				  </tr>
				  <tr>
					<td class="tg-077p" colspan="2">ID Number: 
						<?php  if (isset($_SESSION['idnum'])) : ?>
    					<?php echo $_SESSION['idnum']; ?>
    					<?php endif ?>
				  </td>
				  </tr>
				  <tr>
					<td class="tg-077p" colspan="2">Member</td>
				  </tr>					
				  <tr>
					<td class="tg-akna">Contact Number</td>
					<td class="tg-sbv0">0524584395</td>
				  </tr>
				  <tr>
					<td class="tg-akna">Location</td>
					<td class="tg-sbv0">Kolambugan, Lanao del Norte</td>
				  </tr>
				  <tr>
					<td class="tg-akna">Email Address</td>
					<td class="tg-sbv0">khalidramber@gmail.com</td>
				  </tr>
				  <tr>
					<td class="tg-akna">Birthday</td>
					<td class="tg-sbv0">09/24/1999</td>
				  </tr>
				  <tr>
					<td class="tg-akna" colspan="2"><a href="payment/list.html" style="text-decoration: none; color: black;">Payment</a></td>
				  </tr>
				  <tr>
					<td class="tg-akna" colspan="2"><a href="account/update.php" style="text-decoration: none; color: black;">Account Settings</a></td>
				  </tr>
				</tbody>
				</table>
			</div>
			<div class="div2">
				<script src="https://code.highcharts.com/highcharts.js"></script>
				<script src="https://code.highcharts.com/modules/data.js"></script>
				<script src="https://code.highcharts.com/modules/drilldown.js"></script>
				<script src="https://code.highcharts.com/modules/exporting.js"></script>
				<script src="https://code.highcharts.com/modules/export-data.js"></script>
				<script src="https://code.highcharts.com/modules/accessibility.js"></script>

				<figure class="highcharts-figure">
				  <div id="container"></div>
				</figure>				
			</div>
			<div class="div3">
				<div>
					<h3 class="demotitles">10 Minute Ab Workout For Six Pack Abs</h3>
					<iframe width=100% height=100% src="https://www.youtube.com/embed/QdIutxfm_hU?start=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				<table class="goals">
				  <tr>
					<td class="goal-heading" colspan="2"><span class="gh"><b>Goal A: Abs</b></span></td>
				  </tr>
				  <tr>
					<td class="goal-schedule" colspan="2">Schedule: Monday and Thursday</td>
				  </tr>
				  <tr>
					<td class="exercises">Jumping Jacks</td>
					<td class="exduration">4 sets, 15 reps</td>
				  </tr>
				  <tr>
					<td class="exercises">Push Ups</td>
					<td class="exduration">2 sets, 50 reps</td>
				  </tr>
				  <tr>
					<td class="exercises">Curl Ups</td>
					<td class="exduration">1 set, 100 reps</td>
				  </tr>
				</table>			
			</div>
			<div class="div4">
				<div>
					<h3 class="demotitles">Don't Skip These Biceps Exercises</h3>
					<iframe width=100% height=100% src="https://www.youtube.com/embed/iGYeHsgb4CY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				<table class="goals">
				  <tr>
					<td class="goal-heading" colspan="2"><span class="gh"><b>Goal B: Biceps</b></span></td>
				  </tr>
				  <tr>
					<td class="goal-schedule" colspan="2">Schedule: Wednesday and Friday</td>
				  </tr>
				  <tr>
					<td class="exercises">Bicep Curls</td>
					<td class="exduration">2 sets, 15 reps</td>
				  </tr>
				  <tr>
					<td class="exercises">Shoulder Press</td>
					<td class="exduration">2 sets, 30 reps</td>
				  </tr>
				  <tr>
					<td class="exercises">Dead Lifts</td>
					<td class="exduration">1 set, 10 reps</td>
				  </tr>
				</table>						
			</div>
			<div class="div5">
				<div>
					<h3 class="demotitles">No More Skinny Legs! Leg Workouts for Men</h3>
					<iframe width=100% height=100% src="https://www.youtube.com/embed/uO09ntQaSwc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				<table class="goals">
				  <tr>
					<td class="goal-heading" colspan="2"><span class="gh"><b>Goal C: Thighs</b></span></td>
				  </tr>
				  <tr>
					<td class="goal-schedule" colspan="2">Schedule: Saturday</td>
				  </tr>
				  <tr>
					<td class="exercises">Side Lunges</td>
					<td class="exduration">4 sets, 15 reps</td>
				  </tr>
				  <tr>
					<td class="exercises">Firehydrants</td>
					<td class="exduration">4 sets, 30 reps</td>
				  </tr>
				  <tr>
					<td class="exercises">Flutter Kicks</td>
					<td class="exduration">2 sets, 10 reps</td>
				  </tr>
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
			<div class="div8"><!-- Change CSS and classes later -->
				<table class="goals">
					  <tr>
						<td class="goal-heading" colspan="2"><span class="gh"><b>Height</b></span></td>
					  </tr>
					  <tr>
						<td class="exercises">January 2021</td>
						<td class="exduration">168 cm</td>
					  </tr>
					  <tr>
						<td class="exercises">February 2021</td>
						<td class="exduration">170 cm</td>
					  </tr>
					  <tr>
						<td class="exercises">March 2021</td>
						<td class="exduration">172 cm</td>
					  </tr>
					  <tr>
						<td class="exercises">April 2021</td>
						<td class="exduration">174 cm</td>
					  </tr>
				</table>
			</div>
			<div class="div9">
				<table class="goals">
					  <tr>
						<td class="goal-heading" colspan="2"><span class="gh"><b>Weight</b></span></td>
					  </tr>
					  <tr>
						<td class="exercises">January 2021</td>
						<td class="exduration">50 kg</td>
					  </tr>
					  <tr>
						<td class="exercises">February 2021</td>
						<td class="exduration">60 kg</td>
					  </tr>
					  <tr>
						<td class="exercises">March 2021</td>
						<td class="exduration">70 kg</td>
					  </tr>
					  <tr>
						<td class="exercises">April 2021</td>
						<td class="exduration">90 kg</td>
					  </tr>	
				</table>
			</div>
			<div class="div10">
				<table class="goals">
					  <tr>
						<td class="goal-heading" colspan="2"><span class="gh"><b>BMI</b></span></td>
					  </tr>
					  <tr>
						<td class="exercises">January 2021</td>
						<td class="exduration">21</td>
					  </tr>
					  <tr>
						<td class="exercises">February 2021</td>
						<td class="exduration">20</td>
					  </tr>
					  <tr>
						<td class="exercises">March 2021</td>
						<td class="exduration">23</td>
					  </tr>
					  <tr>
						<td class="exercises">April 2021</td>
						<td class="exduration">24</td>
					  </tr>					
				</table>
			</div>
		</div>		
	</div>	
<!-- JavaScript for Drilldown Chart -->
<script src= "js/drilldownchart.js"></script>
<script src= "js/attendance.js"></script>
</body>
</html>