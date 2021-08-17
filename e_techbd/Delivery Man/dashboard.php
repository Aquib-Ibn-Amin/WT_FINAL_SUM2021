<?php include 'delivery_header.php';
	$email = $_SESSION['useremail'];

	
	$con = mysqli_connect("localhost", "root", "", "e_techbd"); 

	$query = "SELECT *FROM orders where status='deliverd' and picked='$email' "; 
	$total_delivered = readInformation($query);

	$query1 = "SELECT *FROM orders where status='' or status ='ongoing' or status='received' and picked='$email' "; 
	$total_pending = readInformation($query1);

	function readInformation($query){
		global $con;
		$result = mysqli_query($con, $query);
		if ($result) { 
			$data = mysqli_num_rows($result); 
			return $data;
		}
		return $data;
	}

	



?>
<html>
	<head>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="Style/styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	
	</head>
	<body>
			<!--dashboard starts -->
			<div class="main">
				<table  align="center">
					<tr>
						<td>
						<div class="card">
								<span class="text-white"> Total Delivery <br>
									<?php echo $total_delivered;?>
								</span>
						</div>
							
						</td>
						<td>
							<div class="card">
								<span class="text-white"> Pending Delivery <br>
									<?php echo $total_pending;?>
								</span>
							</div>
						</td>
					</tr>
				</table>
			</div>
			
			<div class="center">
				<h3 class="text">Recent Delivery</h3>
				<table class="table table-bordered">
					<thead>
						<tr>
						<th scope="col">Serial No</th>
						<th scope="col">Order ID</th>
						<th scope="col">Product ID</th>
						<th scope="col">Product Name</th>
						<th scope="col">Ammount</th>
						<th scope="col">Delivery Date</th>
						</tr>
					</thead>
					<tbody>
						<?php 
								$query2 = "SELECT *FROM orders where status='deliverd' "; 
								global $con;
								$count=0;
								$result = $con-> query($query2);
								if($result-> num_rows >0){
									while($row = $result-> fetch_assoc()){
										$count= $count +1;
										$order_id = $row['order_id'];
										$pro_id = $row['pro_id'];
										$pro_name = $row['pro_name'];
										$amt = $row['ammount'];
										$dd = $row['delivered_date'];

										echo "<tr>
										<td>$count</td>
										<td>$order_id</td>
										<td>$pro_id</td>
										<td>$pro_name</td>
										<td>$amt</td>
										<td>$dd</td>
										</tr>
										";
									}
													
								}
							
						?>
					</tbody>
				</table>
			</div>
			<!--dashboard ends -->

			<?php include 'delivery_footer.php';?>

	</body>
</html>
