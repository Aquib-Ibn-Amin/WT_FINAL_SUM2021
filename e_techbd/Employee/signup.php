<head>
	 <link rel="stylesheet" href="Style/styles.css">
</head>


<?php
include 'Controllers/EmployeeController.php';
?>
<div  class="text-center center">
<h1 > Sign up </h1> 
<form action="" onsubmit="return validate()" method="post" enctype="multipart/form-data">
        <h5><?php echo $err_db; ?></h5>
        <table align="center">

          <tr>
            <td>First name</td>
            <td>: <input id="fname" type="text" name="fname" value="<?php echo $fname;?>" ><br>
            <span id="err_fname" style="color:red;"><?php echo $err_fname;?></span></td>
          </tr>

          <tr>
            <td>Last name</td>
            <td>: <input type="text" id="lname" name="lname" value="<?php echo $lname;?>" ><br>
            <span id="err_lname" style="color:red;"><?php echo $err_lname;?></span></td>
          </tr>

          <tr>
            <td>Username</td>
            <td>: <input type="text" id="uname" name="username" onfocusout="checkUsername(this) " value="<?php echo $uname;?>"><br>
            <span id="err_uname" style="color:red;"><?php echo $err_uname;?></span></td>
          </tr>

          <tr>
            <td>Password</td>
            <td>:  <input id="pass" name="password" value="<?php echo $pass;?>" type="password"><br>
			<span id="err_pass" style="color:red;"><?php echo $err_pass;?></span></td>
          </tr>

          <tr>
            <td> Email</td>
            <td>:  <input id="email" type="text" name="email" value="<?php echo $email;?>"><br>
            <span id="err_email" style="color:red;"><?php echo $err_email;?></span>
            </td>
          </tr>


          <tr>
            <td > Phone </td>
            <td>: <input id="phone_num" type="text" name="phone_num" value="<?php echo $phone_num;?>">
            <br><span id="err_phone_num" style="color:red;"><?php echo $err_phone_num;?></span>
            </td>
          </tr>


          <tr>
			<td>Joining Date</td>
			<td>:
				<select id="day" name="day">
					<option selected disabled>Day</option>
					<?php
						for($i=1;$i<32;$i++){
						if($day == $i)
													echo "<option selected>$i</option>";
											else
													echo "<option>$i</option>";
														}

									?>
							</select>

							<select id="month" name="month">
									<option selected disabled>Month</option>
									<?php
										// foreach($months as $m)
                    for($i=1;$i<13;$i++){
													if($month == $i)
															echo "<option selected>$i</option>";
													else
															echo "<option>$i</option>";
																}
										?>
							</select>

							<select id="year" name="year">
									<option selected disabled>Year</option>
									<?php
											for($i=1990;$i<2001;$i++){
												if($year == $i)
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
                    <td><span id="err_day" style="color:red;"><?php echo $err_day;?></span> &nbsp; &nbsp; 
					<span id="err_month" style="color:red;"><?php echo $err_month;?></span> &nbsp; &nbsp;
					<span id="err_year"  style="color:red;"> <?php echo $err_year;?> </span></td>
      </tr>


          <tr>
            <td>Gender     </td>
            <td>: &nbsp; <input id="gender"  type="radio" value="Male" <?php if($gender == "Male") echo "checked";?> name="gender"> Male <input type="radio" <?php if($gender == "Female") echo "checked";?> value="Female" name="gender"> Female <br>
            <span id="err_gender" style="color:red;"><?php echo $err_gender;?></span></td>
          </tr>

          <tr>
            <td>Role</td>
            <td>:
              <select id="role" name="role">
                <option selected disabled>Choose</option>
                <!-- <option>Employee</option>
                <option>Delivery man</option> -->
                <?php
  								foreach($roles as $r){
  									if($r == $role)
  										echo "<option selected>$r</option>";
  									else
  										echo "<option>$r</option>";
  								}
  							?>
              </select><br>
              <span id="err_role" style="color:red;"><?php echo $err_role;?></span>
            </td>
          </tr>

          <tr>
            <td>Salary</td>
            <td>: <input id="salary" type="text" name="salary" value="<?php echo $salary;?>" ><br>
            <span id="err_salary" style="color:red;"><?php echo $err_salary;?></span></td>
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
  					<td align="right">Address</td>
  					<td>: <textarea id="address" name="address"><?php echo $address;?></textarea>
  						<br><span id="err_address" style="color:red;"><?php echo $err_address;?></span>
  					</td>
  				</tr>

          <!-- <tr>
  					<td align="right">Joining date</td>
  				</tr> -->
          <tr>
            <td>Image</td>
            <td>: <input id="u_image" type="file" name="u_image" value="<?php echo $u_image;?>" ><br>
            <span id="err_u_image" style="color:red;"><?php echo $err_u_image;?></span></td>
          </tr>


          <tr>
            <td></td>
             <td align="center"><input type="submit" name="add_user" value="Sign Up" ></td>
          </tr>

        </table>


      </form>
</div>

<script src="js/signup.js"></script>
<script src="js/signup_employee.js"></script>