<?php
include'Model\db_config.php';
$name="";
$err_name="";
$uname="";
$err_uname="";
$email="";
$err_email="";
$pass="";
$err_pass="";
$err_db="";
$hasError=false;
if(isset($_POST["sign-up"])){
if(empty($_POST["name"])){
	$hasError=true;	
	$err_name=" Name Required";}
	else if (strlen($_POST["name"]) <=1){
		$hasError = true ;
		$err_name = "name must be greater than 1 character";
	}
	else
	{
		$name=$_POST["name"];
	}
	
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
	
	if(empty($_POST["email"])){
			$hasError=true;
			$err_email="Email Required";
		}
		elseif(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
             $hasError=true;
			$err_email ="invalid email";
    }
       else
		{
			$email = $_POST["email"];
		}
		
		if(empty($_POST["pass"])){
	$hasError=true;	
	$err_pass="password Required";}
	else if (strlen($_POST["pass"]) <=4){
		$hasError = true ;
		$err_pass = "password must be greater than 4 character";
	}
	else
	{
		$pass=$_POST["pass"];
	}
	if(!$hasError){
		$rs=insertUser($name,$uname,$email,$pass,);
		if($rs === true){
			header("Location:login.php");
		}
		$err_db=$rs;
		
	}
	

}
elseif(isset($_POST["btn_login"])){
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
	else if (strlen($_POST["pass"]) <=4){
		$hasError = true ;
		$err_pass = "password must be greater than 4 character";
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

function insertUser($name,$uname,$email,$pass){
	$query="insert into users values (NULL,'$name','$uname','$pass')";
	return execute($query);
}
function authenticateUser($uname,$pass)
{
	$query="select*from users where username='$uname' and password='$pass'";
	$rs=get($query);
	if (count($rs)>0){
	return true;
	}
	return false;
	
}
?>