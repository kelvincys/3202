<?php
  session_start();
  include("dbtools.inc.php");
  $link = create_connection();
  $userid = $_SESSION['id'];
  $sql = "DELETE FROM user  WHERE user_id=$userid";
  $result = execute_sql($link, "moment", $sql) or die(mysqli_error($link));
  session_destroy();
  header('Location: index.php');


?>