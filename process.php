<?php 
error_reporting(0);
session_start();
$answer= $_SESSION["answer"];
$user_answer= $_POST["answer"];
if($answer == $user_answer)
{
	echo"Submit the form";
}
else
{
	echo"error : captcha validation fails";
}
?>