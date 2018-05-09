<?php
  //clear cookie
  setcookie("id", "");
  setcookie("passed", "");
	
  //redirect the user
  header("location:index.php");
  exit();
?>