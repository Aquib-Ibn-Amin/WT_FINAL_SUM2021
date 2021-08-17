<?php 
	include 'employee_header.php';
	include 'Controllers/DeliverymanController.php';
	$id = $_GET["id"];
	$c = getDeliveryman($id);
?>
<!--edit category starts -->
<div class="text-center center">
	<h3>Edit Delivery Man</h3>
	<br>
	<h5><?php echo $err_db;?></h5>
	
<!--<form action="" method="post">
<div class="form-group text-center">-->
			<form action="" method="post" enctype="multipart/form-data" >
			<div class="form-group edit-deliveryman">
        <h5><?php echo $err_db; ?></h5>
        <table align="center">

          <tr>
            <td>
             <input name="id" value="<?php echo $c["id"];?>" type="hidden">
          </td>
          </tr>
          <tr>
            <td>First name</td>
            <td>: <input type="text" name="fname" value="<?php echo $c["f_name"];?>" ><br>
            <span style="color:red;"><?php echo $err_fname;?></span></td>
          </tr>

          <tr>
            <td>Last name</td>
            <td>: <input type="text" name="lname" value="<?php echo $c["l_name"];?>" ><br>
            <span style="color:red;"><?php echo $err_lname;?></span></td>
          </tr>

          <tr>
            <td>Username</td>
            <td>: <input type="text" name="username" value="<?php echo $c["username"];?>" ><br>
            <span style="color:red;"><?php echo $err_uname;?></span></td>
          </tr>

          <tr>
            <td>Password</td>
            <td>:  <input name="password" value="<?php echo $c["password"];?>" type="password" >
						<br><span style="color:red;"><?php echo $err_pass;?></span></td>
          </tr>

          <tr>
            <td> Email</td>
            <td>
              :  <input  type="text" name="email" value="<?php echo $c["email"];?>"><br>
              <span style="color:red;"><?php echo $err_email;?></span>
            </td>
          </tr>


          <tr>
            <td > Phone </td>
            <td>
              : <input  type="text" placeholder="Number" name="phone_num" value="<?php echo $c["phone"];?>">
              <br><span style="color:red;"><?php echo $err_phone_num;?></span>
            </td>
          </tr>


          <tr>
						<td>Joining Date</td>
            <?php
            // echo "<pre>";
            // print_r($e["dob"]);
            // echo "</pre>";
            list($year,$month,$day) = (explode("-",$c["joining_date"]));
            // echo $day;
             ?>

						<td>:
							<select name="day">
								<option selected disabled>Day</option>
								<?php
										for($i=1;$i<32;$i++){
											if($i == $day)
													echo "<option selected>$i</option>";
											else
													echo "<option>$i</option>";
														}

									?>
							</select>

							<select name="month">
									<option selected disabled>Month</option>
									<?php
										// foreach($months as $m){
                    for($i=1;$i<13;$i++){
													if($i == $month)
															echo "<option selected>$i</option>";
													else
															echo "<option>$i</option>";
																}
										?>
							</select>

							<select name="year">
									<option selected disabled>Year</option>
									<?php
											for($i=1990;$i<2001;$i++){
												if($i == $year)
														echo "<option selected>$i</option>";
												else
														echo "<option>$i</option>";
															}

										?>
							</select>

						</td>
					</tr>
          <tr>
            <td></td>
            <td><span style="color:red;"><?php echo $err_day;?></span> &nbsp; &nbsp; <span style="color:red;"><?php echo $err_month;?></span> &nbsp; &nbsp; <span style="color:red;"><?php echo $err_year;?></span></td>
          </tr>



          <tr>
            <td>Gender </td>
            <td>: &nbsp; <input type="radio" value="Male" <?php if($c["gender"] == "Male") echo "checked";?> name="gender"> Male <input type="radio" <?php if($c["gender"] == "Female") echo "checked";?> value="Female" name="gender"> Female <br>
            <span style="color:red;"><?php echo $err_gender;?></span></td>
          </tr>

          <tr>
            <td>Role</td>
            <td>:
              <select name="role">
                <option selected disabled>Choose</option>
                <!-- <option>Employee</option>
                <option>Delivery man</option> -->
                <?php
  								foreach($roles as $r){
  									if($r == $c["role"])
  										echo "<option selected>$r</option>";
  									else
  										echo "<option>$r</option>";
  								}
  							?>
              </select><br>
              <span style="color:red;"><?php echo $err_role;?></span>
            </td>
          </tr>

          <tr>
            <td>Salary</td>
            <td>: <input type="text" name="salary" value="<?php echo $c["salary"];?>" ><br>
            <span style="color:red;"><?php echo $err_salary;?></span></td>
          </tr>
<!--
          <tr>
            <td>Address</td>
            <td>
              :  <input name="street" type="text" placeholder="Street Address" value="<?php echo $street;?>">

            </td>
          </tr>

          <tr>
            <td></td>
            <td>
              &nbsp;&nbsp<input name="city" type="text" placeholder="City" value="<?php echo $city;?>"> - <input name="state" type="text" placeholder="State" value="<?php echo $state;?>">

            </td>
          </tr>

          <tr>
            <td></td>
            <td>
              &nbsp;&nbsp<input name="postal" type="text" placeholder="Postal/Zip Code" value="<?php echo $postal;?>">

            </td>
            <td></td>
          </tr>
          <tr>
            <td></td>
            <td>
              <span style="color:red;"><?php echo $err_street;?></span>&nbsp; &nbsp;&nbsp;
              <span style="color:red;"><?php echo $err_city;?></span> &nbsp; &nbsp;&nbsp; <span style="color:red;"><?php echo $err_state;?></span>&nbsp; &nbsp;&nbsp;
              <span style="color:red;"><?php echo $err_postal;?></span>

            </td>
          </tr> -->

          <tr>
  					<td >Address</td>
  					<td>: <textarea name="address"><?php echo $c["address"];?></textarea>
  						<br><span style="color:red;"><?php echo $err_address;?></span>
  					</td>
  				</tr>

          <!-- <tr>
  					<td align="right">Joining date</td>
  				</tr>

          <tr>
            <td align="right">Image</td>
          </tr> -->
          <tr>
            <td>Image &nbsp;&nbsp:</td>
            <td> <img width='80px' height='100px' src="<?php echo $c["image"];?>"></img></td>
          </tr>

          <tr>
            <td></td>
            <td> <input type="file" name="u_image" ><br>
            <td> <input type="hidden" name="old_image"  value="<?php echo $c["image"];?>"><br>
            <span style="color:red;"></span></td>
          </tr>
<?php
// echo $c["image"];
 ?>
          <tr>
            <td></td>
             <td align="center"><input type="submit" class="btn btn-info" name="edit_user" value="Edit Employee" ></td>
          </tr>

        </table>
 <?php
 // echo $e["image"];
 // echo "<pre>";
 // print_r($e["image"]);
 // echo "</pre>";
  ?>
</div>
      </form>
</div>

<!--edit category ends -->
