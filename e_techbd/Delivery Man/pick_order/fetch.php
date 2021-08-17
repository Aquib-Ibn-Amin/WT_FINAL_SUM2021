<?php

//fetch.php

$connect = new PDO("mysql:host=localhost;dbname=e_techbd", "root", "");

$query = "SELECT * FROM orders ";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$total_row = $statement->rowCount();
$output = '
<table class="table table-striped table-bordered">
	<tr>
		<th>Order ID</th>
        <th>Product ID</th>
		<th>Product Name</th>
        <th>Ammount</th>
        <th>Payment</th>
		<th>Picked</th>
        <th>Action</th>
	</tr>
';
if($total_row > 0)
{
	foreach($result as $row)
	{
		$output .= '
		<tr>
            <td width="40%">'.$row["order_id"].'</td>
            <td width="40%">'.$row["pro_id"].'</td>
            <td width="40%">'.$row["pro_name"].'</td>
            <td width="40%">'.$row["ammount"].'</td>
            <td width="40%">'.$row["payment"].'</td>
			<td width="40%">'.$row["picked"].'</td>
			<td width="10%">
				<button type="button" name="delete" class="btn btn-primary btn-xs delete" id="'.$row["order_id"].'">Picked</button>
			</td>
		</tr>
		';
	}
}
else
{
	$output .= '
	<tr>
		<td colspan="4" align="center">Data not found</td>
	</tr>
	';
}
$output .= '</table>';
echo $output;
?>
