<?php
  require_once("dbtools.inc.php");
  header("Content-type: text/html; charset=utf-8");
	
  //get the form information
  $username = $_POST["username"]; 	
  $password = $_POST["password"];

  //connect to the database
  $link = create_connection();
					
  //check whether the username and password are correct or not
  $sql = "SELECT * FROM user Where username = '$username' AND password_hash = '$password'";
  $result = execute_sql($link, "moment", $sql);

  //if the username and password are correct
  if (mysqli_num_rows($result) == 0)
  {
    //release $result memory
    mysqli_free_result($result);
	
    //end connection to the database
    mysqli_close($link);
		
    //showing message when wrong information are filled in
    echo "<script type='text/javascript'>";
    echo "alert('Username or Password was entered incorrectly.');";
    echo "history.back();";
    echo "</script>";
  }
	
  //if the information is correct
  else
  {
    //get id 
    $id = mysqli_fetch_object($result)->id;
	
    //release $result memory
    mysqli_free_result($result);
		
    //close the connection
    mysqli_close($link);

    //add information to cookies
    setcookie("id", $id);
    setcookie("passed", "TRUE");		
    header("location:main.php");		
  }
?>