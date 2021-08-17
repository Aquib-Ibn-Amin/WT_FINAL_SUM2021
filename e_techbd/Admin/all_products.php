<?php
require_once 'admin_header.php';
require_once 'controllers/ProductController.php';
$products = getAllProducts();

 ?>
 <div class="table-body">

    <script src="js/products.js"></script>

<!-- style="background-color:#f4f5f7;" -->
      <!-- <h3 align="center" style="background-color:#d3dae8;">
        &nbsp;&nbsp;<a style="text-decoration: None;" href="home_page.php" > Home </a>&nbsp;&nbsp
        &nbsp;&nbsp;<a style="text-decoration: None;" href="employees_list.php" > Manage employees </a>&nbsp;&nbsp;
        &nbsp;&nbsp;<a style="text-decoration: None;" href="categories_form.php"> Manage categories </a>&nbsp;&nbsp;
        &nbsp;&nbsp;<a style="text-decoration: None;" href="brand_form.php"> Manage brand </a>&nbsp;&nbsp;
        &nbsp;&nbsp;<a style="text-decoration: None;" href="financial_form.php"> Manage finance </a>&nbsp;&nbsp;
      </h3> -->

      <input type="text"  onkeyup="searchProduct(this)" placeholder="Search...">
    	<div id="suggesstion"></div>
      <br><br>
      <a style="text-decoration: None;" href="add_product.php" > Add Product </a>
      <br><br>


      <table border="1" class="content-table">
        <thead>
          <th>Sl#</th>
          <th>Image</th>
          <th>Product name</th>
          <th>Price</th>
          <th>Category</th>
          <th>Quantity</th>
          <th>description</th>
          <th>Store date</th>
          <th>Action</th>

        </thead>
        <tbody>
          <?php
            $i=1;
            foreach ($products as $p) {
              // $id =$e["id"];
                list($year,$month,$day) = (explode("-",$p["store_date"]));
                $store_date= $day.'-'.$month.'-'.$year;
              echo "<tr>";
                echo "<td>$i</td>";
                echo "<td><img width='80px' height='100px' src='".$p["image"]."'></td>";
                echo "<td>".$p["name"]."</td>";
                echo "<td>".$p["price"]."</td>";
                echo "<td>".$p["c_name"]."</td>";
                echo "<td>".$p["quantity"]."</td>";
                echo "<td>".$p["description"]."</td>";
                echo "<td>".$store_date."</td>";
                // echo "<td>".$p["store_date"]."</td>";

                echo'<td> <a href="edit_product.php?id='.$p["id"].'">Edit</a>';
                echo'<a href="delete_product.php?id='.$p["id"].'">Delete</a></td>';
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

<?php require_once 'admin_footer.php';?>
