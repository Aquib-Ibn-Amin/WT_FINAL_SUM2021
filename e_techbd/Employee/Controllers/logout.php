<?php
include('logincontrollers.php');
if($_SESSION['login']!=null){
    session_destroy();
    echo "<script>alert('You have been logged out'); window.location='../login.php';</script>";
    exit();
}
else{
    echo "<script>alert('Please logged In'); window.location='../login.php';</script>";
}




?>