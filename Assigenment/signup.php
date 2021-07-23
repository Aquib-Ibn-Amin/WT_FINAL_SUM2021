<?php
include 'Controllers\UserController.php';


?>
<div  align="center">
<h1 > Sign up </h1> 
<form action=" " method="post">
<div>
<h4> Name</h4>
<h5><?php echo $err_db;?></h5>
<input name="name"  value="<?php echo $name ?>" type="text"  placeholder="Enter  Name" >
	    <br><span style="color:red;"><?php echo $err_name; ?></span>
</div>
<div>
<h4> Username</h4>
<input name="uname"  value="<?php echo $uname ?>" type="text"  placeholder="Enter User Name" >
	    <br><span style="color:red;"><?php echo $err_uname; ?></span>
</div>

<div>
<h4>Email</h4>
<input name="email" value="<?php echo $email;?>" type="text" ><br>
			<span style="color:red;"><?php echo $err_email;?> </span>
</div>
<div>
<h4>Password</h4>
<input name="pass"  value="<?php echo $pass;?>" type="password"><br>
					<span style="color:red;"><?php echo $err_pass;?></span>
</div>
<div>
<input type="submit" name="sign-up" value="Sign Up">
</div>
</form>
</div>

