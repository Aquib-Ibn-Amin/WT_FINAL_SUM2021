<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "e_techbd");
$output = '';
   if(isset($_POST["query"]))
   {
      $search = mysqli_real_escape_string($connect, $_POST["query"]);
      if($search=="active"){
         $query = "
         SELECT * FROM orders where status='' or status='ongoing' or status='received'
         ";
      }
      elseif($search=="ongoing"){
         $query = "
         SELECT * FROM orders where status='ongoing'
         ";
      }
      elseif($search=="received"){
         $query = "
         SELECT * FROM orders where status='received'
         ";
      }
      elseif($search=="deliverd"){
         $query = "
         SELECT * FROM orders where status='deliverd'
         ";
      }
      else{
         $query = "
         SELECT * FROM orders 
         WHERE pro_name LIKE '%".$search."%' or pro_id LIKE '%".$search."%' or order_id LIKE '%".$search."%'
         ";
      }
   }
   else
   {
      $query = "
      SELECT * FROM orders ORDER BY order_id
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

      </tr>
   ';
   }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>