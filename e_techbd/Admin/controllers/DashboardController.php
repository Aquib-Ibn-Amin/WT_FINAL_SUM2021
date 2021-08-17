<?php
require_once 'models/db_config.php';

function getAllProducts(){
// $query="select * from products";
$query="select p.*,c.name as 'c_name' from products p left join categories c on p.c_id=c.id";
$rs=getNumber($query);
return $rs;
}

function getAllEmployees(){
$query="select * from users where role='Employee'";
$rs=getNumber($query);
return $rs;
}

function getAllDeliveryman(){
$query="select * from users where role='Delivery man'";
$rs=getNumber($query);
return $rs;
}

function getAllAdmin(){
$query="select * from users where role='Admin'";
$rs=getNumber($query);
return $rs;
}

function getAllCustomer(){
$query="select * from users where role='Customer'";
$rs=getNumber($query);
return $rs;
}

// function getAllOrder(){
// $query="select * from order";
// $rs=getNumber($query);
// return $rs;
// }
 ?>
