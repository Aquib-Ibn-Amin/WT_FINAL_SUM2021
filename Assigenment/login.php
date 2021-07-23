<?php 
include 'Controllers\UserController.php';
?>


<div align="center" >
<h1> Login </h1>
<h5><?php echo $err_db;?> </h5>
<form  action="" method="post">
<div>
<h4> UserName</h4>
<input name="uname"  value="<?php echo $uname ?>" type="text"  placeholder="Enter User Name" >
	    <br><span style="color:red;"><?php echo $err_uname; ?></span>
</div>
<div>
<h4> Password</h4>

<input name="pass"  value="<?php echo $pass;?>" type="password"><br>
					<span style="color:red;"><?php echo $err_pass;?></span>
</div>
<div>
<input type="submit" name="btn_login" value="Login">
</div>
<div>
<a href="signup.php">Not registerd yet? Sign up</a>
</div>
</form>
</div>