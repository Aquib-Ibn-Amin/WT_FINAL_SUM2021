<?php
include 'Model/db_config.php';

  $name="";
  $err_name="";

  $price="";
  $err_price="";

  $c_id="";
  $err_c_id="";

  $quantity="";
  $err_quantity="";

  $description="";
  $err_description="";

  $day="";
  $err_day="";

  $month="";
  $err_month="";

  $year="";
  $err_year="";

  $image="";
  $err_image="";

  $err_db="";
  $hasError=false;


  if(isset($_POST["add_product"]))
  {
	  $fileType = strtolower(pathinfo(basename($_FILES["image"]["name"]),PATHINFO_EXTENSION));
		$target = "storage/product_images/".uniqid().".$fileType";
		move_uploaded_file($_FILES["image"]["tmp_name"],$target);
		
    if(empty($_POST["name"])){
      $hasError=true;
      $err_name="&nbsp;&nbsp;*Product name Required";
    }

    elseif (is_numeric($_POST["name"])){
      $hasError = true;
      $err_name = "&nbsp;&nbsp;*Product name must be characters";
        }
    else
    {
      $name = htmlspecialchars($_POST["name"]);
    }


    if(empty($_POST["price"]))
    {
      $hasError=true;
      $err_price="&nbsp;&nbsp;*Price Required";
    }
    elseif (!is_numeric($_POST["price"]))
    {
      $hasError=true;
      $err_price="&nbsp;&nbsp;*Only number allowed";
    }
    else
    {
      $price = htmlspecialchars($_POST["price"]);
    }

    if(empty($_POST["c_id"])){
      $hasError=true;
      $err_c_id="&nbsp;&nbsp;*Category Required";
    }

    else
    {
      $c_id = $_POST["c_id"];
    }

    if(empty($_POST["quantity"]))
    {
      $hasError=true;
      $err_quantity="&nbsp;&nbsp;*Quantity Required";
    }
    elseif (!is_numeric($_POST["quantity"]))
    {
      $hasError=true;
      $err_quantity="&nbsp;&nbsp;*Only number allowed";
    }
    else
    {
      $quantity = htmlspecialchars($_POST["quantity"]);
    }


    if(empty($_POST["description"])){
      $hasError = true;
      $err_description = "&nbsp;&nbsp;*Description Required";
    }
    else{
      $description = $_POST["description"];
    }

    if(!isset($_POST["day"])){
      $hasError = true;
      $err_day= "&nbsp;&nbsp;*Day Required";
    }
    else{
      $day = $_POST["day"];
    }

    if(!isset($_POST["month"])){
      $hasError = true;
      $err_month= "&nbsp;&nbsp;*Month Required";
    }
    else{
      $month = $_POST["month"];
    }


    if(!isset($_POST["year"])){
      $hasError = true;
      $err_year= "&nbsp;&nbsp;*Year Required";
    }
    else{
      $year = $_POST["year"];
    }

    if(!$hasError){
      $store_date= $year.'-'.$month.'-'.$day;
      $rs=insertProduct($_POST["name"],$_POST["c_id"],$_POST["price"],$_POST["quantity"],$_POST["description"],$store_date,$target);
      if ($rs === true) {
        header("Location:all_products.php");
      }
      $err_db = $rs;
      }


  }

//------------------


  else if(isset($_POST["edit_product"]))
  {
    if(empty($_POST["name"])){
      $hasError=true;
      $err_name="&nbsp;&nbsp;*Product name Required";
    }

    elseif (is_numeric($_POST["name"])){
      $hasError = true;
      $err_name = "&nbsp;&nbsp;*Product name must be characters";
        }
    else
    {
      $name = htmlspecialchars($_POST["name"]);
    }


    if(empty($_POST["price"]))
    {
      $hasError=true;
      $err_price="&nbsp;&nbsp;*Price Required";
    }
    elseif (!is_numeric($_POST["price"]))
    {
      $hasError=true;
      $err_price="&nbsp;&nbsp;*Only number allowed";
    }
    else
    {
      $price = htmlspecialchars($_POST["price"]);
    }

    if(empty($_POST["c_id"])){
      $hasError=true;
      $err_c_id="&nbsp;&nbsp;*Category Required";
    }

    else
    {
      $c_id = $_POST["c_id"];
    }

    if(empty($_POST["quantity"]))
    {
      $hasError=true;
      $err_quantity="&nbsp;&nbsp;*Quantity Required";
    }
    elseif (!is_numeric($_POST["quantity"]))
    {
      $hasError=true;
      $err_quantity="&nbsp;&nbsp;*Only number allowed";
    }
    else
    {
      $quantity = htmlspecialchars($_POST["quantity"]);
    }


    if(empty($_POST["description"])){
      $hasError = true;
      $err_description = "&nbsp;&nbsp;*Description Required";
    }
    else{
      $description = $_POST["description"];
    }

    if(!isset($_POST["day"])){
      $hasError = true;
      $err_day= "&nbsp;&nbsp;*Day Required";
    }
    else{
      $day = $_POST["day"];
    }

    if(!isset($_POST["month"])){
      $hasError = true;
      $err_month= "&nbsp;&nbsp;*Month Required";
    }
    else{
      $month = $_POST["month"];
    }


    if(!isset($_POST["year"])){
      $hasError = true;
      $err_year= "&nbsp;&nbsp;*Year Required";
    }
    else{
      $year = $_POST["year"];
    }
      if(!$hasError){
      $store_date= $year.'-'.$month.'-'.$day;
      $rs=updateProduct($name,$c_id,$price,$quantity,$description,$store_date,$_POST["id"]);
      if ($rs === true) {
        header("Location:all_products.php");
      }
      $err_db = $rs;
      }

  }

  else if (isset($_POST["delete_product"])){
    //do validations
    //if no error
    $rs = deleteProduct($_POST["id"]);
    if($rs === true){
      header("Location:all_products.php");
    }
    $err_db = $rs;
  }


  function insertProduct($name,$c_id,$price,$quantity,$description,$store_date,$image){
    $query="insert into products values (NULL,'$name','$c_id','$price','$quantity','$description','$store_date','$image')";

    return execute($query);

  }

  function getAllProducts(){
   //$query="select * from products";
  $query="select p.*,c.name as 'c_name' from products p left join categories c on p.c_id=c.id";
  $rs=get($query);
  return $rs;
}

function getProduct($id){
  $query="select * from products where id=$id";
  $rs=get($query);
  return $rs[0];
}


  function updateProduct($name,$c_id,$price,$quantity,$description,$store_date,$id){
    $query="update products set name='$name',c_id=$c_id,price='$price',quantity='$quantity',description='$description',store_date='$store_date'  where id=$id";

    return execute($query);

  }

function deleteProduct($id)
	{
		$query="delete from products where id=$id";
		return execute($query);
	}
function searchProduct($key){
		$query = "select p.id,p.name from products p left join categories c on p.c_id=c.id where p.name like '%$key%' or c.name like '%$key%' or p.description like '%$key%'";
		$rs = get($query);
		return $rs;
	}
?>
