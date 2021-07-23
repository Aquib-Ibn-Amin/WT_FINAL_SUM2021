<?php
include 'Controllers\CategoryController.php';
?>

<div align="center" >
<h5> <?php echo $err_db;?> </h5>
<form >
<div>
<h4>Name :</h4>
<input name="name"  value="<?php echo $name ?>" type="text"  placeholder="Enter  Name" >
	    <br><span style="color:red;"><?php echo $err_name; ?></span>
</div>
<div>
<input type="submit" name="add_category"  value="Add Category" >
</div>
</form>
</div>

