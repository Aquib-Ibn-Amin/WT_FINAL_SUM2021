<?php
session_start();
  // if ((!isset($_SESSION["loggeduname"])) && (!isset($_SESSION["loggedpassword"]))) {
  //   header("Location: login_form.php");
  // }
 ?>

<html>
	<head>
		<link rel="stylesheet" href="style/admindashboard.css">
		<link rel="stylesheet" href="style/allstyle.css">
		<link rel="stylesheet" href="style/form.css">
	</head>
	<body>
		<script src="js/admindashboard.js"></script>
		<div id="logo"><img src="logo.png" alt="" >  </div>
		<!-- <h1 align="center">E-TECHBD</h1>
		<h2 align="center"><b>Electronics E-Commerce Management</b></h2> -->
		<div id="welcomeUname">
 				Welcome <?php echo   $_SESSION["loggeduname"] ; ?>
		</div>
		<div id="settingmenu">
			<a align="left" style="text-decoration: None;" href="" > Profil </a><br>
			<a align="center" style="text-decoration: None;" href="" > Change password </a><br>
			<a align="center" style="text-decoration: None;" href="" > Logout </a>
		</div>


		<!--menu ends-->
		<table align="center" id="menubar">
		<tr class="btn_menu">
			<td id="btn_dash"><a  href="admin_dashboard.php" > Dashboard </a></td>
			<td> <button id="btn_admin" onclick="viewAdmin()"> Manage admin </button></td>
			<td> <button id="btn_employees" onclick="viewEmployees()"> Manage employees </button></td>
			<td> <button id="btn_salary" onclick="viewSalary()"> Manage salary </button></td>
			<td><button id="btn_category" onclick="viewCategory()"> Manage categories </button><br></td>
			<td> <button id="btn_product" onclick="viewProduct()"> Manage Products </button> </td>
			<td> <button id="btn_voucher" onclick="viewVoucher()"> Manage discount voucher </button> </td>
			<td><button id="btn_report" onclick="viewReport()"> Generate report </button></td>
		</tr>
		<tr>
			<td></td>
			<td>
				<div id="manageAdmin">
					<a  href="all_admin.php" > View admin list </a><br><br>
					<div id="btn_add_admin" ><a  href="add_admin.php" > Add admin </a>	</div>
				</div>
			</td>
			<td>
				<div id="manageEmployees">
					<a  href="employees_list.php" > View employees list </a><br><br>
					<div id="btn_add_employees" >	<a href="add_employees.php" > Add employees </a></div>

				</div>
			</td>
			<td>
				<div id="manageSalary">
					<div id="btn_emp_list_for_pay" ><a  href="employees_list_for_payment.php" > Payment  </a></div><br>
					<div id="btn_paid_list" >	<a  href="paid_list.php" > Payed list </a></div>
				</div>
			</td>
			<td >
				<div id="manageCate">
					<div id="btn_all_categories" ><a  href="allcategories.php" > View categories </a></div><br>
					<div id="btn_add_category" >	<a  href="addcategory.php" > Add categories </a></div>
				</div>

			</td>
			<td>
				<div id="manageProducts">
					<div id="btn_all_product" ><a href="all_products.php" > Show product list </a></div><br>
					<div id="btn_add_product" >	<a  href="add_product.php" > Add Product </a></div>
				</div>
			</td>
			<td>
				<div id="manageVoucher">
					<div id="btn_all_categories" ><a  href="allcategories.php" > View categories </a></div><br>
					<div id="btn_add_category" ><a  href="addcategory.php" > Add categories </a></div>
				</div>
			</td>
			<td>
				<div id="manageReport">
					<div id="btn_employees_report" ><a  href="employees_report.php" > Work Report</a></div><br>
					<a  href="product_report.php" > Product Report </a> <br> <br>
					<div id="btn_salary_report" ><a  href="salary_report.php" >Salary Report</a></div>
				</div>
			</td>
		</tr>
		</table>
		<br><br>

		<!--menu ends-->
