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
	$message = "Dear".$name. "\n Thank you for contacting us. \n We will reply you soon";
	$headers = "From: kelvinchungkw@gmail.com";
	mail($to,$subject,$message,$headers);
	header('Location: ' . $_SERVER['HTTP_REFERER']);
	exit;
?>