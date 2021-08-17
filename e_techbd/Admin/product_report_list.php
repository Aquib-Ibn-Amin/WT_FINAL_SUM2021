<?php
require_once 'admin_header.php';
require_once 'controllers/ProductReportController.php';
require_once 'controllers/ProductController.php';
// $_SESSION["productfromdate"];
// $_SESSION["producttodate"];
list($from_year,$from_month,$from_day) = (explode("-",$_SESSION["productfromdate"]));
$from_date = $from_day.'-'.$from_month.'-'.$from_year;

list($to_year,$to_month,$to_day) = (explode("-", $_SESSION["producttodate"]));
$to_date = $to_day.'-'.$to_month.'-'.$to_year;
$ProductReport = getProductReport($_SESSION["productfromdate"],$_SESSION["producttodate"]);

?>
<div class="table-body">

    <h1>Product report from  <?php echo $from_date; ?>  to  <?php echo $to_date; ?></h1>
    <table class="content-table">
      <thead>
        <th>Sl#</th>
        <th>Image</th>
        <th>Product name</th>
        <th>Price</th>
        <th>Category</th>
        <th>Quantity</th>
        <th>description</th>
        <th>Store date</th>
      </thead>
      <tbody>
        <?php
          $i=1;
          foreach ($ProductReport as $p) {
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
            echo "</tr>";
            $i++;
          }

?>
      </tbody>
    </table>

    </div>
<?php require_once 'admin_footer.php';?>
