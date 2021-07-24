<?php include 'admin_header.php';
include 'Controllers\CategoryController.php';
	$id = $_GET["id"];
	$c = getCategory($id);
?>
<!--edit category starts -->
<div align="center">
	<h5><?php echo $err_db;?></h5>
	<form action="" method="post">
		<div>
			<h4>Name:</h4> 
			<input type="hidden" name="id" value="<?php echo $c["id"];?>">
			<input type="text" name="name" value="<?php echo $c["Name"];?>">
		</div>
		
		<div>
			
			<input type="submit" name="edit_category" class="btn btn-success" value="Edit Category" class="form-control">
		</div>
	</form>
</div>

<!--edit category ends -->
