<?php
	include 'Controllers/EmployeeController.php';
	$uname = $_GET["username"];
	$user = checkUsername($uname);
	if($user){
		echo "invalid";
	}
	else echo "valid";
?>