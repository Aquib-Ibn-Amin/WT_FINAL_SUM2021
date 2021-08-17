<?php
	/*session_start();
	if(!isset($_SESSION["loggeduser"])){
		header("Location:employeeStart.php");
	}*/
	if(!isset($_COOKIE["loggeduser"])){
		header("Location:employeeStart.php");
	}
?> 
<html>
<head>
	 <link rel="stylesheet" href="Style/styles.css">
</head>
<body style="background-color:#e9e9e9;" >

<div>
<a  href="order.php" class="btn btn-default"> Ordered </a> &nbsp &nbsp 
<a  href="sales.php" class="btn btn-default"> Sales</a>&nbsp &nbsp
<a  href="deliveryman.php" class="btn btn-default"> Delivery Man</a>&nbsp &nbsp
<a  href="category.php" class="btn btn-default">Category</a>&nbsp &nbsp
<a  href="product.php" class="btn btn-default"> Product</a>&nbsp &nbsp
<a  href="customer.php" class="btn btn-default"> Customer</a>&nbsp &nbsp
<a  href="all_email.php" class="btn btn-default"> Send Email</a>&nbsp &nbsp
<a  href="employeeStart.php" class="btn btn-danger">LOG OUT</a>

<h1 align="center" style="color:red">Login as <?php echo $_COOKIE["loggeduser"]?> </h1>
<!--<h1 align="center" style="color:red">Signin as Employee </h1> -->
</div>

<img src="i.png" width="100%">

</body>
</html>