<?php
  include 'Controllers/CategoryController.php';
  $name = $_GET["name"];
  $category = checkCategory($name);
  if ($category) {
    echo "Invalid";
  }
  else {
    echo "Valid";
  }
 ?>
