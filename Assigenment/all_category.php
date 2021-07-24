<?php 
include 'admin_header.php';
include 'Controllers\CategoryController.php';
	$categories = getAllCategories();
	
?>


<div align="center">
	<h3>All Categories</h3>
	<table>
		<thead>
			<th>Sl#</th>
			<th> Name</th>
			<th>Product Count </th>
			<th></th>
			<th></th>
			
		</thead>
		<tbody>
			<?php
				$i=1;
				foreach($categories as $c){
					$id = $c["id"];
					echo "<tr>";
						echo "<td>$i</td>";
						echo "<td>".$c["Name"]."</td>";
						echo '<td><a href="edit_category.php?id='.$id.'">Edit</a></td>';
						echo '<td><a class="btn btn-danger">Delete</td>';
					echo "</tr>";
					$i++;
				}
			?>
			
		</tbody>
	</table>
</div>