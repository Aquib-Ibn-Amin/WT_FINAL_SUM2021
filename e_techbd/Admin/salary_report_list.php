<?php
require_once 'admin_header.php';
require_once 'controllers/salaryReportController.php';
require_once 'controllers/SalaryController.php';
// $_SESSION["salaryfromdate"];
// $_SESSION["salarytodate"];
list($from_year,$from_month,$from_day) = (explode("-",$_SESSION["salaryfromdate"]));
$from_date = $from_day.'-'.$from_month.'-'.$from_year;

list($to_year,$to_month,$to_day) = (explode("-",$_SESSION["salarytodate"]));
$to_date = $to_day.'-'.$to_month.'-'.$to_year;
$SalaryReport = getSalaryReport($_SESSION["salaryfromdate"],$_SESSION["salarytodate"]);

?>
<div class="table-body">

    <h1>Salary report from  <?php echo $from_date; ?>  to  <?php echo $to_date; ?></h1>
    <table class="content-table">
      <thead>
        <th>Sl#</th>
        <th>First name</th>
        <th>Last name</th>
        <th>Username</th>
        <th>Salary</th>
        <th>paid</th>
        <th>Due</th>
        <th>Payment Date</th>
      </thead>
      <tbody>
<?php
  if ($SalaryReport == null) {
    echo "No data found";
  }
  else {
    $i=1;
    foreach ($SalaryReport as $s) {
      // $id =$e["id"];
      list($year,$month,$day) = (explode("-",$s["payment_date"]));
      $payment_date = $day.'-'.$month.'-'.$year;
      echo "<tr>";
        echo "<td>$i</td>";
        echo "<td>".$s["f_name"]."</td>";
        echo "<td>".$s["l_name"]."</td>";;
        echo "<td>".$s["username"]."</td>";
        echo "<td>".$s["salary"]."</td>";
        echo "<td>".$s["paid"]."</td>";
        echo "<td>".$s["due"]."</td>";
        echo "<td>".$payment_date."</td>";
      echo "</tr>";
      $i++;
  }
  }


?>
      </tbody>
    </table>

    </div>
<?php require_once 'admin_footer.php';?>
