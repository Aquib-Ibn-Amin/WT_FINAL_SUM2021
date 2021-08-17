<?php 
include 'customer.php';
include 'Controllers\CustomerControler.php';
	$customers = getAllCustomer();

?>

<div class="text-center table-responsive">
	<h3>All Customer</h3>
	<!--<input type="text" class="form-control" onkeyup="searchDeliveryman(this)" placeholder="Search...">
	<div id="suggesstion"></div>-->
	<table class="table table-hover">
		<thead>
          <th>Sl#</th>
          <th>Username</th> 
		  <th>Email</th>
          <th>Password</th>
          <th>Country</th>
          <th>City</th>
		  <th>Phone</th>
          <th>Address</th>
	
		  <th></th>
		  <th></th>
        </thead>
        <tbody>
          <?php
				$i=1;
				foreach($customers as $c){
				$id = $c["id"];
				
				echo "<tr>";
				echo "<td>$i</td>";
				echo "<td>".$c["name"]."</td>";
				echo "<td>".$c["email"]."</td>";
                echo "<td>".$c["password"]."</td>";
                echo "<td>".$c["country"]."</td>";
                echo "<td>".$c["city"]."</td>";
                echo "<td>".$c["contact"]."</td>";
                echo "<td>".$c["user_address"]."</td>";
				//echo '<td><a href="edit_deliveryman.php?id='.$id.'" class="btn btn-info">Edit</a></td>';
				echo '<td><a href="delete_customer.php?id='.$id.'" class="btn btn-danger">Delete</td>';
                // echo' <a href="">Delete</a> </td>';
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
<script src="js/deliveryman.js"></script>