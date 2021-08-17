<?php
    include ('model/db_config.php');
    $order_id="";
    $err_oder="";
    $hasError = false;
    $result=null;

    if ($_SERVER["REQUEST_METHOD"]== "POST"){
        
        if(empty($_POST["oderid"])){
                $hasError=true;
                $err_oder="Order ID Required !";
        } 
        else{
            $order_id = $_POST["oderid"];
        }

        if(!$hasError){
            if(!checkOrderID($order_id)){
                $err_oder = "Invalid order ID!";
            }
            else{
                checkStatus($order_id);
            }
        }
    }

    function checkOrderID($orderid){
		$query = "select * from orders where order_id ='$orderid'";
		$rs = get($query);
		if(count($rs) > 0){
			return true;
		}
		return false;
	}

    function checkStatus($orderid){
        $query = "select * from orders where order_id = $orderid";
        global $result;
        $result = RetriveData($query);
    }

?>

