<?php
    session_start();    
    //end the session
    session_destroy();
    //redirect user to home page
    header("location:index.php");
?>