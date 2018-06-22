<?php include ('db.php'); ?>

<html>
<head><title>
 NTPC : National Thermal Power Corporation
</title></head><body style="background-color:powderblue;">
<h3 style="text-align:center">login in </h3>
<div class="header">
<form action="loginform.php" method="POST">
<p id="login">login page <br>
    <?php include ('check.php'); ?>
username : <input type="text" name="name"><br>
password  : <input type="password" name="password">
    <button type="submit" name="login">  login </button>
<p> Not yet a member? <a href="registration.php"> Register </a>
</p></div></form>
<style>
#login{
	text-align:center;
	color:black;
    }
.header {
position :relative;
margin :5px;
border-style :double;
}
</style>
</body></html>