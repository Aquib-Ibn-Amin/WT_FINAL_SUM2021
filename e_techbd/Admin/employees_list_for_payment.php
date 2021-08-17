<?php
require_once 'admin_header.php';
require_once 'controllers/SalaryController.php';
$employees = getAllEmployees();

 ?>

 <div class="table-body">

<input align="right" type="text" name="" value=""><input align="right" type="button" name="" value="Search">
<br><br>
<a style="text-decoration: None;" href="add_employees.php" > Add employees </a>
<br><br>


<table class="content-table">
 <thead>
   <th>Sl#</th>
   <th>Image</th>
   <th>First name</th>
   <th>Last name</th>
   <th>Username</th>
   <!-- <th>Password</th> -->
   <th>Email</th>
   <th>Phone</th>
   <!-- <th>Joining Date</th> -->
   <th>Gender </th>
   <!-- <th>Role</th> -->
   <th>Salary</th>
   <th>Address</th>
   <th>Action</th>
 </thead>
 <tbody>
   <?php
     $i=1;
     foreach ($employees as $e) {
       // $id =$e["id"];
       list($year,$month,$day) = (explode("-",$e["joining_date"]));
       $joining_date = $day.'-'.$month.'-'.$year;
       echo "<tr>";
         echo "<td>$i</td>";
         echo "<td><img width='80px' height='100px' src='".$e["image"]."'></td>";
         echo "<td>".$e["f_name"]."</td>";
         echo "<td>".$e["l_name"]."</td>";
         echo "<td>".$e["username"]."</td>";
         // echo "<td>".$e["password"]."</td>";
         echo "<td>".$e["email"]."</td>";
         echo "<td>".$e["phone"]."</td>";
         // echo "<td>".$joining_date."</td>";
         echo "<td>".$e["gender"]."</td>";
         // echo "<td>".$e["role"]."</td>";
         echo "<td>".$e["salary"]."</td>";
         echo "<td>".$e["address"]."</td>";
         echo'<td> <a href="paying_salary.php?id='.$e["id"].'">Pay</a></td>';
         // echo' <a href="">Delete</a> </td>';
       echo "</tr>";
       $i++;
     }
     // echo "<pre>";
     // print_r($students);
     // echo "</pre>";
     // echo $dept_id;
    ?>

 </tbody>
</table>

 </div>
<?php require_once 'admin_footer.php';?>
