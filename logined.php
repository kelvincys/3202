<?php

session_start();
$_SESSION['login'] = "1";
if(isset($_SESSION['login'])){
	echo 1;
}
?>