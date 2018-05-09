<?php
  require_once("dbtools.inc.php");
  header("Content-type: text/html; charset=utf-8");
  
  //get the information
  $account = $_POST["username"]; 
  $email = $_POST["email"];
  $show_method = $_POST["show_method"]; 

  //connect to database
  $link = create_connection();
			
  //check if the account exist
  $sql = "SELECT username, password FROM user WHERE 
          username = '$username' AND email = '$email'";
  $result = execute_sql($link, "moment", $sql);

  //if the account doesn't exist
  if (mysqli_num_rows($result) == 0)
  {
    //notice the user the account doesn't exist
    echo "<script type='text/javascript'>
            alert('The account doesn't exist, please check if the information is correct or);
            history.back();
          </script>";
  }
  else  //if the account exist
  {
    $row = mysqli_fetch_object($result);
    $name = $row->name;
    $password = $row->password;
    $message = "
      <!doctype html>
      <html>
        <head>
          <title></title>
          <meta charset='utf-8'>
        </head>
        <body>
          $name Your account information as below：<br><br>
          　　Username：$account<br>
          　　Password：$password<br><br>
            <a href='http://localhost/ch19/index.html'>Press here to log in</a>
          </body>
      </html>
    ";
	
    if ($show_method == "show")
    {
      echo $message;   //show the account information
    }
    else
    {
      $subject = "=?utf-8?B?" . base64_encode("account message") . "?=";
      $headers  = "MIME-Version: 1.0\r\nContent-type: text/html; charset=utf-8\r\n";
      mail($email, $subject, $message, $headers);	

      //notice the user the email has been sent
      echo "$name Your information has been sent to $email<br><br>
            <a href='index.html'>Press here to login</a>";				
    }
  }

  //release $result momery 
  mysqli_free_result($result);
		
  //close the connection to the database
  mysqli_close($link);
?>