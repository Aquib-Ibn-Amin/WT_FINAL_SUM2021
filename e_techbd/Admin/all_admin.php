<?php
require_once 'admin_header.php';
require_once 'controllers/AdminController.php';
$admin = getAllAdmin();

 ?>
 <div class="table-body">

     <input align="right" type="text" name="" value=""><input align="right" type="button" name="" value="Search">
     <br><br>
     <a style="text-decoration: None;" href="add_admin.php" > Add employees </a>
     <br><br>


     <table border="1" class="content-table">
       <thead>
         <th>Sl#</th>
         <th>Image</th>
         <th>First name</th>
         <th>Last name</th>
         <th>Username</th>
         <th>Password</th>
         <th>Email</th>
         <th>Phone</th>
         <th>Joining Date</th>
         <th>Gender </th>
         <th>Role</th>
         <!-- <th>Salary</th> -->
         <th>Address</th>
         <th>Action</th>
       </thead>
       <tbody>
         <?php
           $i=1;
           foreach ($admin as $a) {
             // $id =$e["id"];
             list($year,$month,$day) = (explode("-",$a["joining_date"]));
             $joining_date = $day.'-'.$month.'-'.$year;
             echo "<tr>";
               echo "<td>$i</td>";
               echo "<td><img width='80px' height='100px' src='".$a["image"]."'></td>";
               echo "<td>".$a["f_name"]."</td>";
               echo "<td>".$a["l_name"]."</td>";
               echo "<td>".$a["username"]."</td>";
               echo "<td>".$a["password"]."</td>";
               echo "<td>".$a["email"]."</td>";
               echo "<td>".$a["phone"]."</td>";
               echo "<td>".$joining_date."</td>";
               echo "<td>".$a["gender"]."</td>";
               echo "<td>".$a["role"]."</td>";
               // echo "<td>".$a["salary"]."</td>";
               echo "<td>".$a["address"]."</td>";
               echo'<td > <a class="btn_edit" href="edit_admin.php?id='.$a["id"].'">Edit</a>';
               echo'<a class="btn_delete" href="delete_admin.php?id='.$a["id"].'">Delete</a></td>';
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
