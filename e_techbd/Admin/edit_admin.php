
<?php
require_once 'admin_header.php';
require_once 'controllers/AdminController.php';
// require_once 'controllers/LoginController.php';
$id=$_GET["id"];
$a=getAdmin($id);

;
?>



<html >
  <head>
    <title>Manage_manager_form</title>
  </head>
  <body>
    <fieldset style="background-color:rgb(222 234 240);">
<!--
      <h3 align="center" style="background-color:rgb(156 199 219);">
        &nbsp;&nbsp;<a style="text-decoration: None;" href="home_page.php" > Home </a>&nbsp;&nbsp
        &nbsp;&nbsp;<a style="text-decoration: None;" href="employees_list.php" > Manage employees </a>&nbsp;&nbsp;
        &nbsp;&nbsp;<a style="text-decoration: None;" href="categories_form.php"> Manage categories </a>&nbsp;&nbsp;
        &nbsp;&nbsp;<a style="text-decoration: None;" href="brand_form.php"> Manage brand </a>&nbsp;&nbsp;
        &nbsp;&nbsp;<a style="text-decoration: None;" href="financial_form.php"> Manage finance </a>&nbsp;&nbsp;
      </h3> -->



      <h1 align="center">Edit Employees</h1>
      <hr>
      <br>
      <form action="" method="post" enctype="multipart/form-data">
        <h5><?php echo $err_db; ?></h5>
        <table align="center">

          <tr>
            <td>
             <input name="id" value="<?php echo $a["id"];?>" type="hidden">
          </td>
          </tr>
          <tr>
            <td>First name</td>
            <td>: <input type="text" name="fname" value="<?php echo $a["f_name"];?>" ><br>
            <span style="color:red;"><?php echo $err_fname;?></span></td>
          </tr>

          <tr>
            <td>Last name</td>
            <td>: <input type="text" name="lname" value="<?php echo $a["l_name"];?>" ><br>
            <span style="color:red;"><?php echo $err_lname;?></span></td>
          </tr>

          <tr>
            <td>Username</td>
            <td>: <input type="text" name="username" value="<?php echo $a["username"];?>" ><br>
            <span style="color:red;"><?php echo $err_uname;?></span></td>
          </tr>

          <tr>
            <td>Password</td>
            <td>:  <input name="password" value="<?php echo $a["password"];?>" type="password" >
						<br><span style="color:red;"><?php echo $err_pass;?></span></td>
          </tr>

          <tr>
            <td> Email</td>
            <td>
              :  <input  type="text" name="email" value="<?php echo $a["email"];?>"><br>
              <span style="color:red;"><?php echo $err_email;?></span>
            </td>
          </tr>


          <tr>
            <td > Phone </td>
            <td>
              : <input  type="text" placeholder="Number" name="phone_num" value="<?php echo $a["phone"];?>">
              <br><span style="color:red;"><?php echo $err_phone_num;?></span>
            </td>
          </tr>


          <tr>
						<td>Joining Date</td>
            <?php
            // echo "<pre>";
            // print_r($e["dob"]);
            // echo "</pre>";
            list($year,$month,$day) = (explode("-",$a["joining_date"]));
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
            <td>: &nbsp; <input type="radio" value="Male" <?php if($a["gender"] == "Male") echo "checked";?> name="gender"> Male <input type="radio" <?php if($a["gender"] == "Female") echo "checked";?> value="Female" name="gender"> Female <br>
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
                  $roles = array("Admin");
  								foreach($roles as $r){
  									if($r == $a["role"])
  										echo "<option selected>$r</option>";
  									else
  										echo "<option>$r</option>";
  								}
  							?>
              </select><br>
              <span style="color:red;"><?php echo $err_role;?></span>
            </td>
          </tr>

          <!-- <tr>
            <td>Salary</td>
            <td>: <input type="text" name="salary" value="<?php echo $a["salary"];?>" ><br>
            <span style="color:red;"><?php echo $err_salary;?></span></td>
          </tr> -->


          <tr>
  					<td >Address</td>
  					<td>: <textarea name="address"><?php echo $a["address"];?></textarea>
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
            <td> <img width='80px' height='100px' src="<?php echo $a["image"];?>"></img></td>
          </tr>

          <tr>
            <td></td>
            <td> <input type="file" name="u_image" ><br>
            <td> <input type="hidden" name="old_image"  value="<?php echo $a["image"];?>"><br>
            <span style="color:red;"></span></td>
          </tr>
<?php
// echo $e["image"];
 ?>
          <tr>
            <td></td>
             <td align="center"><input type="submit" name="edit_admin" value="Edit Admin" ></td>
          </tr>

        </table>
 <?php
 // echo $e["image"];
 // echo "<pre>";
 // print_r($e["image"]);
 // echo "</pre>";
  ?>

      </form>
    </fieldset>
<?php require_once 'admin_footer.php';?>
