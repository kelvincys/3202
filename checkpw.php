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
  //bind the user information
  $stmt= $link -> prepare ( "SELECT * FROM user WHERE username=?" );
  $stmt->bind_param("s", $_POST["username"]) or die(mysqli_error($link));
  $stmt->execute();
  //get account and password
  $stmt->bind_result($userid, $username, $password); 
  $stmt->fetch();
  $stmt->close();
  //Compare the result
  if(password_verify($_POST["password"],$password)){
    //設定登入者的名稱及等級
    $_SESSION["id"]=$userid;
    $_SESSION["username"]=$username;
    $_SESSION["logined"]="1";

    echo $_SESSION["id"];
    echo $_SESSION["logined"];
    //若帳號等級為 member 則導向會員中心
    header('Location:' . $_SERVER['HTTP_REFERER']);
  } else {
    echo "fail";
  }
}
?>