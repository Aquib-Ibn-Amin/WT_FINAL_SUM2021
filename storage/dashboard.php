<?php
//session_start();
if(!isset($_COOKIE["loggeduser"])){
	header ("Location: index.php");
}
?>

<html>
<body>
<h1 align="center" >Welcome <?php echo $_COOKIE["loggeduser"];?></h1>
<a href="product.php">Add Product</a> &nbsp
<a href="">All Users</a>&nbsp
<a href="">All categoreis</a>
</body>
</html>   