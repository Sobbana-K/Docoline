<!DOCTYPE html> 
<html lang="en">
	
<!-- doccure/patient-dashboard.html  30 Nov 2019 04:12:16 GMT -->
<head>
		<meta charset="utf-8">
		<title>Docoline</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		
		<!-- Favicons -->
		<link href="assets1/img/favicon.png" rel="icon">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="assets1/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="assets1/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="assets1/plugins/fontawesome/css/all.min.css">
		
		<!-- Main CSS -->
		<link rel="stylesheet" href="assets1/css/style.css">
		<style>
                table {
          font-family: arial, sans-serif;
          border-collapse: collapse; 
  table-layout: fixed;
  width: 920px;  
}

        

        td, th {
          border: 1px solid #dddddd;
          text-align: left;
          padding: 20px;
        }

        tr:nth-child(even) {
          background-color: #dddddd;
        }  

        
    </style>
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	
	</head>
	<body>

		<!-- Main Wrapper -->
		<div class="main-wrapper">
		
			<!-- Header -->
			<header class="header">
				<nav class="navbar navbar-expand-lg header-nav">
					<div class="navbar-header">
						<a href="index.html" class="navbar-brand logo">
							<img src="assets1/img/logo.png.png" class="img-fluid" alt="Logo">
						</a>
					</div>
					<div class="main-menu-wrapper">
						<div class="menu-header">
							<a href="index.html" class="menu-logo">
								<img src="assets1/img/logo.jpeg" class="img-fluid" alt="Logo">
							</a>
							<a id="menu_close" class="menu-close" href="javascript:void(0);">
								<i class="fas fa-times"></i>
							</a>
						</div>
						<ul class="main-nav">
							
							<li class="login-link">
								<a href="login.html">Login / Signup</a>
							</li>
						</ul>
					</div>		 
					<ul class="nav header-navbar-rht">
						<!-- User Menu -->
							<a href="login.html">
								<span class="user-img">
									<img class="rounded-circle" src="assets1/img/set.png" width="31" >
								</span>
							</a>
							
						<!-- /User Menu -->
						
					</ul>
				</nav>
			</header>
			<!-- /Header -->
			
			<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<h2 class="breadcrumb-title">Patient Page</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
			
			<div class="content">
				<div class="container-fluid">

					<div class="row">
						<div class="col-md-12 col-lg-4 col-xl-3 theiaStickySidebar">
						
							<div class="profile-sidebar">
								<div class="widget-profile pro-widget-content">
									<div class="profile-info-widget">
										<a href="#" class="booking-doc-img">
											<img src="assets/img/user.png" alt="User Image">
										</a>
										<div class="profile-det-info">
											<h3>Patient</h3>
											
											
										</div>
									</div>
								</div>
								<div class="dashboard-widget">
									<nav class="dashboard-menu">
										<ul>
											<li>
												<a href="index.html">
													<i class="fas fa-columns"></i>
													<span>Home</span>
												</a>
											</li>
											<li>
												<a href="booking.html">
													<i class="fas fa-check"></i>
													<span>Appointment</span>
												</a>
											</li>
											<li>
												<a href="login.html">
													<i class="fas fa-sign-out-alt"></i>
													<span>Logout</span>
												</a>
											</li>
										</ul>
									</nav>
								</div>
							</div>
							
						</div>
						
						<div class="col-md-12 col-lg-8 col-xl-9">

							<!-- Doctor Widget -->
							<div class="card">
								<div class="card-body">
									<div class="doctor-widget">
										<div class="doc-info-left">
											<div class="doctor-img">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "subhi";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name,phone,hospital,address FROM docprofile";
$result = $conn->query($sql);

if (mysqli_query($conn, $sql)) {
	echo "<h3>Doctor's List</h3><br>";
    echo "<table><tr><th>Name</th><th>Phone Number</th><th>Hospital</th><th>Address</th></tr>";
    while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["name"]. "</td><td>" . $row["phone"]. "</td><td> " . $row["hospital"]. "</td><td>" . $row["address"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
           

$conn->close();
?>

												
</div>
</div>
</div>
</div>
<!-- /Doctor Widget -->
							
   
			
		   
		</div>
		<!-- /Main Wrapper -->
	  
		<!-- jQuery -->
		<script src="assets1/js/jquery.min.js"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="assets1/js/popper.min.js"></script>
		<script src="assets1/js/bootstrap.min.js"></script>
		
		<!-- Sticky Sidebar JS -->
        <script src="assets1/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
        <script src="assets1/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>
		
		<!-- Custom JS -->
		<script src="assets1/js/script.js"></script>
		
	</body>

</html>