<?php
include 'order.php';
require_once 'Controllers/OrderController.php';
//require_once 'Controllers/CategoryController.php';
$id=$_GET["id"];
$p=getOrder($id);

?>

<html >
  <head>
    <title></title>
  </head>
  <body>
    <script src="js/alert_massage.js"></script>

      <h1 align="center">Delete Order</h1>
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
						<td>: <?php echo $p["pro_name"];?><br>
					</tr>
					<tr>
						<td > Quantity </td>
						<td>: <?php echo $p["quantity"];?></td>
					</tr>


					<tr>
						<td> Price </td>
						<td>: <?php echo $p["price"];?><br>
					</tr>
					 <tr>
  					<td >Address</td>
  					<td>: <?php echo $p["address"];?></textarea>
  					</td>
  				</tr>
				<tr>
            <td > Phone </td>
            <td>: <?php echo $p["phone"];?></td>
          </tr>
		  <tr>
            <td > Status </td>
            <td>: <?php echo $p["status"];?></td>
          </tr>


	

          <tr>
             <td colspan="2" align="center"><input type="submit" name="delete_order" class="btn btn-danger" onclick="delete_alert()" value="Confirm delete" ></td>
          </tr>

        </table>


      </form>
   
  </body>
</html>
