<?php
  require_once("dbtools.inc.php");
  header("Content-type: text/html; charset=utf-8");
	
  //get the form information
  $username = $_POST["username"]; 	
  $password = $_POST["password"];

  //connect to the database
  $link = create_connection();
					
  //check whether the username and password are correct or not
  session_start();
  if(isset($_POST["username"]) && isset($_POST["password"])){
  //繫結登入會員資料
  $query_RecLogin = "SELECT username, password, FROM user WHERE username=?";
  $stmt=$db_link->prepare($query_RecLogin);
  $stmt->bind_param("s", $_POST["username"]);
  $stmt->execute();
  //取出帳號密碼的值綁定結果
  $stmt->bind_result($username, $password); 
  $stmt->fetch();
  $stmt->close();
  //比對密碼，若登入成功則呈現登入狀態
  if(password_verify($_POST["password"],$password)){
    //設定登入者的名稱及等級
    $_SESSION["loginMember"]=$username;
    $_SESSION["memberLevel"]=$level;
    //若帳號等級為 member 則導向會員中心
    header("Location: index.php?errMsg=1");
  }
}
?>