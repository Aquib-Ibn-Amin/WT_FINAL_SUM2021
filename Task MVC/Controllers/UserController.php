<?php 
    include 'Model/db_config.php';
    $uname = "";
	$err_uname="";
    $pass  = "";
	$err_pass="";
	$err_db="";
	$hasError = false;

    if(isset($_POST["btn_login"]))
	{
	if(empty($_POST["uname"])){
	$hasError=true;	
	$err_uname="User Name Required";}
	else if (strlen($_POST["uname"]) <=1){
		$hasError = true ;
		$err_uname = "name must be greater than 1 character";
	}
	else
	{
		$uname=$_POST["uname"];
	}
	
	if(empty($_POST["pass"])){
	$hasError=true;	
	$err_pass="password Required";}
	else if (strlen($_POST["pass"]) <=2){
		$hasError = true ;
		$err_pass = "password must be greater than 2 character";
	}
	else
	{
		$pass=$_POST["pass"];
	}
	if(!$hasError){
		if(authenticateUser($uname,$pass)){
		header("Location:dashboard.php");
		
		}
		$err_db="Username and password invalid";
	}
    } 
	function authenticateUser($uname,$pass)
	{
		$query ="select * from admin where uname='$uname' and password='$pass'";
		$rs = get($query);
		if(count($rs)>0)
		{
			return true;
		}
		return false;
	}
?>