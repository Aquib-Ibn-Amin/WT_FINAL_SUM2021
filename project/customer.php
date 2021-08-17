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
			<a href="all_customer.php" class="btn btn-primary">All Customer</a> &nbsp &nbsp
			<!--<a href="add_products.php" class="btn btn-success">Add Product</a> &nbsp &nbsp	-->
		</div>
<html>
<html>