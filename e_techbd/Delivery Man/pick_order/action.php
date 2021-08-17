<?php

//action.php
include('../controllers/logincontrollers.php');
$email = $_SESSION['useremail'];
date_default_timezone_set('Asia/Dhaka');
$time = date('m/d/Y h:i:s a', time());


$connect = new PDO("mysql:host=localhost;dbname=e_techbd", "root", "");
$conn = mysqli_connect("localhost","root","","e_techbd");

if(isset($_POST["action"]))
{

	if($_POST["action"] == "delete")
	{
		$query = "UPDATE orders SET status='received', received_date='$time',picked='$email' WHERE order_id = '".$_POST["id"]."' ";
		
		$statement = $connect->prepare($query);
		$statement->execute();
		echo '<p>Order Picked</p>';

		$orderid = $_POST["id"];
		echo $orderid;
		$cart = findCart($orderid);
		echo $cart;
		$cusid = findCus($cart);
		echo $cusid;
		$add = findAdd($cusid);
		echo $add;
		updatePickedOrder($add);
	}
}

function findCart($order){
	$query = "select * from orders where order_id ='$order'";;
	global $conn;
	$data=null;
	$result = mysqli_query($conn,$query);
	while($row = mysqli_fetch_array($result)){
		$data = $row['cart_id'];
		return $data;
	}
	return $data;
}

function findCus($cart){
	$query = "select * from cart where cart_id ='$cart'";;
	global $conn;
	$data=null;
	$result = mysqli_query($conn,$query);
	while($row = mysqli_fetch_array($result)){
		$data = $row['customer_id'];
		return $data;
	}
	return $data;
}

function findAdd($cusid){
	$query="select *from customer where id = '$cusid' ";
	global $conn;
	$data=null;
	$result = mysqli_query($conn,$query);
	while($row = mysqli_fetch_array($result)){
		$data = $row['address'];
	}
	return $data;
}

function updatePickedOrder($add){
	global $email;
	$query ="insert into pickedorder (id,deliveryman,order_id,address) VALUES('null','$email', '".$_POST["id"]."','$add') ";
		global $conn;
		if($conn){
			if(mysqli_query($conn,$query)){
				return true;
			}
			else{
				return mysqli_error($conn);
			}
		}
}


?>
