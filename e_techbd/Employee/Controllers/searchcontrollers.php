<?php 
	$db_server="localhost";
	$db_uname="root";
	$db_pass="";
	$db_name="e_techbd";
	$input="";
	$data=null;
		if(empty($_POST["searchtext"])){
			$hasError=true;
			
		} 
		else{
			$input = $_POST["searchtext"];
		}
		$query = "select * from orders where pro_id='$input'";
                            $conn = mysqli_connect($db_server,$db_uname,$db_pass,$db_name);
                            $result = $conn-> query($query);
                                if($result-> num_rows >0){
                                    while($row = $result-> fetch_assoc()){
                                        $order_id = $row['order_id'];
                                        $st = $row['status'];
                                        $pro_id = $row['pro_id'];
                                        $pro_name = $row['pro_name'];
                                        $rc = $row['ongoing_date'];
                                        $og = $row['ongoing_date'];
                                        $dd = $row['delivered_date'];
                                        echo "<tr>
                                        <td>$order_id</td>
                                        <td>$st</td>
                                        <td>$pro_id</td>
                                        <td>$pro_name</td>
                                        <td>$rc</td>
                                        <td>$og</td>
                                        <td>$dd</td>
                                        </tr>";
                                }
                            
                            }
?>