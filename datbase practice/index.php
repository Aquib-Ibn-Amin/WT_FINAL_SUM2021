<?php
include'header.php';
/*$db_server="localhost";
$db_uname="root";
$db_pass="";
$db_name="wt_sum21";

$conn = mysqli_connect($db_server,$db_uname,$db_pass,$db_name);*/
include 'db_confiq.php';
if($conn){
	/*//$query ="insert into users values(NULL,' hasan','Hasan','123')";
	//$query ="DELETE FROM users where id='5'";
	//$query ="UPDATE users SET name='Doe' WHERE id='2'";
	
	if( mysqli_query($conn,$query)){
		echo "row inserted";
	}
	else{
		echo mysqli_error($conn);
	}*/
	$query="select * from users";
	$result=mysqli_query($conn,$query);
	echo"<table border='1'>";
	echo"<tr>
	<th>id</th><th>Name</th><th>Username</th>
	</tr>";
	while($row=mysqli_fetch_assoc($result)){
		echo"<tr>";
		echo "<td>".$row["id"]."</td>";
		echo "<td>".$row["name"]."</td>";
		echo "<td>".$row["username"]."</td>";
		echo "</tr>";
	}
	echo"</table>";	
	//echo $row["id"]." ".$row["name"]. "<br>";
	
}
else{
	echo mysqli_connect_error();
}
include 'footer.php';
?>