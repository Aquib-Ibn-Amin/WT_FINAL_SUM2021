<?php
require_once 'admin_header.php';
require_once 'controllers/salaryReportController.php';
require_once 'controllers/SalaryController.php';
$SalaryReport = getAllPaidEmployees();
 ?>
 <div class="table-body">


      <form class="" action="" method="post">
          <tr>
            <td>From</td>
            <td>:
              <select name="from_day">
                <option selected disabled>Day</option>
                <?php
                    for($i=1;$i<32;$i++){
                      if($from_day == $i)
                          echo "<option selected>$i</option>";
                      else
                          echo "<option>$i</option>";
                            }

                  ?>
              </select>

              <select name="from_month">
                  <option selected disabled>Month</option>
                  <?php
                    // foreach($months as $m)
                    for($i=1;$i<13;$i++){
                          if($from_month == $i)
                              echo "<option selected>$i</option>";
                          else
                              echo "<option>$i</option>";
                                }
                    ?>
              </select>

              <select name="from_year">
                  <option selected disabled>Year</option>
                  <?php
                      for($i=1990;$i<2001;$i++){
                        if($from_year == $i)
                            echo "<option selected>$i</option>";
                        else
                            echo "<option>$i</option>";
                              }

                    ?>
              </select>

            </td>
          </tr>



          <tr>
            <td>To</td>
            <td>:
              <select name="to_day">
                <option selected disabled>Day</option>
                <?php
                    for($i=1;$i<32;$i++){
                      if($to_day == $i)
                          echo "<option selected>$i</option>";
                      else
                          echo "<option>$i</option>";
                            }

                  ?>
              </select>

              <select name="to_month">
                  <option selected disabled>Month</option>
                  <?php
                    // foreach($months as $m)
                    for($i=1;$i<13;$i++){
                          if($to_month == $i)
                              echo "<option selected>$i</option>";
                          else
                              echo "<option>$i</option>";
                                }
                    ?>
              </select>

              <select name="to_year">
                  <option selected disabled>Year</option>
                  <?php
                      for($i=1990;$i<2021;$i++){
                        if($to_year == $i)
                            echo "<option selected>$i</option>";
                        else
                            echo "<option>$i</option>";
                              }

                    ?>
              </select>

            </td>
          </tr>

          <br><br>

          <tr>
            <td></td>
            <td><span style="color:red;"><?php echo $err_from_day;?></span> &nbsp; &nbsp; <span style="color:red;"><?php echo $err_from_month;?></span> &nbsp; &nbsp; <span style="color:red;"><?php echo $err_from_year;?></span></td>
          </tr>

          <tr>
            <td></td>
            <td><span style="color:red;"><?php echo $err_to_day;?></span> &nbsp; &nbsp; <span style="color:red;"><?php echo $err_to_month;?></span> &nbsp; &nbsp; <span style="color:red;"><?php echo $err_to_year;?></span></td>
          </tr>
<br>
        <tr>
          <td align="center"><input type="submit"  name="salary_report" value="Generate salary report" ></td>
        </tr>
      </form>



<div id="employeesReport">
  <table  class="content-table">
    <thead>
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
    </thead>
    <tbody>
      <?php
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
        // echo "<pre>";
        // print_r($students);
        // echo "</pre>";
        // echo $dept_id;
       ?>

    </tbody>
  </table>
</div>
<?php require_once 'admin_footer.php';?>
