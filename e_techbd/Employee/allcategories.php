<?php
require_once 'Controllers/CategoryController.php';
include 'category.php';
$categories = getAllCategories();
 ?>
<html>

  </head>
  <body>
  <div class="text-center center">
    <h3>All Categories</h3>
    <table class="table table-responsive">
      <thead>
        <th>Sl#</th>&nbsp &nbsp
        <th>Name</th>&nbsp &nbsp
        <th></th>
        <th></th>
      </thead>
      <tbody>
        <?php
          $i=1;
          foreach ($categories as $c) {
            $id =$c["id"];
            echo "<tr>";
              echo "<td>$i</td>";
              echo "<td>".$c["name"]."</td>";
              echo'<td><a href="editcategory.php?id='.$id.'" class="btn btn-info">Edit</a></td>';
             // echo'<td><a href="delete_category.php?id='.$id.'" class="btn btn-danger">Delete</a></td>';
            echo "</tr>";
            $i++;
          }

         ?>

      </tbody>
    </table>
	</div>
  </body>
</html>
