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
      
  //檢查帳號是否有人申請
  $sql = "SELECT * FROM user Where  username= '$username'";
  $result = execute_sql($link, "moment", $sql);

  //如果帳號已經有人使用
  if (mysqli_num_rows($result) != 0)
  {
    //釋放 $result 佔用的記憶體
    mysqli_free_result($result);
    
    //顯示訊息要求使用者更換帳號名稱
    echo "<script type='text/javascript'>";
    echo "alert('您所指定的帳號已經有人使用，請使用其它帳號');";
    echo "history.back();";
    echo "</script>";
  }
  
  //如果帳號沒人使用
  else
  {
    //釋放 $result 佔用的記憶體 
    mysqli_free_result($result);
    
    //執行 SQL 命令，新增此帳號
    $sql = "INSERT INTO user_detail (fname, lname, contact, email) 
            VALUES ('$fname', '$lname', '$contact', '$email')";
    $sql = "INSERT INTO user (username, password) 
            VALUES ('$username', '$password')";

    $result = execute_sql($link, "moment", $sql);
  }
  
  //關閉資料連接  
  mysqli_close($link);
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registration successful!</title>
  </head>
  <body bgcolor="#FFFFFF">      
    <p align="center">You are now registered<br>
      Your username：<font color="#FF0000"><?php echo $username ?></font><br>
      Your password：<font color="#FF0000"><?php echo $password ?></font><br>       
      Please remember the username and password，then<a href="index.php">Enjoy the MOMENT with your new account!</a>。
    </p>
  </body>
</html>