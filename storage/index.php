<?php
//session_start();
$uname="";
$err_uname="";
$pass="";
$err_pass="";
$hasError=false;
$users=array("tanvir"=>"123","sabbir"=>"456","karim"=>"789");

if ($_SERVER["REQUEST_METHOD"]=="POST"){
	
	if (empty($_POST["uname"])){
		$hasError=true;
		$err_uname="name required";
	}
	else{
	$uname=$_POST["uname"];
	}
	
	if (empty($_POST["pass"])){
		$hasError=true;
		$err_pass="password required";
	}
	else{
	$pass=$_POST["pass"];
	}
if(!$hasError){
foreach($users as $u=>$p){
	if($uname==$u && $pass==$p){
		//$_SESSION["loggeduser"]=$uname;
		setcookie("loggeduser",$uname,time()+60);
		header("Location: dashboard.php");
	
	}
}
echo"invalid username";	
}

}
?>

<html>
<body>

<form  action="" method="post">
<table  align="center">
<tr>
		<td colspan="2" align="center"> <b><i>Sign In Form</i> </b></td><br>
		</tr>
<tr>
<td style="color:blue;"> User name </td>
<td> <input type="text" name="uname" value="<?php echo $uname;?>"><br>
<span style="color:red;"><?php echo $err_uname;?> </span></td>
				</tr>

</tr>
<tr>
<td style="color:blue;"> Password </td>
<td><input name="pass" value="<?php echo $pass;?>" type="text"><br>
<span style="color:red;"><?php echo $err_pass;?> </span></td>

</tr>
<tr>
		
		<td  colspan="2" align="center">
		  <button >Sign In</button>
		</td>
		</tr>
		


</table>


</form>
</body>
</html>
