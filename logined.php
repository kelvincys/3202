<?php
    session_start();
    if(!isset($_SESSION['logined'])){
    
?>
    <button onclick="document.getElementById('poplog').style.display='block'" class="logbutton" style="  font-family: 'IM Fell DW Pica', serif; font-family: 'Do Hyeon', sans-serif;">
              Login/Sign Up</button>
	
<?php
        if(!isset($_SESSION)) 
        { 
            session_start(); 
        } 
    } else {
?>
    </li>
    <li class="nav-item">
    <a href="profile.php">
    <span class="nav-link" >User Profile</span>
    <span class="line -right"></span>
    <span class="line -top"></span>
    <span class="line -left"></span>
    <span class="line -bottom"></span>
    </a>
<?php
   } 
?>