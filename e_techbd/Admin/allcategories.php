<?php
require_once 'admin_header.php';
require_once 'controllers/CategoryController.php';
$categories = getAllCategories();
// echo "<pre>";
// print_r($categories);
// echo "</pre>";
 ?>
 <div class="table-body">

    <a style="text-decoration: None;" href="addcategory.php" > Add category </a>
    <h1>All Categories</h1>
    <table class="content-table">
      <thead>
        <th>Sl#</th>
        <th>Name</th>
        <th>Product Count</th>
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
              echo'<td> <a href="editcategory.php?id='.$id.'">Edit</a>';
              echo'<a href="delete_category.php?id='.$id.'">Delete</a></td>';
            echo "</tr>";
            $i++;
          }

         ?>

      </tbody>
    </table>

     </div>
<?php require_once 'admin_footer.php';?>
