<?php
	session_start();
	include("dbtools.inc.php");
    $link = create_connection();
    $contact = $_REQUEST['cnumber'];
    $message = $_REQUEST['enquiry'];
	$to = $_REQUEST['yemail'];
	$name = $_REQUEST['yname'];
	if(isset($_SESSION['id'])){
		$id = $_SESSION['id'];
		$sql = "INSERT INTO enquiry (user_id, name,contact,email,enquiry) 
		VALUES ('$id', '$name','$contact','$to','$message')";
        $result = execute_sql($link, "moment", $sql) or die(mysqli_error($link));
	}else{
		$sql="INSERT INTO enquiry ( name,contact,email,enquiry) 
            VALUES ( '$name','$contact','$to','$message')";
        $result = execute_sql($link, "moment", $sql) or die(mysqli_error($link));
	}
	$subject = "Thank you for contact us";
	$message = "Dear ".$name. "\nThank you for contacting us. \nWe will reply you soon \nIf you did not recieve an email from us in the next week, please send an email to enquiry@moment.com \n\nMoment 2018\nTel:02-1234-1234\nEmail:enquiry@moment.com";
	$headers = "From: moment3202@gmail.com";
	mail($to,$subject,$message,$headers);
	header('Location: ' . $_SERVER['HTTP_REFERER']);
	exit;
?>