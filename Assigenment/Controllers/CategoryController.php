<?php
include 'Model\db_config.php';
$name="";
$err_name="";
$err_db="";
$hasError=false;

if(isset($_POST["add_category"])){
if(empty($_POST["name"])){
	$hasError=true;	
	$err_name=" Category Name Required";
	}
	else
	{
		$name=$_POST["name"];
	}
	$rs=insertCategory($_POST["name"]);
	if($rs=== true){
		header("Location: all_category.php");
	}
		$err_db=$rs;
	
}
	function insertCategory($name){
		$query="insert into category values(NULL,'$name')";
		return execute($query);
	}
	
	
	
?>