<?php
$orderid=null;

if ($_SERVER["REQUEST_METHOD"]== "POST"){
         
    if(empty($_POST["search_text"])){
        echo "<script>alert('Order Information Required!');window.location='../payment.php';</script>";
    } 
    else{
       $orderid = $_POST["search_text"];
    }
 }



 if($orderid==null){

 }
 else{

    if(checkOrderID($orderid)){
        paymentProcess($orderid);
        echo "<script>alert('Cash Received Successfully');
            window.location='../payment.php';</script>";
        
    }
    else{
        echo "<script>alert('Cash Received Failed!');window.location='../payment.php';</script>";
    }
 }

 function checkOrderID($orderid){
    $query = "select * from orders where order_id ='$orderid'";
    $conn = mysqli_connect("localhost", "root", "", "e_techbd");
    $data = array();
    if($conn){
        $result = mysqli_query($conn,$query);
        while($row = mysqli_fetch_assoc($result)){
            $data[] = $row;
        }
    }
    if(count($data) > 0){
        return true;
    }
    return false;
 }

function paymentProcess($order_id){
 $query = "update orders set payment='Done' where order_id='$order_id'";
 $conn = mysqli_connect("localhost", "root", "", "e_techbd");
      if($conn){
          if(mysqli_query($conn,$query)){
            
          }
          else{
            
          }
      }
}
?>