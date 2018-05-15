<?php

session_start();
if(isset($_SESSION['login'])){
	echo "</li>";
	echo "<li class='nav-item'>";
    echo "<a href='#contact'>";
    echo "<span class='nav-link' >User Profile</span>";
    echo "<span class='line -right'></span>";
    echo "<span class='line -top'></span>";
    echo "<span class='line -left'></span>";
    echo "<span class='line -bottom'></span>";
    echo "</a>";
} else{
	echo "<button onclick='document.getElementById('poplog').style.display='block'' class='logbutton' id='loginbutton'>Login/Sign Up</button>";          
}
?>