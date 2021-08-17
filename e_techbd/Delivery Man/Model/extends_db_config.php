<?php
	$db_server="localhost";
	$db_uname="root";
	$db_pass="";
	$db_name="e_techbd";

	
	
	function executes($query){   //responsible for running insert,update,delete
		global $db_server,$db_uname,$db_pass,$db_name;
		$conn = mysqli_connect($db_server,$db_uname,$db_pass,$db_name);
		if($conn){
			if(mysqli_query($conn,$query)){
				return true;
			}
			else{
				return mysqli_error($conn);
			}
		}
	}
	
	function gets($query){ //responsible for running select queires
		global $db_server,$db_uname,$db_pass,$db_name;
		$conn = mysqli_connect($db_server,$db_uname,$db_pass,$db_name);
		$data = array();
		if($conn){
			$result = mysqli_query($conn,$query);
			while($row = mysqli_fetch_assoc($result)){
				$data[] = $row;
			}
		}
		return $data;
	}

	function RetriveData1($query){ //responsible for running select queires
		$data=null;
		global $db_server,$db_uname,$db_pass,$db_name;
		$conn = mysqli_connect($db_server,$db_uname,$db_pass,$db_name);
		$result = mysqli_query($conn,$query);
		while($row = mysqli_fetch_array($result)){
			$data = $row['phone'];
		}
		return $data;
	}

	

	function RetriveCart5($query){ //responsible for running select queires
		$data=null;
		global $db_server,$db_uname,$db_pass,$db_name;
		$conn = mysqli_connect($db_server,$db_uname,$db_pass,$db_name);
		$result = mysqli_query($conn,$query);
		while($row = mysqli_fetch_array($result)){
			$data = $row['cart_id'];
		}
		return $data;
	}

	function RetriveCart6($query){ //responsible for running select queires
		$data=null;
		global $db_server,$db_uname,$db_pass,$db_name;
		$conn = mysqli_connect($db_server,$db_uname,$db_pass,$db_name);
		$result = mysqli_query($conn,$query);
		while($row = mysqli_fetch_array($result)){
			$data = $row['customer_id'];
		}
		return $data;
	}

	function RetriveCart7($query){ //responsible for running select queires
		$data=null;
		global $db_server,$db_uname,$db_pass,$db_name;
		$conn = mysqli_connect($db_server,$db_uname,$db_pass,$db_name);
		$result = mysqli_query($conn,$query);
		while($row = mysqli_fetch_array($result)){
			$data = $row['first_name'];
		}
		return $data;
	}

    function RetriveCart8($query){ //responsible for running select queires
		$data=null;
		global $db_server,$db_uname,$db_pass,$db_name;
		$conn = mysqli_connect($db_server,$db_uname,$db_pass,$db_name);
		$result = mysqli_query($conn,$query);
		while($row = mysqli_fetch_array($result)){
			$data = $row['last_name'];
		}
		return $data;
	}



?>