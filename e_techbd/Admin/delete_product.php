
<?php
require_once 'admin_header.php';
require_once 'controllers/ProductController.php';
require_once 'controllers/CategoryController.php';
$categories = getAllCategories();
$id=$_GET["id"];
$p=getProduct($id);

?>

    <script src="js/alert_massage.js"></script>
    <fieldset style="background-color:rgb(222 234 240);">


      <h1 align="center">Delete Product</h1>
      <hr>
      <br>
      <form action="" method="post" enctype="multipart/form-data">
        <h5><?php echo $err_db; ?></h5>
        <div class="">
          <input name="id" value="<?php echo $p["id"];?>" type="hidden">
        </div>

        <table align="center">
					<tr>
						<td>Product name</td>
						<td>: <?php echo $p["name"];?><br>
					</tr>


					<tr>
						<td> Price </td>
						<td>: <?php echo $p["price"];?><br>
					</tr>

          <tr>
                <td> Category </td>
                <td >
                  :
                      <?php
                        foreach ($categories as $c) {
                          if($c["id"] == $p["c_id"]){
                             echo $c["name"];
                             break;
                          }
                        }

                       ?>
                </td>
              <tr>

					<tr>
						<td > Quantity </td>
						<td>: <?php echo $p["quantity"];?></td>
					</tr>

					<tr>
							<td >Description</td>
							<td>: <?php echo $p["description"];?></td>
					</tr>

					<tr>
						<?php
							list($year,$month,$day) = (explode("-",$p["store_date"]));
              $store_date = $day.'-'.$month.'-'.$year;
						 ?>
             <tr>
               <td>Store date</td>
               <td>:	<?php echo $store_date ?>	</td>
             </tr>
					</tr>
					<tr>
						<td></td>
						<td><span style="color:red;"><?php echo $err_day;?></span> &nbsp; &nbsp; <span style="color:red;"><?php echo $err_month;?></span> &nbsp; &nbsp; <span style="color:red;"><?php echo $err_year;?></span></td>
					</tr>

          <tr>
             <td colspan="2" align="center"><input type="submit" name="delete_product" onclick="delete_alert()" value="Confirm delete" ></td>
          </tr>

        </table>


      </form>
    </fieldset>
<?php require_once 'admin_footer.php';?>
