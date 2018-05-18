<?php
  session_start();
  $userid = $_SESSION["id"];
  include("dbtools.inc.php");
  $link = create_connection();
  if(isset($_GET["serviceid"])){
    $serviceid = $_GET["serviceid"];
  }
  echo $serviceid;
    
    $sql = "INSERT INTO order_detail (user_id, service_id) 
              VALUES ('$userid', '$serviceid')";
    $result = execute_sql($link, "moment", $sql) or die(mysqli_error($link));
    

  

    $sql = "SELECT service_name FROM service WHERE service_id = $serviceid";
    $result = execute_sql($link, "moment", $sql) or die(mysqli_error($link));
    while($row = mysqli_fetch_assoc($result)){
      $servicename = $row["service_name"];
    }


?>


<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Purchase successful!</title>
    <!--<meta http-equiv="refresh" content="5; url=index.php" />-->
  </head>
  <body bgcolor="#FFFFFF">      
    <p align="center">Thank you for purchasing our service!<br>
      Your Plan：<font color="#FF0000"><?php  echo $servicename; ?></font><br>
      You will be redirect to the home page in 5 second, if it doesn't please press <a href="index.php">here</a>
    </p>
  </body>
</html>