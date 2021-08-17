<?php
require_once 'admin_header.php';
require_once 'controllers/EmployeesReportController.php';
require_once 'controllers/EmployeesController.php';
$_SESSION["employeesfromdate"];
$_SESSION["employeestodate"];
list($from_year,$from_month,$from_day) = (explode("-",$_SESSION["employeesfromdate"]));
$from_date = $from_day.'-'.$from_month.'-'.$from_year;

list($to_year,$to_month,$to_day) = (explode("-",$_SESSION["employeestodate"]));
$to_date = $to_day.'-'.$to_month.'-'.$to_year;
$EmployeesReport = getEmployeesReport($_SESSION["employeesfromdate"],$_SESSION["employeestodate"]);

?>
<div class="table-body">

    <h1>Employees work report from  <?php echo $from_date; ?>  to  <?php echo $to_date; ?></h1>
    <table class="content-table">
      <thead>
        <th>Sl#</th>
        <th>Image</th>
        <th>First name</th>
        <th>Last name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Joining Date</th>
        <th>Address</th>
      </thead>
      <tbody>
<?php
  if ($EmployeesReport == null) {
    echo "No data found";
  }
  else {
    $i=1;
    foreach ($EmployeesReport as $e) {
      // $id =$e["id"];
      list($year,$month,$day) = (explode("-",$e["joining_date"]));
      $joining_date = $day.'-'.$month.'-'.$year;
      echo "<tr>";
        echo "<td>$i</td>";
        echo "<td><img width='80px' height='100px' src='".$e["image"]."'></td>";
        echo "<td>".$e["f_name"]."</td>";
        echo "<td>".$e["l_name"]."</td>";;
        // echo "<td>".$e["password"]."</td>";
        echo "<td>".$e["email"]."</td>";
        echo "<td>".$e["phone"]."</td>";
        echo "<td>".$joining_date."</td>";
        // echo "<td>".$e["gender"]."</td>";
        echo "<td>".$e["address"]."</td>";
      echo "</tr>";
      $i++;
  }
  }

?>
      </tbody>
    </table>

    </div>
<?php require_once 'admin_footer.php';?>
