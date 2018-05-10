<?php
  require_once("dbtools.inc.php");
  
  //get the information of the form
  $username = $_POST["username"];
  $fname = $_POST["fname"]; 
  $lname = $_POST["lname"]; 
  $contact = $_POST["contact"]; 
  $email = $_POST["email"];   
  $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
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
    $sql = "INSERT INTO user (username, password_hash) 
            VALUES ('$username', '$password')";
            //or die("1");
    $result = execute_sql($link, "moment", $sql);
    //or die("2");
    $sql1 = "SELECT MAX(user_id) as 'max_id' FROM user";
    $result1 = execute_sql($link, "moment", $sql1);

    $row = mysqli_fetch_array($result1,MYSQLI_ASSOC);
    $newid = $row['max_id'];
    echo $newid;    
    $sql = "INSERT INTO user_detail (user_id, firstname, lastname, contact, email) 
            VALUES ('$newid','$fname', '$lname', '$contact', '$email')";
    $result = execute_sql($link, "moment", $sql)
    or die("7");
    

    //$sql = "INSERT INTO user (username, password_hash) 
            //VALUES ('$username', '$password')";
    //$result = execute_sql($link, "moment", $sql);
   // $sql1 = "SELECT MAX(user_id) FROM user";
    //$id1 = execute_sql($link, "moment", $sql1);
    //var $id = mysql_result($id1, 0);
   // $sql2 = "INSERT INTO user_detail (user_id, fname, lname, contact, email) 
            //VALUES ('$id','$fname', '$lname', '$contact', '$email')";
    //$result = execute_sql($link, "moment", $sql2);
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
      Your password：<font color="#FF0000"><?php echo $_POST["password"] ?></font><br>       
      You will be redirect to the home page in 5 second, if it doesn't please press <a href="index.php">here</a>
    </p>
  </body>
</html>