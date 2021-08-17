<?php

include 'Controllers\CategoryController.php';
$name = $_GET["Name"];
$user =  checkCategoryname($name);
if($user)
{
	echo "invalid";
}
else echo "valid";
?>