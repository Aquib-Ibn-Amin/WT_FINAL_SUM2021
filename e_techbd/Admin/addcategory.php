<?php
require_once 'admin_header.php';
include 'controllers/CategoryController.php';

 ?>


  <script src="js/add_category.js"></script>
  <div class="form">

    <form action="" method="post">
      <h1>Add Categories</h1>
      <h5><?php echo $err_db; ?></h5>
      <tr>
        <td >Name</td>
        <td>
          :  <input name="name" onfocusout="checkCategory(this)" value="<?php echo $name;?>" type="text"><br>
          <span id="err_name"><?php echo $err_name;?></span><br>
        </td>


        <tr>
          <td align="center"><input type="submit" name="add_category" value="Add category" ></td>
        </tr>


        </table>
    </form>
  </div>

<?php require_once 'admin_footer.php';?>
