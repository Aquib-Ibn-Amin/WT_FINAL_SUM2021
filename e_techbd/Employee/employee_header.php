<?php
	session_start();
	if(!isset($_SESSION["loggeduser"])){
		header("Location:employeeStart.php");
	}
?>
<html>

	<head>
	 <link rel="stylesheet" href="Style/styles.css">
	</head>
	<body>
		<div class="text-center">
			<h1>Login As <?php echo $_SESSION["loggeduser"]?> </h1>
		</div>

		<div class="text-center">
			
			<a href="employee.php" class="btn btn-warning">DashBoard</a> &nbsp &nbsp
			<a href="all_deliveryman.php" class="btn btn-primary">All Delivery Man</a> &nbsp &nbsp
			<a href="add_deliveryman.php" class="btn btn-success">Add Delivery Man</a> &nbsp &nbsp	
		</div>
