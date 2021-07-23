<?php
//session_start();
if(!isset($_COOKIE["loggeduser"])){
	header ("Location: index.php");
}
?>

<html>
<body>
<h1 align="center" >Welcome <?php echo $_COOKIE  ["loggeduser"];?></h1>
<a href=""> Product</a> &nbsp
<a href="">All Product</a>&nbsp
<a href="">All categoreis</a>
<br>
<form align="center" ction=" " method="post">
id:<input type=text" name="id" value="" > <br>
Name:<input type=text" name="id" value="" > <br>
Quantity:<input type=text" name="id" value="" > <br>
Price:<input type=text" name="id" value="" > <br>
Decpriction:<input type=text" name="id" value="" > <br>
<input type="submit" value="ADD" >
</form>
</body>
</html>   