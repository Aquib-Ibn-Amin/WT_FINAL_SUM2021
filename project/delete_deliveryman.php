
<?php 
include 'employee_header.php';
include 'Controllers/DeliverymanController.php';
	$id = $_GET["id"];
	$e = getDeliveryman($id);
?>
<html >
  
  <body>
    <script src="js/alert_massage.js"></script>
<div class="text-center">
      <h3>Delete Deliveryman</h3>

      <br>
      <form action="" method="post" enctype="multipart/form-data">
        <h5><?php echo $err_db; ?></h5>
        <div class="">
          <input name="id" value="<?php echo $e["id"];?>" type="hidden">
        </div>

        <table align="center">
          <tr>
            <td>First name</td>
            <td>: <?php echo $e["f_name"];?><br>
          </tr>

          <tr>
            <td>Last name</td>
            <td>: <?php echo $e["l_name"];?><br>

          </tr>

          <tr>
            <td>Username</td>
            <td>: <?php echo $e["username"];?><br>

          </tr>

          <!-- <tr>
            <td>Password</td>
            <td>:  <input name="password" value="<?php echo $e["password"];?>" type="password" >
						<br><span style="color:red;"><?php echo $err_pass;?></span></td>
          </tr> -->

          <tr>
            <td> Email</td>
            <td>
              :  <?php echo $e["email"];?><br>

            </td>
          </tr>


          <tr>
            <td > Phone </td>
            <td>: <?php echo $e["phone"];?></td>
          </tr>


          <tr>
            <?php
              list($year,$month,$day) = (explode("-",$e["joining_date"]));
              $joining_date = $day.'-'.$month.'-'.$year;
            ?>
						<td>Joining Date</td>
						 <td>: <?php echo $joining_date?></td>
          </tr>



          <tr>
            <td>Gender </td>
            <td>: <?php echo $e["gender"];?><br>
          </tr>

          <tr>
            <td>Role</td>
            <td>: <?php echo $e["role"];?><br>
            </td>
          </tr>

          <tr>
            <td>Salary</td>
            <td>: <?php echo $e["salary"];?><br>
          </tr>


          <tr>
  					<td >Address</td>
  					<td>: <?php echo $e["address"];?></textarea>
  					</td>
  				</tr>

          <tr>
            <td>Image &nbsp;&nbsp</td>
            <td> :<img class='img-responsive' width='80px' height='100px' src="<?php echo $e["image"];?>"></img></td>
          </tr>


          <tr>
             <td colspan="2" align="center"><input type="submit" onclick="delete_alert()" name="delete_deliveryman" value="Confirm delete" ></td>
          </tr>

        </table>


      </form>
  </div>
  </body>
</html>