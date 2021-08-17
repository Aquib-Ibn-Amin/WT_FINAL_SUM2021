<?php include('../includes/header.php'); ?>
<head>
    <link rel="stylesheet" href="../styles/style1.css" media="all"/>
<div class="container">
<div class="about-section">
  <h1>Contact Us </h1>
</div>
<br><br>
  <form action="action_page.php">

    <label for="fname">Email</label>
    <input type="text" id="email" name="email" placeholder="Your Email..">

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Country</label>
    <?php include('../includes/country_list.php'); ?>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>
</div>