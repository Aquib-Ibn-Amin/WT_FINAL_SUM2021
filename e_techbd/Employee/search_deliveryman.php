<?php
	include 'Controllers/DeliverymanController.php';
	$key = $_GET["key"];
	$deliveryman = searchDeliveryman($key);
	if(count($deliveryman) > 0){
		foreach($deliveryman as $p){
			echo "<a href='edit_deliveryman.php?id=".$p["id"]."'>".$p["username"]."</a><br>";
			//echo "<a href='edit_product.php?id=".$p["id"]."'>".$p["name"]."</a><br>";
		}
	}
?>