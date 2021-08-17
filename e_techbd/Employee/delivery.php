<?php 
    $oid="";
	$err_oid="";
    $pid="";
	$err_pid="";
	$pname="";
	$err_pname="";
	$pprice="";
	$err_pprice="";
	$quantity="";
	$err_quantity="";
	$day="";
	$err_day="";
	$month="";
	$err_month="";
	$year="";
	$err_year="";
	$cname="";
	$err_cname="";
	$phone="";
	$err_phone="";
	$cemail="";
	$err_cemail="";
	$caddress="";
	$err_caddress="";
	$ostatus="";
	$err_ostatus="";
	
	
	$d= array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16",
	"17","18","19","20","21","22","23","24","25","26","27","28","29","30","31");
	$m=array("January","February","March","April","May","June","July","August","September","October","November","December");
	$y=array("2021","2020","2022","2023",);
	
	
	$hasError=false;
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(empty($_POST["oid"])){
			$hasError=true;
			$err_oid="Order id Required";
		}
		else
		{
			$oid = $_POST["oid"];
		}
		
		
		
			if(empty($_POST["pid"])){
			$hasError=true;
			$err_pid="Product id Required";
		}
		else
		{
			$pid = $_POST["pid"];
		}
		
		if(empty($_POST["pname"])){
			$hasError=true;
			$err_pname="Product name Required";
		}
		else
		{
			$pname = $_POST["pname"];
		}
		
		
		
		if(empty($_POST["pprice"])){
			$hasError=true;
			$err_pprice="Price Required";
		}
		elseif (!is_numeric($_POST["pprice"])){
			$hasError = true;
			$err_pprice = "price must be numeric";
		}
		else
		{
			$pprice = $_POST["pprice"];
		}
		
		
		
		
		if(empty($_POST["quantity"])){
			$hasError=true;
			$err_quantity="Quantity Required";
		}
		elseif (!is_numeric($_POST["quantity"])){
			$hasError = true;
			$err_quantity = "quantity must be numeric";
		}
		else
		{
			$quantity = $_POST["quantity"];
		}
		
		
		
		if(!isset($_POST["day"])){
			$hasError = true;
			$err_day= "All/Something empty";
		}
		else{
			$day = $_POST["day"];
		}
		if(!isset($_POST["month"])){
			$hasError = true;
			$err_day= "All/Something empty";
		}
		else{
			$month = $_POST["month"];
		}
		if(!isset($_POST["year"])){
			$hasError = true;
			$err_day= "All/Something empty";
		}
		else{
			$year = $_POST["year"];
		}
		
		
		
		
		if(empty($_POST["cname"])){
			$hasError=true;
			$err_cname="Customers Name Required";
		}
		elseif (strlen($_POST["cname"]) <=6){
			$hasError = true;
			$err_cname = "Name must be greater than 6 characters";
		}
		else
		{
			$cname = $_POST["cname"];
		}
		
		
		
		if(empty($_POST["phone"])){
			$hasError=true;
			$err_phone="Phone number Required";
		}
		elseif (!is_numeric($_POST["phone"])){
			$hasError = true;
			$err_phone = "Number must be numeric";
		}
		else
		{
			$phone = $_POST["phone"];
		}
		
		
		
		if(empty($_POST["cemail"])){
			$hasError=true;
			$err_cemail="Email Required";
		}
		elseif(!filter_var($_POST["cemail"], FILTER_VALIDATE_EMAIL)){
             $hasError=true;
			$err_cemail ="invalid email";
    }
       else
		{
			$cemail = $_POST["cemail"];
		}
		
		
		
		
	if(empty($_POST["caddress"])){
			$hasError = true;
			$err_caddress = "Address Required";
		}
		else{
			$caddress = $_POST["caddress"];
		}
		
		
	if(empty($_POST["ostatus"])){
			$hasError=true;
			$err_ostatus="Order status Required";
		}
		else
		{
			$ostatus = $_POST["ostatus"];
		}
		
		
		if(!$hasError){
			echo $_POST["oid"]."<br>";
			echo $_POST["pid"]."<br>";
			echo $_POST["pname"]."<br>";
			echo $_POST["pprice"]."<br>";
			echo $_POST["quantity"]."<br>";
			echo $_POST["day"]."<br>";
			echo $_POST["month"]."<br>";
			echo $_POST["year"]."<br>";
			echo $_POST["cname"]."<br>";
			echo $_POST["phone"]."<br>";
			echo $_POST["cemail"]."<br>";
			echo $_POST["caddress"]."<br>";
		    echo $_POST["ostatus"]."<br>";
		}
	}
?>


<html>
<body>
<form action="" method="POST">
<table style="background-color:#FAD7A0; border:3px #D35400 solid;  width:50%" align="center">
<tr>
<td colspan="2" align="center"> <b><i>Delivery Form</i><hr> </b></td><br>
</tr>


<tr>
<td style="color:blue;">Order Id </td>
		<td ><input name="oid"  value="<?php echo $oid ?>" type="text"  placeholder="Enter order id" >
	    <br><span style="color:red;"><?php echo $err_oid; ?></span></td>
</tr>


<tr>
<td style="color:blue;">product Id </td>
		<td ><input name="pid"  value="<?php echo $pid ?>" type="text"  placeholder="Enter product id" >
	    <br><span style="color:red;"><?php echo $err_pid; ?></span></td>
</tr>


<tr>
<td style="color:blue;">Produc Name </td>
		<td ><input name="pname"  value="<?php echo $pname ?>" type="text"  placeholder="Enter product Name" >
	    <br><span style="color:red;"><?php echo $err_pname; ?></span></td>
</tr>

<tr>
<td style="color:blue;">Product Price </td>
		<td ><input name="pprice"  value="<?php echo $pprice ?>" type="text"  placeholder="Enter Product Price" >
	    <br><span style="color:red;"><?php echo $err_pprice; ?></span></td>
</tr>

<tr>
 <td style="color:blue;">Quantity </td>
		<td ><input name="quantity"  value="<?php echo $quantity ?>" type="text"  placeholder="Enter Product quantity" >
	    <br><span style="color:red;"><?php echo $err_quantity; ?></span></td>
</tr>



</tr>
					<tr>
					<td style="color:blue";>Order Date</td>
					<td><select name="day">
							<option selected disabled>Day</option>
							<?php
								foreach($d as $p){
									if($p == $day)
										echo "<option selected>$p</option>";
									else
										echo "<option>$p</option>";
								}
							?>
							
						</select> 
						<select name="month">
							<option selected disabled>Month</option>
							<?php
								foreach($m as $q){
									if($q==$month)
										echo "<option selected>$q</option>";
									else
										echo "<option>$q</option>";
								}
							?>
						</select>
						<select name="year">
							<option selected disabled>Year</option>
							<?php
								foreach($y as $o){
									if($o == $year)
										echo "<option selected>$o</option>";
									else
										echo "<option>$o</option>";
								}
							?>
							
						</select><br>
						<span style="color:red;"><?php echo $err_day;?></span>
					</td>
				</tr>


<tr>
<td style="color:blue;">Customer Name </td>
		<td ><input name="cname"  value="<?php echo $cname ?>" type="text"  placeholder="Enter Customers  Name" >
	    <br><span style="color:red;"><?php echo $err_cname; ?></span></td>
</tr>


<tr>
<td style="color:blue;">Phone </td>
		<td ><input name="phone"  value="<?php echo $phone ?>" type="text"  placeholder="Enter Phone Number" >
	    <br><span style="color:red;"><?php echo $err_phone; ?></span></td>
</tr>


<tr>
<td style="color:blue;">Customer Email </td>
		<td ><input name="cemail"  value="<?php echo $cemail ?>" type="text"  placeholder="Enter Email" >
	    <br><span style="color:red;"><?php echo $err_cemail; ?></span></td>
</tr>


<tr>
<td style="color:blue;">Customers Address </td>
		<td ><input name="caddress"  value="<?php echo $caddress ?>" type="text"  placeholder="Enter Address" >
	    <br><span style="color:red;"><?php echo $err_caddress; ?></span></td>
</tr>


<tr>
<td style="color:blue;">Order Status </td>
		<td ><input name="ostatus"  value="<?php echo $ostatus ?>" type="text"  placeholder="Enter order status" >
	    <br><span style="color:red;"><?php echo $err_ostatus; ?></span></td>
</tr>


<tr>
		
		<td  colspan="2" align="center"><br>
		  <button >Submit</button>
		</td>
		</tr>
		
<tr>
</table>

</form>
</body>
</html>
