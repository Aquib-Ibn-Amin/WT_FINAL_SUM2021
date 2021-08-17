<?php
require_once 'admin_header.php';
require_once 'controllers/ProductReportController.php';
require_once 'controllers/ProductController.php';
$products = getAllProducts();
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
          <td align="center"><input type="submit"  name="product_report" value="Generate product report" ></td>
        </tr>
      </form>


<div>
  <table  class="content-table">
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
   </div>

<?php require_once 'admin_footer.php';?>
