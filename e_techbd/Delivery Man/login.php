<?php 
	include 'controllers/logincontrollers.php';
?>
<html>
<body>

<form  action="" method="post">
<table style="background-color:pink; border:5px red solid;" align="center">
	<tr>
		<td colspan="2" align="center"> <b><i>Log In Form</i> </b></td><br>
	</tr>
	<tr>
	<td style="color:blue;"> Email </td>
	<td><input name="email" value="<?php echo $email;?>" type="text" ><br>
	<span style="color:red;"><?php echo $err_email;?> </span></td>
	</tr>
	<tr>
		<td style="color:blue;"> Password </td>
		<td><input name="pass" value="<?php echo $pass;?>" type="text"><br>
		<span style="color:red;"><?php echo $err_pass;?> </span></td>
	</tr>
	<tr>
		<td colspan="2" align="center">
			<span style="color:red;"><?php if($incorrect != ""){echo $incorrect;}?> </span></td>
		</td>
	</tr>

	<tr>	
		<td  colspan="2" align="center">
			<button >Log In</button>
		</td>
	</tr>		
	<tr>
		<td colspan="2" align="center" style="color:green"><input type="checkbox"> Forget Password </td>
	</tr>
</table>


</form>
</body>
</html>
