<?php
  session_start();
  require_once("dbtools.inc.php");
  
  //get the information of the form
  $username = $_SESSION["username"];
  $fname = $_POST["fname"]; 
  $lname = $_POST["lname"]; 
  $contact = $_POST["contact"]; 
  $email = $_POST["yemail"];   
  $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
  $id = $_SESSION['id'];
  //Connect to the database
  $link = create_connection();
  


      //run SQL command，add account
       $sql = "UPDATE user SET password_hash = '$password' WHERE user_id = $id" or die(mysqli_error($link));
       $result = execute_sql($link, "moment", $sql) or die(mysqli_error($link));
      $sql = "UPDATE user_detail SET email = '$email', firstname ='$fname', lastname='$lname', contact= $contact WHERE user_id = $id " or die(mysqli_error($link));
      $result = execute_sql($link, "moment", $sql) or die(mysqli_error($link));



  //check the username 
  
  //if the username is available
  
  
  //end the connection to database 
  mysqli_close($link);
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registration successful!</title>
    <meta http-equiv="refresh" content="5; url=index.php" />
  </head>
  <body bgcolor="#FFFFFF">      
    <p align="center">Your Detail had been changed<br>
      Your username：<font color="#FF0000"><?php echo $username ?></font><br>
      Your password：<font color="#FF0000"><?php echo $_POST["password"] ?></font><br>       
      You will be redirect to the profile page in 5 second, if it doesn't please press <a href="profile.php">here</a>
    </p>
  </body>
</html>