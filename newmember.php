<?php
  require_once("dbtools.inc.php");
  
  //get the information of the form
  $username = $_POST["username"];
  $password = $_POST["password"]; 
  $fname = $_POST["fname"]; 
  $lname = $_POST["lname"]; 
  $contact = $_POST["contact"]; 
  $email = $_POST["email"];   

  //Connect to the database
  $link = create_connection();
      
  //check the username 
  $sql = "SELECT * FROM user Where  username= '$username'";
  $result = execute_sql($link, "moment", $sql);

  //if username has been used
  if (mysqli_num_rows($result) != 0)
  {
    //release $result memory
    mysqli_free_result($result);
    
    //Show message to change the username
    echo "<script type='text/javascript'>";
    echo "alert('The username has been used, please change another username');";
    echo "history.back();";
    echo "</script>";
  }
  
  //if the username is available
  else
  {
    //release $result memory
    mysqli_free_result($result);
    
    //run SQL command，add account
    $sql = "INSERT INTO user_detail (fname, lname, contact, email) 
            VALUES ('$fname', '$lname', '$contact', '$email')";
    $sql = "INSERT INTO user (username, password) 
            VALUES ('$username', '$password')";

    $result = execute_sql($link, "moment", $sql);
  }
  
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
    <p align="center">Thank you for joining the MOMENT!<br>
      Your username：<font color="#FF0000"><?php echo $username ?></font><br>
      Your password：<font color="#FF0000"><?php echo $password ?></font><br>       
      You will be redirect to the home page in 5 second, if it doesn't please press <a href="index.php">here</a>
    </p>
  </body>
</html>