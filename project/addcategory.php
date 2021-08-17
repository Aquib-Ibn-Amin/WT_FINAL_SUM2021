<?php
include 'category.php';
include 'Controllers/CategoryController.php';

 ?>

<html>
<body>
  
  <div class="text-center center">
        <h3>Add Category</h3>
<br>
    <form action="" method="post">
	<table>
      <h5><?php echo $err_db; ?></h5>
      <tr>
        <td >Name</td>
        <td>
          :  <input name="name" onfocusout="checkCategory(this)" value="<?php echo $name;?>" type="text"><br>
          <span id="err_name" style="color:red;"><?php echo $err_name;?></span><br>
        </td>
        <tr>
          <td align="center"><input type="submit" name="add_category" value="Add category" class="btn btn-info"></td>
        </tr>
     </table>
    </form>
  </div>
<script src="js/add_category.js"></script>
</body>
</html>
