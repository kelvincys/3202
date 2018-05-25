<?php
  session_start();
  $userid = $_SESSION["id"];
  include("dbtools.inc.php");
  $link = create_connection();
  if(isset($_GET["serviceid"])){
    $serviceid = $_GET["serviceid"];
    $_SESSION["serviceid"] = $serviceid;


  $sql = "INSERT INTO order_detail (user_id, service_id) 
            VALUES ('$userid', '$serviceid')";
  $result = execute_sql($link, "moment", $sql) or die(mysqli_error($link));
    

  

  $sql = "SELECT service_name FROM service WHERE service_id = $serviceid";
  $result = execute_sql($link, "moment", $sql) or die(mysqli_error($link));
  while($row = mysqli_fetch_assoc($result)){
    $servicename = $row["service_name"];
  }

  $sql = "SELECT email, firstname, lastname FROM user_detail WHERE user_id = $userid";
  $result = execute_sql($link, "moment", $sql) or die(mysqli_error($link));
  while($row = mysqli_fetch_assoc($result)){
    $to = $row["email"];
    $name = $row["firstname"]."".$row["lastname"];
  }

  $subject = "Thank you for purchasing our service";
  $message = "Dear".$name."We will reply you soon";
  $headers = "From: kelvinchungkw@gmail.com";
  mail($to,$subject,$message,$headers);
  }
  
  


?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Purchase successful!</title>
    <!--<meta http-equiv="refresh" content="5; url=index.php" />-->
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Lobster|Pacifico|Roboto+Slab" rel="stylesheet">
    <link href="css/success.css" rel="stylesheet">
  </head>
  <body bgcolor="#FFFFFF">      
    <p align="center">Thank you for purchasing our service!<br>
      Your Plan：<font color="#FF0000"><?php  echo $servicename; ?></font><br>
      You can download your reciept <a href="pdfgen.php" target="_blank"><b>here</b></a><br>
      You can mark down your event in your google calendar <a href="google-login.php"><b>here</b></a><br>
      Click <a href="index.php"><b>here</b></a> to return to the home page
    </p>
   
  </body>
</html>