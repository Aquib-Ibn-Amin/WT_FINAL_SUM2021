<?php	
	include 'product.php';
	require_once 'Controllers/ProductController.php';
    require_once 'Controllers/CategoryController.php';
    $categories = getAllCategories();
	$id=$_GET["id"];
	$p=getProduct($id);
?>
<!--editproduct starts -->
<div class="center">
     <form action="" method="post" enctype="multipart/form-data">
<table align="center">
<td>
	<img class="item-image" src="<?php echo $p["image"];?>"></img>
	</td>
          <tr>
            <td>
             <input name="id" value="<?php echo $p["id"];?>" type="hidden">
          </td>
          </tr>
					<tr>
						<td>Product name</td>
						<td>: <input type="text" name="name" value="<?php echo $p["name"];?>" ><br>
						<span style="color:red;"><?php echo $err_name;?></span></td>
					</tr>


					<tr>
						<td> Price </td>
						<td>: <input type="text" name="price" value="<?php echo $p["price"];?>" ><br>
						<span style="color:red;"><?php echo $err_price;?></span></td>
					</tr>

          <tr>
                <td> Category </td>
                <td >
                  :  <select name="c_id">
                      <option disabled selected>Choose</option>

                      <?php
                      // echo $categories;
                        foreach ($categories as $c) {
                          if($c["id"] == $p["c_id"])
                            echo "<option selected value='".$c["id"]."'>".$c["name"]."</option>";
                          else
                            echo "<option value='".$c["id"]."'>".$c["name"]."</option>";
                        }

                       ?>
                     </select>
                     <!-- <span><?php echo $err_c_id;?></span><br> -->
                </td>
              <tr>

					<tr>
						<td > Quantity </td>
						<td>
							: <input  type="text"  name="quantity" value="<?php echo $p["quantity"];?>">
							<br><span style="color:red;"><?php echo $err_quantity;?></span>
						</td>
					</tr>

					<tr>
							<td >Description</td>
							<td>: <textarea name="description"><?php echo $p["description"];?></textarea>
								<br><span style="color:red;"><?php echo $err_description;?></span>
							</td>
					</tr>

					<tr>
						<td>Store date</td>
						<?php
							list($year,$month,$day) = (explode("-",$p["store_date"]));
						 ?>
						<td>:
							<select name="day">
								<option selected disabled>Day</option>
								<?php
										for($i=1;$i<32;$i++){
											if($i==$day)
													echo "<option selected>$i</option>";
											else
													echo "<option>$i</option>";
														}

									?>
							</select>

							<select name="month">
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

							<select name="year">
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
						<td><span style="color:red;"><?php echo $err_day;?></span> &nbsp; &nbsp; <span style="color:red;"><?php echo $err_month;?></span> &nbsp; &nbsp; <span style="color:red;"><?php echo $err_year;?></span></td>
					</tr>

          <tr>
            <td></td>
             <td align="center"><input type="submit" class="btn btn-info" name="edit_product"value="Edit Product" ></td>
          </tr>

        </table>
     </form>		
</div>

<!--editproduct ends -->
