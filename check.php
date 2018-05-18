<?php  
//check.php  
	require_once("dbtools.inc.php");
	$link = create_connection();
	if(isset($_POST["username"]))
	{
	 $username = mysqli_real_escape_string($link, $_POST["username"]);
	 $query = "SELECT * FROM user WHERE username = '".$username."'";
	 $result = mysqli_query($link, $query);
	 echo mysqli_num_rows($result);
	}
<<<<<<< HEAD
	
	if(isset($_POST["email"]))
	{
	 $email = mysqli_real_escape_string($link, $_POST["email"]);
	 $sql = "SELECT * FROM user_detail WHERE email = '".$email."'";
	 $result2 = mysqli_query($link, $sql);
	 echo mysqli_num_rows($result2);
	}
=======
>>>>>>> 9ac34b33b6595bd3804a21d063780a01c61472a3
?>
