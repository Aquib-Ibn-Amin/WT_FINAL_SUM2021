<?php 
	include 'product.php';
	require_once 'Controllers/ProductController.php';
	$products=getAllProducts();
?>
<!--All Products starts -->

<div class="text-center table-responsive">
	<h3>All Products</h3>
	<input type="text" class="form-control" onkeyup="searchProduct(this)" placeholder="Search...">
	<div id="suggesstion"></div>
	
      
      <table class="table table-hover">
        <thead>
          <th>Sl#</th>
		  <th>Picture</th>
          <th>Product name</th>
          <th>Price</th>
          <th>Category</th>
          <th>Quantity</th>
          <th>description</th>
          <th>Store date</th>
          <th></th>
          <th></th>

        </thead>
        <tbody>
          <?php
				$i=1;
				foreach ($products as $p) {
				echo "<tr>";
				list($year,$month,$day) =(explode("-",$p["store_date"]));
				$store_date= $day.'-'.$month.'-'.$year;
				echo "<td>$i</td>";
				echo "<td><img class='img-responsive' width='80px' height='100px' src='".$p["image"]."'></td>";
				echo "<td>".$p["name"]."</td>";
                echo "<td>".$p["price"]."</td>";
                echo "<td>".$p["c_name"]."</td>";
                echo "<td>".$p["quantity"]."</td>";
                echo "<td>".$p["description"]."</td>";
                echo "<td>".$store_date."</td>";
                echo'<td> <a href="edit_product.php?id='.$p["id"].'" class="btn btn-info">Edit</a></td>';
                echo'<td> <a href="delete_product.php?id='.$p["id"].'" class="btn btn-danger">Delete</a></td>';
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
