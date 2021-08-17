
<?php 
include 'customer.php';
include 'Controllers\CustomerControler.php';
	$id = $_GET["id"];
	$e = getCustomer($id);
?>
<html >
  
  <body>
    <script src="js/alert_massage.js"></script>
<div class="text-center">
      <h3>Delete Customer</h3>

      <br>
      <form action="" method="post" enctype="multipart/form-data">
        <h5><?php echo $err_db; ?></h5>
        <div class="">
          <input name="id" value="<?php echo $e["id"];?>" type="hidden">
        </div>

        <table align="center">
          <tr>
            <td> Name</td>
            <td>: <?php echo $e["name"];?><br>
          </tr>
        <tr>
            <td> Email</td>
            <td>
              :  <?php echo $e["email"];?><br>

            </td>
          </tr>

          <tr>
            <td>Password</td>
            <td>:  <input name="password" value="<?php echo $e["password"];?>" type="password" >
						<br><span style="color:red;"><?php echo $err_pass;?></span></td>
          </tr>


          <tr>
            <td > Country</td>
            <td>: <?php echo $e["country"];?></td>
          </tr> 
		  <tr>
            <td > City </td>
            <td>: <?php echo $e["city"];?></td>
          </tr>
         <tr>
            <td > Phone </td>
            <td>: <?php echo $e["contact"];?></td>
          </tr>
			<tr>
  					<td >Address</td>
  					<td>: <?php echo $e["user_address"];?></textarea>
  					</td>
  				</tr>

        


          <tr>
             <td colspan="2" align="center"><input type="submit" onclick="delete_alert()" name="delete_customer" value="Confirm delete" ></td>
          </tr>

        </table>


      </form>
  </div>
  </body>
</html>