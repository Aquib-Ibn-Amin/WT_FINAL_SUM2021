<?php 

    $email="";
    $err_email="";
    $pass="";
    $err_pass="";
    $incorrect = "";
    $hasError=false;
    session_start();
  
    if ($_SERVER["REQUEST_METHOD"]== "POST"){
        
        if(empty($_POST["email"])){
                $hasError=true;
                $err_email="Email Required !";
        }
      
        else
        {
            $email = $_POST["email"];
            
        }	
            
            
        
        if(empty($_POST["pass"])){
            $hasError=true;	
            $err_pass="Password Required!";
            
        }
        else
        {
            $pass=$_POST["pass"];
        }

        if(!$hasError){
            $_SESSION['useremail'] = $email;
            $_SESSION['userpass'] = $pass;
            if(authenticateUser($email,$pass)){
                $_SESSION['login']= "isLogined";
                header("Location: dashboard.php");
            }
            else{
                $hasError = true;
                $incorrect = "Invalid password or email!";
            }
        }  
    }


    function get($query){
        $conn = mysqli_connect("localhost","root","","e_techbd");
		$data = array();
		if($conn){
			$result = mysqli_query($conn,$query);
			while($row = mysqli_fetch_assoc($result)){
				$data[] = $row;
			}
		}
		return $data;
    }
    function authenticateUser($uname,$pass){
		$query = "select * from deliveryman where email='$uname' and password='$pass'   ";
		$rs = get($query);
		if(count($rs) > 0){
			return true;
		}
		return false;
		
	}


?>