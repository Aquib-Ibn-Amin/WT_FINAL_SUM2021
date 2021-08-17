<?php
require_once 'controllers/LoginController.php';

 ?>
<html >
<head>
    <title>Login_page</title>
</head>
<body>
<script src="js/login_validation.js"></script>
  <fieldset style="background-color:rgb(222 234 240);">
    <form action="" method="post" onsubmit="return validate()" >
        <div align="center"><img src="logo.png" alt="" >  </div>
        <h1 align="center">E-TECHBD</h1>
        <h2 align="center"><b>Electronics E-Commerce Management</b></h2>
        <table align="center">
          <tr>
            <td>Username</td>
            <td>: <input id="username" type="text" name="username" placeholder="Username" value="<?php echo $uname;?>" ><br>
            <span id="err_username" style="color:red;"><?php echo $err_uname;?></span></td>
          </tr>

          <tr>
            <td>Password</td>
            <td>:  <input id="password" name="password" placeholder="Password" value="<?php echo $pass;?>" type="password" >
            <br><span id="err_password" style="color:red;"><?php echo $err_pass;?></span></td>
          </tr>

            <tr>
              <td>
              <td align="center"><input type="submit" name="btn_login" value="Login" ></td>
            </tr>


            <tr>

              <td colspan="2" align="center">Don't have an account? <a href="registration_form.php"> Register here. </a> </td>
            </tr>
        </table>
    </form>
  </fieldset>

</body>
</html>
