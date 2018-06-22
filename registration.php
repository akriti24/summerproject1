<?php include ('db.php'); ?>
<html>
<head><title>
 NTPC : National Thermal Power Corporation
</title></head><body style="background-color:powderblue;">
<h3 style="text-align:center"> Employee Registeration Page </h3>
<div class="header">
<form action="registration.php,process.php" method="POST">
<?php include ('check.php'); ?>
<?php include ('captcha.php'); ?>
<p id="login">register page <br> <br>
    </div> <div class="header">
 Username : <input type="text" name="name" value="username" >
    </div><br>
    <div class="header"> Email: <input type="text" name="email"  value="email"> </div><br>
    <div class="header"> Password: <input type="password" name="password_1"><br></div>
<div class="header">Confirm password  <input type="password" name="password_2">
<?php echo $first_num." ". $operator . " ".$sec_num . "="; ?>
<input type="number" name="answer" > 
    <br></div>
    <div class="header">
        <button type="submit" name="register">  register </button>
<br> already a member? <a href="loginform.php"> Sign in </a>
</p></div></form>
<style>
#login{
	text-align:center;
	color:black;
	font-size:20px;
	}
.header {
    text-align: center;
position :relative;
margin :auto;
border-style :outset;
border-radius: 5px;
padding:2;
}
</style>    
</body>
</html>