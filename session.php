<?php include('db.php'); 
if (empty($_SESSION['name'])){
 header('location: loginform.php');
} 
?>
<!DOCTYPE html>
<html>
    <body>
        
<?php if(isset($_SESSION['success'])) : ?>
        <h3>
            <?php
             echo $_SESSION['success'];
             unset($_SESSION['success']);
            ?>
        </h3>
        <?php endif ?>
<?php if(isset($_SESSION["name"])):?>
 <p> welcome <strong>       
<?php	echo $_SESSION['name']; ?>
     </strong> </p>
        <p>
            <a href="session.php?logout='1'" style="color:red;"> logout </a> </p>
            <?php endif ?>
</body>
</html>