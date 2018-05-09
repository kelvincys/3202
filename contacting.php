<?php
	$to = $_REQUEST['yemail'];
	$name = $_REQUEST['yname'];
	$subject = "Thank you for conatct us";
	$message = "Dear".$name."We will reply you soon";
	$headers = "From: kelvinchungkw@gmail.com";
	mail($to,$subject,$message,$headers);
	
?>