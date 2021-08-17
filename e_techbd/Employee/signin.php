<head>
	 <link rel="stylesheet" href="Style/styles.css">
</head>

<?php 
include 'Controllers/EmployeeController.php';
?>
<script>
var hasError=false;
		function get(id){
			return document.getElementById(id);
		}
		function validate(){
			refresh();
			if(get("uname").value==""){
				hasError = true;
				get("err_uname").innerHTML = "*User-name must required";
			}
			else if(get("uname").value.length <5){
				hasError = true;
				get("err_uname").innerHTML = "*User-name must greater than 4 characters";
			}
			if(get("pass").value == ""){
				hasError = true;
				get("err_pass").innerHTML = "*Pass-word must required";
			}
			else if(get("pass").value.length < 5){
				hasError = true;
				get("err_pass").innerHTML = "*Pass-word must 4 characters";
			}
			
			return !hasError;
		}
		function refresh(){
			hasError = false;
			get("err_uname").innerHTML ="";
			get("err_pass").innerHTML ="";
			
		}
</script>

<div class="text-center center" >
<h1> Login </h1>
<h5><?php echo $err_db;?> </h5>
<form  action="" onsubmit="return validate()" method="post">
<div  class="form-group">
	<h4> UserName</h4>
	<input id="uname" name="username"  value="<?php echo $uname?>" type="text"  placeholder="Enter User Name" >
	 <br><span id="err_uname" style="color:red;"><?php echo $err_uname; ?></span>

	<h4> Password</h4>
	<input id="pass" name="password"  value="<?php echo $pass;?>" type="password" placeholder="Enter password"><br>
	<span id="err_pass" style="color:red;"><?php echo $err_pass;?></span>
</div>
<div>
<input  class="btn btn-info" type="submit" name="btn_login" value="Login">
</div>
<br>
<div>
<a href="signup.php">Not registerd yet? Sign up</a>
</div>
</form>
</div>