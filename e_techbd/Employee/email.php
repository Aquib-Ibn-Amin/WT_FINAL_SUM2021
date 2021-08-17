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
			<h1>Login As <?php echo $_SESSION["loggeduser"]?></h1>
		</div>

		<div class="text-center">
			
			<a href="employee.php" class="btn btn-warning">DashBoard</a> &nbsp &nbsp
			<a href="send_email.php" class="btn btn-primary">Send Email</a> &nbsp &nbsp
			
		</div>
<html>