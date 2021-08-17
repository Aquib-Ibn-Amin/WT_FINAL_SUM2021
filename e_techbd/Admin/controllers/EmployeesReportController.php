<?php
// session_start();
require_once 'models/db_config.php';

  $from_day="";
  $err_from_day="";

  $from_month="";
  $err_from_month="";

  $from_year="";
  $err_from_year="";

  $to_day="";
  $err_to_day="";

  $to_month="";
  $err_to_month="";

  $to_year="";
  $err_to_year="";

  $err_db="";
  $hasError=false;


  if(isset($_POST["employees_report"]))
  {



    if(!isset($_POST["from_day"])){
      $hasError = true;
      $err_from_day= "&nbsp;&nbsp;*Day Required";
    }
    else{
      $from_day = $_POST["from_day"];
    }

    if(!isset($_POST["from_month"])){
      $hasError = true;
      $err_from_month= "&nbsp;&nbsp;*Month Required";
    }
    else{
      $from_month = $_POST["from_month"];
    }

    if(!isset($_POST["from_year"])){
      $hasError = true;
      $err_from_year= "&nbsp;&nbsp;*Year Required";
    }
    else{
      $from_year = $_POST["from_year"];
    }

    if(!isset($_POST["to_day"])){
      $hasError = true;
      $err_to_day= "&nbsp;&nbsp;*Day Required";
    }
    else{
      $to_day = $_POST["to_day"];
    }

    if(!isset($_POST["to_month"])){
      $hasError = true;
      $err_to_month= "&nbsp;&nbsp;*Month Required";
    }
    else{
      $to_month = $_POST["to_month"];
    }

    if(!isset($_POST["to_year"])){
      $hasError = true;
      $err_to_year= "&nbsp;&nbsp;*Year Required";
    }
    else{
      $to_year = $_POST["to_year"];
    }

    if(!$hasError){



        $from_date= $from_year.'-'.$from_month.'-'.$from_day;
        $to_date= $to_year.'-'.$to_month.'-'.$to_day;

        $_SESSION["employeesfromdate"]=$from_date;
        $_SESSION["employeestodate"]=$to_date;
        header("Location: employees_report_list.php");
        // echo $from_date;
        // echo $to_date;

    		// $query = "select * from users where joining_date between cast('$from_date' as date) and cast('$to_date' as date) ORDER by joining_date DESC";
    		// $rs = get($query);
    		// // return $rs;
        // if($rs == null){
        //   echo "No data found";
        // }
        // else {
        //   $_SESSION["employeesreport"]=$rs;
        //   // setcookie("loggeduser",$rs,time()+200);
        //   header("Location: employess_report_list.php");


        //   header("Location: employess_report_list.php");
        //
          // echo "<table>";
          //   echo "<thead>";
          //     echo "<th>Sl#</th>";
          //     echo "<th>First name</th>";
          //     // <th>Image</th>
          //     echo "<th>Last name</th>";
          //     echo "<th>Username</th>";
        //         // <th>Password</th>
        //         // <th>Email</th>
        //         // <th>Phone</th>
        //         // <th>Joining Date</th>
        //         // <th>Gender </th>
        //         // <th>Role</th>
        //         // <th>Salary</th>
        //         // <th>Address</th>
        //         // <th>Action</th>
        //     echo "</thead>";
        //     echo "<tbody>";
        //
        //     $i=1;
        //     foreach ($rs as $r) {
        //       echo "<tr>";
        //           echo "<td>$i</td>";
        //           echo "<td>".$r["f_name"]."</td>";
        //           echo "<td>".$r["l_name"]."</td>";
        //           echo "<td>".$r["username"]."</td>";
        //           // echo "<td>".$r["password"]."</td>";
        //           // echo "<td>".$r["email"]."</td>";
        //           // echo "<td>".$r["phone"]."</td>";
        //       echo "</tr>";
        //       $i++;
        //     }
        //
        //     echo "</tbody>";
        //   echo "</table";
        // }

      }

}

function getEmployeesReport($from_date,$to_date){
  $query = "select * from users where joining_date between cast('$from_date' as date) and cast('$to_date' as date) order by joining_date asc";
  $rs=get($query);
  return $rs;

}
