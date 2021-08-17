<?php
session_start();
require_once 'models/db_config.php';

$uname="";
$err_uname="";
$pass="";
$err_pass="";
$hasError=false;
if(isset($_POST["btn_login"])){

  if(empty($_POST["username"])){
        $hasError=true;
        $err_uname= "&nbsp;&nbsp;*Username Required";
      }
      elseif (strlen($_POST["username"]) < 5){
        $hasError = true;
        $err_uname = "&nbsp;&nbsp;*Username must be greater than 4 characters";
      }
  elseif(strpos($_POST["username"]," "))
      {
        $hasError = true;
        $err_uname = "&nbsp;&nbsp;*Space is not allowed.";
      }
  else
    {
      $uname = htmlspecialchars($_POST["username"]);

    }

    if(empty($_POST["password"])){
			$hasError=true;
			$err_pass="&nbsp;&nbsp;*Password Required";
		}
		elseif (strlen($_POST["password"]) < 5){
			$hasError = true;
			$err_pass = "&nbsp;&nbsp;*Password must be greater than 4 characters";
		}
    else if(ctype_upper($_POST["password"]) || ctype_lower($_POST["password"]) ){
      $hasError = true;
      $err_pass="&nbsp;&nbsp;*Password should combination of uppercase and lowercase alphabet";
        }
		elseif (!strpos($_POST["password"],"#") && !strpos($_POST["password"],"?") ){
			$hasError = true;
			$err_pass = "&nbsp;&nbsp;*Password should have atleast 1 special character ";
		}


    elseif (is_numeric($_POST["password"])){
    $hasError = true;
    $err_pass = "&nbsp;&nbsp;*Password should have uppercase and lowercase alphabe ";
    	}

    else
  	{
      $l=0;
  		$arr_1=str_split($_POST["password"]);

  		for ($i=0; $i < count($arr_1) ; $i++)
       {
         if (is_numeric($arr_1[$i]))
        {
  				$l++;
          break;

			  }
		   }
     if ($l==0) {
       $hasError = true;
       $err_pass = "&nbsp;&nbsp;*Password should have atleast 1 number ";
     }
     else
     {
       $pass = htmlspecialchars($_POST["password"]);
     }
  	}

    if(!$hasError){



      $as=authenticateAdmin($uname,$pass);
      $es=authenticateEmployee($uname,$pass);
      $ds=authenticateDeliveryMan($uname,$pass);
      // $cs=authenticateCustomer($uname,$pass);
      if ($as === true) {
        // foreach ($admin as $as) {
        //   $admin_fname = $as["f_name"]
        // }
        // $_SESSION["loggedfname"] = $admin_fname;
        $_SESSION["loggeduname"] = $uname;
        $_SESSION["loggedpassword"] = $pass;
        header("Location: admin_dashboard.php");
      }
      elseif ($es === true) {
        $_SESSION["loggeduname"] = $uname;
        $_SESSION["loggedpassword"] = $pass;
        header("Location: dummy_EM.php");
      }
      elseif ($ds === true) {
        $_SESSION["loggeduname"] = $uname;
        $_SESSION["loggedpassword"] = $pass;
        header("Location: dummy_DM.php");
      }
      // elseif ($cs === true) {
      //   $_SESSION["loggeduname"] = $uname;
      //   $_SESSION["loggedpassword"] = $pass;
      //   // header("Location: admin_dashboard.php");
      // }

      echo "Invalid username and password";
      // $err_db = $rs;
      }
  }

  function authenticateAdmin($uname,$pass)
  {
    $query="select *from admin  where  username='$uname' and password='$pass'";
    $rs=get($query);
    if (count($rs)>0){
    return true;
    }
    return false;

  }
  function authenticateEmployee($uname,$pass)
  {
  	$query="select *from users  where  username='$uname' and password='$pass' and role='Employee'";
  	$rs=get($query);
  	if (count($rs)>0){
  	return true;
  	}
  	return false;

  }
  function authenticateDeliveryMan($uname,$pass)
  {
  	$query="select *from users  where  username='$uname' and password='$pass' and role='Delivery man'";
  	$rs=get($query);
  	if (count($rs)>0){
  	return true;
  	}
  	return false;

  }
  // function authenticateCustomer($uname,$pass)
  // {
  //   $query="select *from customer  where  username='$uname' and password='$pass'";
  //   $rs=get($query);
  //   if (count($rs)>0){
  //   return true;
  //   }
  //   return false;
  //
  // }

?>
