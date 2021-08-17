<?php
	include('controllers/logincontrollers.php');
	$email = $_SESSION['useremail'];
	$pass = $pass = $_SESSION['userpass'];

	$con = mysqli_connect("localhost", "root", "", "e_techbd"); 
	$query = "SELECT *FROM deliveryman where email='$email' and password='$pass' "; 
	$name = userInformation($query);

	function userInformation($query){
		global $con;
		$data=null;
		$result = mysqli_query($con,$query);
		while($row = mysqli_fetch_array($result)){
			$fir = $row['first_name'] ;
			$second = $row['last_name'] ;
			$data = $fir." ".$second;
		}
		return $data;
	}
	 //to ensure you are using same session

?>
<html>

	<head>
	 <link rel="stylesheet" href="Style/styles.css">
	</head>
	<body>

		<div style="height: 10%;background-color: #2F2FA2;">
				<h5 style="padding: 10px 30px; color:white; float: left ">Profile Name: &emsp;<b><?php echo $name; ?></b></h5>
				<form action="controllers/logout.php" method="post">
				<input style="margin: 20px 10px 3px; color: black; float: right" type="submit" value="Logout"> 
				</form>
		</div>

		<div class="header">
			<a href="pick_order/pick_order.php" class="btn btn-warning">Pick Order</a>
			<a href="Payment.php" class="btn btn-success">Payment</a> 
			<a href="deliveryaddress.php" class="btn btn-success">Customar Contactt</a> 	
			<a href="search.php" class="btn btn-success"> Search</a> 
			<a href="oder_status.php" class="btn btn-success">Oder Status</a> 
			<a href="deliveryreports.php" class="btn btn-success">Delivery Report</a>
			<a href="report_customer.php" class="btn btn-success">Report Customer</a> 

		</div>
    </body>

</html>