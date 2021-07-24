<?php
include 'Model\db_config.php';
$name="";
$err_name="";
$err_db="";
$hasError=false;

if(isset($_POST["add_category"])){
if(empty($_POST["name"])){
	$hasError=true;	
	$err_name="Name Required";}
	else
	{
		$name=$_POST["name"];
	}
	if(!$hasError){
	$rs=insertCategory($_POST["name"]);
	if($rs=== true){
		header("Location: all_category.php");
	}
		$err_db=$rs;
	
}
}   
    else if (isset($_POST["edit_category"])){
		//do validations
		//if no error
		$rs = updateCategory($_POST["name"],$_POST["id"]);
		if($rs === true){
			header("Location: all_category.php");
		}
		$err_db = $rs;
	}
	
	function insertCategory($name){
		$query="insert into category values(NULL,'$name')";
		return execute($query);
	}
	
	function getAllCategories(){
		$query="select * from category";
		$rs=get ($query);
		return $rs;
	}
	function getCategory($id){
	$query="select * from category where id= $id";
	$rs=get($query);
	return $rs[0];
	}
	function updateCategory($name,$id)
	{
		$query="update category set Name='$name' where id=$id";
		return execute($query);
	}
	
	
?>