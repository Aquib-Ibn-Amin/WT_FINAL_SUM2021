<?php 
include 'employee_header.php';
include 'Controllers\DeliverymanController.php';
	$deliveryman = getAllDeliveryman();

?>

<div class="text-center table-responsive">
	<h3>All Delivery Man</h3>
	<input type="text" class="form-control" onkeyup="searchDeliveryman(this)" placeholder="Search...">
	<div id="suggesstion"></div>
	<table class="table table-hover">
		<thead>
          <th>Sl#</th>
          <th>First name</th>
          <th>Last name</th>
          <th>Username</th>
          <th>Password</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Joining Date</th>
          <th>Gender </th>
          <th>Role</th>
          <th>Salary</th>
          <th>Address</th>
		  <th>Image</th>
		  <th></th>
		  <th></th>
        </thead>
        <tbody>
          <?php
				$i=1;
				foreach($deliveryman as $c){
				$id = $c["id"];
				list($year,$month,$day) = (explode("-",$c["joining_date"]));
				$joining_date = $day.'-'.$month.'-'.$year;
				echo "<tr>";
				echo "<td>$i</td>";
				echo "<td>".$c["f_name"]."</td>";
				echo "<td>".$c["l_name"]."</td>";
				echo "<td>".$c["username"]."</td>";
                echo "<td>".$c["password"]."</td>";
                echo "<td>".$c["email"]."</td>";
                echo "<td>".$c["phone"]."</td>";
                echo "<td>".$joining_date."</td>";
                echo "<td>".$c["gender"]."</td>";
                echo "<td>".$c["role"]."</td>";
                echo "<td>".$c["salary"]."</td>";
                echo "<td>".$c["address"]."</td>";
				echo "<td><img class='img-responsive' width='80px' height='100px' src='".$c["image"]."'></td>";
				echo '<td><a href="edit_deliveryman.php?id='.$id.'" class="btn btn-info">Edit</a></td>';
				echo '<td><a href="delete_deliveryman.php?id='.$id.'" class="btn btn-danger">Delete</td>';
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