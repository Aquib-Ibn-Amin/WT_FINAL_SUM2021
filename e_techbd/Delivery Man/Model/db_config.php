<?php
	$db_server="localhost";
	$db_uname="root";
	$db_pass="";
	$db_name="e_techbd";

	
	
	function execute($query){   //responsible for running insert,update,delete
		global $db_server,$db_uname,$db_pass,$db_name;
		$conn = mysqli_connect($db_server,$db_uname,$db_pass,$db_name);
		if($conn){
			if(mysqli_query($conn,$query)){
				return true;
			}
			else{
				return mysqli_error($conn);
			}
		}
	}
	
	function get($query){ //responsible for running select queires
		global $db_server,$db_uname,$db_pass,$db_name;
		$conn = mysqli_connect($db_server,$db_uname,$db_pass,$db_name);
		$data = array();
		if($conn){
			$result = mysqli_query($conn,$query);
			while($row = mysqli_fetch_assoc($result)){
				$data[] = $row;
			}
		}
		return $data;
	}

	function RetriveData($query){ //responsible for running select queires
		$data=null;
		global $db_server,$db_uname,$db_pass,$db_name;
		$conn = mysqli_connect($db_server,$db_uname,$db_pass,$db_name);
		$result = mysqli_query($conn,$query);
		while($row = mysqli_fetch_array($result)){
			$data = $row['status'];
		}
		return $data;
	}

	function RetriveCart($query){ //responsible for running select queires
		$data=null;
		global $db_server,$db_uname,$db_pass,$db_name;
		$conn = mysqli_connect($db_server,$db_uname,$db_pass,$db_name);
		$result = mysqli_query($conn,$query);
		while($row = mysqli_fetch_array($result)){
			$pr_id = $row['product_id'];
			$pr_title = $row['product_title'];
			$ut_price= $row['unit_price'];
			$t_price= $row['total_price'];

			$data="<table width='40%' align='center'>
			<caption><h1>Customer Ordered Details</h1></caption>
			<thead>
                        <tr>
                            <th>Product ID</th>
                            <th>Product Name </th>
                            <th>Unit Price </th>
                            <th>Total Price</th>
                        </tr>
                    </thead>
			<td>$pr_id</td>
			<td>$pr_title</td>
			<td>$ut_price</td>
			<td>$t_price</td>
			</table>";
		}
		return $data;
	}

	function RetriveCart1($query){ //responsible for running select queires
		$data=null;
		global $db_server,$db_uname,$db_pass,$db_name;
		$conn = mysqli_connect($db_server,$db_uname,$db_pass,$db_name);
		$result = mysqli_query($conn,$query);
		while($row = mysqli_fetch_array($result)){
			$data = $row['cart_id'];
		}
		return $data;
	}

	function RetriveCart4($query){ //responsible for running select queires
		$data=null;
		global $db_server,$db_uname,$db_pass,$db_name;
		$conn = mysqli_connect($db_server,$db_uname,$db_pass,$db_name);
		$result = mysqli_query($conn,$query);
		while($row = mysqli_fetch_array($result)){
			$data = $row['customer_id'];
		}
		return $data;
	}

	function RetriveCart2($query){ //responsible for running select queires
		$data=null;
		global $db_server,$db_uname,$db_pass,$db_name;
		$conn = mysqli_connect($db_server,$db_uname,$db_pass,$db_name);
		$result = mysqli_query($conn,$query);
		while($row = mysqli_fetch_array($result)){
			$data = $row['total_price'];
		}
		return $data;
	}


	function RetriveReport($query){ //responsible for running select queires
		$data=null;
		global $db_server,$db_uname,$db_pass,$db_name;
		$conn = mysqli_connect($db_server,$db_uname,$db_pass,$db_name);
		$result = mysqli_query($conn,$query);
		while($row = mysqli_fetch_array($result)){
			$rc = $row['received_date'];
			$og = $row['ongoing_date'];
			$dd = $row['delivered_date'];
			$data = "<table wdith='40%'align='center'>
			<caption><h2>Delivery Report:</h2></caption>
			<tr><td><h4>Order Received: </h4></td><td><h4>$rc</h4></td></tr>
			<tr><td><h4>Order On Going: </h4></td><td><h4>$og</h4></td></tr>
			<tr><td><h4>Order Delivered: </h4></td><td><h4>$dd</h4></td></tr>
			</table>";
		}
		return $data;
	}


?>