<?php
 include 'model/db_config.php';
    $order_id="";
    $err_oder="";
    $checkbox="";
    $err_checkbox="";
    $incorrect="";
    $hasError = false;
    $status=null;
    $err_status=null;
    $update_status=null;
    $p_st=null;

    date_default_timezone_set('Asia/Dhaka');
    $time = date('m/d/Y h:i:s a', time());


    if ($_SERVER["REQUEST_METHOD"]== "POST"){
        
        if(empty($_POST["oderid"])){
                $hasError=true;
                $err_oder="Order ID Required !";
        } 
        else{
            $order_id = $_POST["oderid"];
        }
        if (isset($_REQUEST['check'])) {
            $status = $_REQUEST['check'];
        }
        if($status==null){
            $hasError = true;
            $err_status ="Please select operation!";
        }
        
        if(!$hasError){
            if(!checkOrderID($order_id)){
                $err_oder = "Invalid order ID!";
                
            }
            else{
                checkStatus($order_id,$status,$time);
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


    function checkStatus($orderid,$status,$time){
        $query = "select * from orders where order_id=$orderid";
        $result = RetriveData($query);
        
        if($result == null && $status == "received"){
            updateOrderStatus($orderid,$status,$time);
            $p_st = "Updated!";
        }
        elseif($result ==null && $status== "ongoing" || $status=="deliverd"){
            global $p_st;
            $p_st = "Follow the Order Process!";
        }
        elseif($result == "received" && $status == "ongoing"){
            updateOrderStatus($orderid,$status,$time);
            $p_st = "Updated!";
        }
        elseif($result=="received" && $status=="deliverd"){
            global $p_st;
            $p_st = "Follow the Order Process!";
        }
        elseif($result=="received" && $status =="received"){
            global $p_st;
            $p_st = "Already status received!";
        }

        if($result == null && $status == "ongoing"){
            global $p_st;
            $p_st = "Follow the Order Process!";
        }
        elseif($result == "ongoing" && $status == "ongoing"){
            global $p_st;
            $p_st = "Already status ongoing!";
        }
        elseif($result == "ongoing" && $status == "received"){
            global $p_st;
            $p_st = "Follow the Order Process!";
        }
        elseif($result == "ongoing" && $status == "deliverd"){
            updateOrderStatus($orderid,$status,$time);
            global $p_st;
            $p_st = "Updated!";
        }

        if($result == "deliverd"){
            global $p_st; 
            $p_st = "Already delivered!";
        }
        
        

    }

    function updateOrderStatus($orderid,$st,$t){
        
        $query = null;
        if($st == "received" ){
            $query = "UPDATE orders SET status='$st', received_date ='$t' WHERE order_id=$orderid";
        }
        elseif($st == "ongoing"){
            $query = "UPDATE orders SET status='$st', ongoing_date ='$t' WHERE order_id=$orderid";
        }
        else{
            $query = "UPDATE orders SET status='$st', delivered_date ='$t' WHERE order_id=$orderid";
        }
        
		$rs = execute($query);
		if($rs == true){
            $err_status ="Updated!";
		}
        else{
            $err_status ="Failed!";
        }

	}

    
    

?>
