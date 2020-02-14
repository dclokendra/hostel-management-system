<?php
	session_start();
	if(!isset($_SESSION['admin_username'])){
		header('location:../login.php?msg=1');
	}
	require_once"../object.php";
	require_once"class/room.class.php";
	require_once"class/bed.class.php";
	require_once"class/student.class.php";
	require_once"class/admin.class.php";
	require_once"class/student_room.class.php";
	require_once"class/contact.class.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/dashboard.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
</head>
<body>
	<div class="mainwrapper">
		<div class="header">
			<h1>Hostel Management System</h1>
		</div>
		<div class="menu">
			<ul>
				<li><a href="../home.php">Home</a></li>
				<li><a href="../about.php">About Us</a></li>
				<li><a href="dashboard.php">Dashboard</a></li>
				<li><a>Admin</a>
					<ul>
						<li><a href="roomadd.php">Add Room</a></li>
						<li><a href="registration.php">Add Student</a></li>
					</ul>  
				</li>
				<li><a>Reports</a>
					<ul>
						<li><a href="roomreports.php">Room Report</a></li>
						<li><a href="studentreports.php">Student Report</a></li>
					</ul>
				</li>
				<li><a href="myaccount.php">My Account</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>  
		</div>
	</div>
	<div class="content">
	  	<div class="leftbar">
			<div class="sidemenu">
				<ol>
					<li><a href="dashboard.php">Room</a>
						<ol>
							<li><a href="roomadd.php">Add Room</a></li>
							<li><a href="roomreports.php">List Room</a></li>
						</ol>
					</li>
					<li><a href="dashboard.php">Student</a>
						<ol>
							<li><a href="registration.php">Add Student</a></li>
							<li><a href="studentreports.php">List Student</a></li>
						</ol>	
					</li>
					<li><a href="dashboard.php">Bed</a>
						<ol>
							<li><a href="bedlists.php">List Bed</a></li>
						</ol>
					</li>
					<li><a href="dashboard.php">Users</a>
						<ol>
							<li><a href="create_user.php">Create User</a></li>
							<li><a href="list_user.php">List User</a></li>
						</ol>
					</li>
					<li><a href="myaccount.php">My Account</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ol>
			</div>		
		</div>
		 