<?php 
	include 'order.php';
	 require_once 'Controllers/OrderController.php';
	$order=getAllOrder();
?>
<!--All Products starts -->

<div class="text-center table-responsive">
	<h3>All Orders</h3>
	<!--<input type="text" class="form-control" onkeyup="searchProduct(this)" placeholder="Search...">
	<div id="suggesstion"></div>-->
	
      
      <table class="table table-hover">
        <thead>
          <th>Sl#</th>
          <th>Product name</th>
		  <th>Quantity</th>
          <th>Price</th>
          <th>Address</th>
          <th>Phone</th>
          <th>Status</th>
          <th></th>
          <th></th>

        </thead>
        <tbody>
          <?php
				$i=1;
				foreach ($order as $p) {
				echo "<tr>";
				echo "<td>$i</td>";
				echo "<td>".$p["pro_name"]."</td>";
				echo "<td>".$p["quantity"]."</td>";
                echo "<td>".$p["price"]."</td>";
                echo "<td>".$p["address"]."</td>";
                echo "<td>".$p["phone"]."</td>";
                echo "<td>".$p["status"]."</td>";
                //echo "<td>".$store_date."</td>";
                echo'<td> <a href="confrim_order.php?id='.$p["id"].'" class="btn btn-info">Confrim</a></td>';
                echo'<td> <a href="delete_order.php?id='.$p["id"].'" class="btn btn-danger">Delete</a></td>';
				echo "</tr>";
			$i++;
            }
            // echo "<pre>";
            // print_r($students);
            // echo "</pre>";
            // echo $dept_id;
           ?>

        </tbody>
      </table>
</div>
<script src="js/products.js"></script>
<!--Products ends -->
