<?php
session_start();

if(!isset($_SESSION['access_token'])) {
	header('Location: google-login.php');
	exit();	
}

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.1.9/jquery.datetimepicker.min.css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.1.9/jquery.datetimepicker.min.js"></script>
    <script src="js/addevent.js"></script>
    <link href="css/addevent.css" rel="stylesheet">
</head>

<body>

<div id="form-container">
	<input type="text" id="event-title" placeholder="Event Title" autocomplete="off" />
	<select id="event-type"  autocomplete="off">
		<option value="FIXED-TIME">Fixed Time Event</option>
		<option value="ALL-DAY">All Day Event</option>
	</select>
	<input type="text" id="event-start-time" placeholder="Event Start Time" autocomplete="off" />
	<input type="text" id="event-end-time" placeholder="Event End Time" autocomplete="off" />
	<input type="text" id="event-date" placeholder="Event Date" autocomplete="off" />
	<button id="create-event">Create Event</button>
</div>

</body>
</html>