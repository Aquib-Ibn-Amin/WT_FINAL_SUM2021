
<?php
include 'category.php';
require_once 'controllers/CategoryController.php';
$id=$_GET["id"];
$c=getCategory($id);

?>



<html >
  <head>
    <title></title>
  </head>
  <body>
    <script src="js/alert_massage.js"></script>
    <fieldset >
      <h1 align="center">Delete Category</h1>
      <hr>
      <br>
      <form action="" method="post" enctype="multipart/form-data">
        <h5><?php echo $err_db; ?></h5>
        <div class="">
          <input name="id" value="<?php echo $c["id"];?>" type="hidden">
        </div>

        <table align="center" border="1">
          <tr>
            <td>Name</td>
            <td>:<input disabled name="name" value="<?php echo $c["name"];?>" type="text"><br> </td><br>
          </tr>


          <tr>
             <td colspan="2" align="center"><input type="submit" onclick="delete_alert()" name="delete_category" value="Confirm delete" ></td>
          </tr>

        </table>


      </form>
    </fieldset>
  </body>
</html>
