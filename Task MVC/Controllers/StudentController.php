 
<?php
    require_once 'Model/db_config.php';
	$name="";
	$err_name="";
	$dob="";
	$err_dob="";
	$credit="";
	$err_credit="";
	$cgpa="";
	$err_cgpa="";
	$dept_id="";
	$err_dept_id="";
	
	$hasError=false;
	$err_db="";
	if(isset($_POST["AddStudent"]))
	{
		if(empty($_POST["name"]))
		{
			$hasError = true;
			$err_name="Name Required";
		}
		else
		{
			$name =$_POST["name"];
		}
		if(empty($_POST["dob"])){
			$hasError = true;
			$err_dob="Date of birth Required";
		}
		
		else{
			$dob =$_POST["dob"];
	
		}
		if(empty($_POST["credit"])){
			$hasError = true;
			$err_credit="Credit Required";
		}
		
		else{
			$credit =$_POST["credit"];
	
		}
		if(empty($_POST["cgpa"])){
			$hasError = true;
			$err_cgpa="Cgpa Required";
		}
		
		else{
			$cgpa =$_POST["cgpa"];
	
		}
		if(empty($_POST["dept_id"])){
			$hasError = true;
			$err_dept_id="Department Required";
		}
		
		else{
			$dept_id =$_POST["dept_id"];
	
		}
		
	
		if(!$hasError)
		{
		
			$rs = insertStudent($name,$dob,$credit,$cgpa,$dept_id);
			if ($rs === true)
			{
				header("Location: AllStudent.php");
			}
			$err_db = $rs;
		}
	}
		
	
	
	
	function insertStudent($name,$dob,$credit,$cgpa,$dept_id){
		$query = "insert into student values ('$name','NULL','$dob',$credit,'$cgpa',$dept_id)";
		return execute($query);
	}
	
?>
