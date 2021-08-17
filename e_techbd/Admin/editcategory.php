<?php
require_once 'admin_header.php';
require_once 'controllers/CategoryController.php';
$id=$_GET["id"];
$c=getCategory($id);

 ?>
    <form class="" action="" method="post">
      <h1>Edit categories</h1>
      <h5><?php echo $err_db; ?></h5>
      <tr>
        <td >Name</td>
        <td>
           <input name="id" value="<?php echo $c["id"];?>" type="hidden">
        </td>
        <td>
          :  <input name="name" value="<?php echo $c["name"];?>" type="text"><br>
        </td>
      </tr>
        <tr>
          <td align="center"><input type="submit" name="edit_category" value="Edit category" ></td>
        </tr>

        <tr>
    </form>
<?php require_once 'admin_footer.php';?>
