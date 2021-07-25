<?php
	
    require_once 'Controllers/StudentController.php';
    require_once 'Controllers/DepartmentController.php';
    $departments=getAllDepartments();
    ?>
<html>
    <head></head>
    <h5><?php echo $err_db;?></h5>
    <body>
        <form  method="post" action="">
        
        <table align="center">
         <td>  <b>Add Department</b></td>
            <tr>
               <td>Name:</td>
			   <td><input type="text" name="name" value="<?php echo $name; ?>" > </td>
               <td><span> <?php echo $err_name;?> </span></td>
            </tr>    
            <tr>
                <td colspan="2" align="right"> <input type="submit" name="AddDepartment" value="Add Department"> </td>    
            </tr>
        </table>
    
    </form>
  </body>
</html>
