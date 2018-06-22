<html><body>
<?php 
    error_reporting(0);
session_start();
$user="";
$email="";
$errors=array(); 
    
$connect=new mysqli('localhost','root','','employee');
if($connect->connect_error)
{
  die("connection failed");
}
/* else 
{
	echo("you are registered" );
}
*/
    
if(isset($_POST['register']))
{
	#session_start();
   $username=$_POST['name'];
    $email=$_POST['email'];
    $pass_1=$_POST['password_1'];
	$pass_2=$_POST['password_2'];
    #error checking in the form
	
	if(empty($username)){
        array_push($errors, "username is required");
    }
    
     if(empty($email)){
        array_push($errors, "email is required");
     }
    
     if(empty($pass_1)){
	 array_push($errors, "password is required");
	 }
	 
	 if($pass_1 != $pass_2){
	 array_push($errors, "the two password do not match"); 
	 }
	 
	 
	 /* insert into database registration table users */
	 if(count($errors)==0) {
	 echo "<br>".$username;
     $password=md5($pass_1); #password encryption before storing it in database
     $sql="INSERT INTO employee (name,email,password) VALUES ('$username','$email','$password')";
     mysqli_query($connect,$sql);
	 $_SESSION['username']=$username;
     $_SESSION['success']="you are logged in";
         header('location: session.php');
}

  if (isset($_POST['login']))
{
      $username=$_POST['username'];
      $password=$_POST['password'];
      if(empty($username))
      {
           array_push($errors, "username is required");
      }
      if(empty($password)){
        array_push($errors, "password is required");
     }
      if(count($errors)==0)
      {
          $password=md5($password);
          $query="SELECT * FROM employee WHERE username='$username' AND password='$passowrd'";
          $result=mysqli_query($connect,$query);
          if(mysqli_num_rows($result)==1)
          {
              $_SESSION['username']=$username;
              $_SESSION['success']="you are logged in";
                header('location: session.php');
          }
              
          else
          {
         array_push($errors, "wrong username or password");
              header('location: loginform.php');
          }
      }
      
      
  }
}
   if (isset($_GET['logout'])){
       
       session_destroy();
       unset($_SESSION['username']);
       header('location: loginform.php');
   }
 
?>
    </body>
</html>