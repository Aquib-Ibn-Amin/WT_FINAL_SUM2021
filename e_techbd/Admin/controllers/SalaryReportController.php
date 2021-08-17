<?php
// session_start();
require_once 'models/db_config.php';

  $from_day="";
  $err_from_day="";

  $from_month="";
  $err_from_month="";

  $from_year="";
  $err_from_year="";

  $to_day="";
  $err_to_day="";

  $to_month="";
  $err_to_month="";

  $to_year="";
  $err_to_year="";

  $err_db="";
  $hasError=false;


  if(isset($_POST["salary_report"]))
  {



    if(!isset($_POST["from_day"])){
      $hasError = true;
      $err_from_day= "&nbsp;&nbsp;*Day Required";
    }
    else{
      $from_day = $_POST["from_day"];
    }

    if(!isset($_POST["from_month"])){
      $hasError = true;
      $err_from_month= "&nbsp;&nbsp;*Month Required";
    }
    else{
      $from_month = $_POST["from_month"];
    }

    if(!isset($_POST["from_year"])){
      $hasError = true;
      $err_from_year= "&nbsp;&nbsp;*Year Required";
    }
    else{
      $from_year = $_POST["from_year"];
    }

    if(!isset($_POST["to_day"])){
      $hasError = true;
      $err_to_day= "&nbsp;&nbsp;*Day Required";
    }
    else{
      $to_day = $_POST["to_day"];
    }

    if(!isset($_POST["to_month"])){
      $hasError = true;
      $err_to_month= "&nbsp;&nbsp;*Month Required";
    }
    else{
      $to_month = $_POST["to_month"];
    }

    if(!isset($_POST["to_year"])){
      $hasError = true;
      $err_to_year= "&nbsp;&nbsp;*Year Required";
    }
    else{
      $to_year = $_POST["to_year"];
    }

    if(!$hasError){



        $from_date= $from_year.'-'.$from_month.'-'.$from_day;
        $to_date= $to_year.'-'.$to_month.'-'.$to_day;

        $_SESSION["salaryfromdate"]=$from_date;
        $_SESSION["salarytodate"]=$to_date;
        header("Location: salary_report_list.php");


      }

}

function getSalaryReport($from_date,$to_date){
  $query = "select * from salary where payment_date between cast('$from_date' as date) and cast('$to_date' as date) order by payment_date asc";
  $rs=get($query);
  return $rs;

}
