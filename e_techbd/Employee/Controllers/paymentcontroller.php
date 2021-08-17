<?php
include ('logincontrollers.php');
$email = $_SESSION['useremail'];

$orderid=null;
$connect = mysqli_connect("localhost", "root", "", "e_techbd");
$output = '';
   if(isset($_POST["query"]))
   {
      $search = mysqli_real_escape_string($connect, $_POST["query"]);
      //$orderid=$search;
         $query = "
         SELECT * FROM orders 
         WHERE order_id LIKE '%".$search."%'
         ";
   }
   else
   {
      $query = "
      SELECT * FROM orders WHERE picked='$email'
      ";
   }
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>Order ID</th>
     <th>Product ID</th>
     <th>Product Name</th>
     <th>Cart ID</th>
     <th>Status</th>
     <th>Ammount</th>
     <th>Payment</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["order_id"].'</td>
    <td>'.$row["pro_id"].'</td>
    <td>'.$row["pro_name"].'</td>
    <td>'.$row["cart_id"].'</td>
    <td>'.$row["status"].'</td>
    <td>'.$row["ammount"].'</td>
    <td>'.$row["payment"].'</td>

   </tr>
  ';
 }
 echo $output;

   
}
else
{
   
 echo 'Data Not Found!';
}


   


?>