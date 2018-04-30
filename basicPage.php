<!-- Version 5: Implements functions to create a View Cadet Page and an Edit Cadet Page -->
<!DOCTYPE html>
<?php
function basicPage($pageName) //Basic Page Layout with Navbar and Footer
{
	echo <<<_END
	<html>
			<head>
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<meta http-equiv="X-UA-Compatible" content="IE=edge">
				<title>Georgia Youth ChalleNGe Program</title>
				 <!-- Bootstrap CSS CDN -->
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
				<!-- Our Custom CSS -->
				<link href="cs1.css" rel="stylesheet">
				<!-- DataTables CSS CDN -->
				<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
				
				<!-- jQuery CDN -->
				<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
				<!-- Bootstrap Js CDN -->
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
				<!-- DataTables JS CDN -->
				<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
				<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
				<!-- Our Custom JS -->
				<script src="functions.js"></script>
				
			</head>
			<body>
				<div class="wrapper">
					<!-- Sidebar Holder -->
					<nav id="sidebar">
						<div class="sidebar-header">
							<a href="home.html"><img class="logo" name="logo" src="ngyc.png" style="width:200px;height:200px" border="0"></a>
						</div>
						<ul class="list-unstyled components">
							<p>Georgia Youth ChalleNGe Program</p>
							<li>
								<a href="#cadetSubmenu" data-toggle="collapse" aria-expanded="false">Cadets</a>
								<ul class="collapse list-unstyled" id="cadetSubmenu">
									<li><a href="allCadetView.php">All Locations</a></li>
									<li><a href="#">Milledgeville</a></li>
									<li><a href="#">Fort Gordon</a></li>
									<li><a href="#">Fort Stewart</a></li>
								</ul>
								<a href="#admissionSubmenu" data-toggle="collapse" aria-expanded="false">Admissions</a>
								<ul class="collapse list-unstyled" id="admissionSubmenu">
									<li><a href="allApplicantView.php">All Locations</a></li>
									<li><a href="#">Milledgeville</a></li>
									<li><a href="#">Fort Gordon</a></li>
									<li><a href="#">Fort Stewart</a></li>
								</ul>
								<a href="#reportSubmenu" data-toggle="collapse" aria-expanded="false">Reports</a>
								<ul class="collapse list-unstyled" id="reportSubmenu">
									<li><a href="allReportView.php">All Locations</a></li>
									<li><a href="#">Milledgeville</a></li>
									<li><a href="#">Fort Gordon</a></li>
									<li><a href="#">Fort Stewart</a></li>
								</ul>
								<a href="#adminSubmenu" data-toggle="collapse" aria-expanded="false">Administration</a>
								<ul class="collapse list-unstyled" id="adminSubmenu">
									<li><a href="roles.php">All Locations</a></li>
									<li><a href="#">Milledgeville</a></li>
									<li><a href="#">Fort Gordon</a></li>
									<li><a href="#">Fort Stewart</a></li>
								</ul>
							</li>
						</ul>
					</nav>
					<!-- Page Content Holder -->
					<div id="content">
						<nav class="navbar navbar-default">
							<div class="container-fluid">
								<div class="navbar-header">
									<button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
										<i class="glyphicon glyphicon-align-left"></i>
										<span>Toggle Sidebar</span>
									</button>
									<h1>$pageName</h1>
								</div>
								<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
									<ul class="nav navbar-nav navbar-right">
										<!-- COMMENTING OUT 'Page's
										<li><a href="#">Page</a></li>
										<li><a href="#">Page</a></li>
										<li><a href="#">Page</a></li>
										-->
										<?php
										if(isset($_SESSION['username']))
										{
										echo "<button type='submit' href = "logout.php" class='btn btn-danger'>Logout</button>"; 
										}
										?> 
										
									</ul>
								</div>
							</div>
						</nav> 
_END;
}
?>
