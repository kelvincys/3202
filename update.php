<?php
  //檢查 cookie 中的 passed 變數是否等於 TRUE
  $passed = $_COOKIE["passed"];
	
  /* 如果 cookie 中的 passed 變數不等於 TRUE，
     表示尚未登入網站，將使用者導向首頁 index.html */
  if ($passed != "TRUE")
  {
    header("location:index.php");
    exit();
  }
	
  /* 如果 cookie 中的 passed 變數等於 TRUE，
     表示已經登入網站，則取得使用者資料 */
  else
  {
    require_once("dbtools.inc.php");
	
    //取得 modify.php 網頁的表單資料
    $username = $_POST["username"];
    $password = $_POST["password"]; 
    $fname = $_POST["fname"]; 
    $lname = $_POST["lname"]; 
    $contact = $_POST["contact"]; 
    $email = $_POST["email"]; 
		
    //建立資料連接
    $link = create_connection();
				
    //執行 UPDATE 陳述式來更新使用者資料
    $sql = "UPDATE user SET password = '$password', fname = '$fname',  
            contact = '$contact', email = '$email', WHERE id = $id";
    $result = execute_sql($link, "member", $sql);
		
    //關閉資料連接
    mysqli_close($link);
  }		
?>
<!doctype html>
<html>
  <head>
    <title>Information successfully updated</title>
    <meta charset="utf-8">
  </head>
  <body>
    <center>
      <p align="center">Your information has been successfully updated!<br>       
      You will be redirect to the home page in 5 second, if it doesn't please press <a href="index.php">here</a>
      </p>
    </center>        
  </body>
</html>