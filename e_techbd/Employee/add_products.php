	
<?php 
include 'product.php';
require_once 'Controllers/ProductController.php';
require_once 'Controllers/CategoryController.php';
$categories = getAllCategories();

?>
<script>
</script>
<!--addproduct starts -->
<div class="center">
	<h5 class="text-danger"><?php echo $err_db;?></h5>
	<form action=""  onsubmit="return validate()" method="post" enctype="multipart/form-data" class="form-horizontal form-material">
		<div class="form-group">
			<table align="center">
          <tr>
            <td>Product name</td>
            <td>: <input id="pname" type="text" name="name" value="<?php echo $name;?>" ><br>
            <span id="err_pname"style="color:red;"><?php echo $err_name;?></span></td>
          </tr>


          <tr>
            <td> Price </td>
            <td>: <input id="price" type="text" name="price" value="<?php echo $price;?>" ><br>
            <span id="err_price" style="color:red;"><?php echo $err_price;?></span></td>
          </tr>

          <tr>
              <td> Category </td>
              <td >
                :  <select id="c_name" name="c_id">
                    <option disabled selected>Choose</option>

                    <?php
                      foreach ($categories as $c) {
                        echo "<option value='".$c["id"]."'>".$c["name"]."</option>";
                      }

                   ?>
                   </select><br>
               <span id="err_c_name" style="color:red;"><?php echo $err_c_id;?></span><br>
             </td>
 
            </tr>


          <tr>
            <td > Quantity </td>
            <td>
              : <input id="quantity"  type="text"  name="quantity" value="<?php echo $quantity;?>">
              <br><span id="err_quantity" style="color:red;"><?php echo $err_quantity;?></span>
            </td>
          </tr>

          <tr>
    					<td >Description</td>
    					<td>: <textarea id="description" name="description"><?php echo $description;?></textarea>
    						<br><span id="err_description" style="color:red;"><?php echo $err_description;?></span>
    					</td>
    			</tr>
				<tr>
			
			<td >Image</td> 
			<td>:<input id="p_image" type="file" name="image" value="<?php echo $image;?>" ><br>
        <span id="err_p_image" style="color:red;"><?php echo $err_image;?></span></td>
			
				</tr>

          <tr>
						<td>Store date</td>
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
											for($i=1990;$i<2021;$i++){
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
            <td></td>
             <td align="center"><input type="submit" name="add_product" value="Add Product" ></td>
          </tr>


        </table>
	</form>
</div>

<script src="js/add_product.js"></script>