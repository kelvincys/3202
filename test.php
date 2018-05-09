<!DOCTYPE html>
<?php include 'logined.php' ?>

<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Moment</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/basic.css" rel="stylesheet">
    <link href="css/service.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Concert+One|Fredericka+the+Great|Fredoka+One|Indie+Flower|Kaushan+Script|Love+Ya+Like+A+Sister|Righteous" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Do+Hyeon|IM+Fell+DW+Pica" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/basic.js"></script>
     <script>
        // Get the modal
        var modal = document.getElementById('myModal');

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on the button, open the modal
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        } 
    </script>


  </head>

  <body>
  	<div class="parallax huge">
      <p class="smallp">MOMENT IS</p>
      <p class="hugep">LOVE,</p> 
      <p class="hugep">DREAM,</p>
      <p class="hugep">HAPPINESS.</p>
    </div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top" >
      <div class="container">
      <div class="effect"></div>
       <a class="navbar-brand" href="#">
          <img src="assert/icon.png"  alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="#">
                <span class="nav-link" >Home</span>
                <span class="line -right"></span>
                <span class="line -top"></span>
                <span class="line -left"></span>
                <span class="line -bottom"></span>
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="#about">
                <span class="nav-link" href="#about">About</span>
                <span class="line -right"></span>
                <span class="line -top"></span>
                <span class="line -left"></span>
                <span class="line -bottom"></span>
              </a>
            </li>
            <li class="nav-item">
              <a href="#service">
              <span class="nav-link" href="#service">Services</span>
              <span class="line -right"></span>
                <span class="line -top"></span>
                <span class="line -left"></span>
                <span class="line -bottom"></span>
              </a>
            </li>
            <li class="nav-item">
              <a href="#album">
              <span class="nav-link" href="#album">Album</span>
              <span class="line -right"></span>
                <span class="line -top"></span>
                <span class="line -left"></span>
                <span class="line -bottom"></span>
              </a>
            <li class="nav-item">
              <a href="#contact">
              <span class="nav-link" >Contact</span>
              <span class="line -right"></span>
                <span class="line -top"></span>
                <span class="line -left"></span>
                <span class="line -bottom"></span>
              </a>
              <button onclick="document.getElementById('poplog').style.display='block'" class="logbutton">
              Login/Sign Up</button>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div id="poplog" class="modal">
  
            <form class="login animate" action="/action_page.php">
                  
              <div class="imgcontainer">
                <span onclick="document.getElementById('poplog').style.display='none'" class="close" title="Close PopUp">&times;</span>
                <img src="assert/icon.png" alt="Avatar" class="avatar">
                <h2 style="text-align:center">Log In</h2>
                <p>New to MOMENT? <a href="register.php" style="font-weight: bold; color:#ff849c">Sign Up</a></p>
              </div>

              <div class="container">
                <input type="username" placeholder="Enter Username" name="uname">
                <input type="password" placeholder="Enter Password" name="psw">        
                <button type="submit">Login</button>    
                <a href="#" style="text-decoration:none; float:left; margin-bottom:26px; margin-left:26px;color:#ff849c">Forgot Password ?</a>
              </div>
              
            </form>
  
          </div>

<button onclick="document.getElementById('testing').style.display='block'" class="logbutton">
              <img src="assert/007.jpg"></button>
  <div id="testing" class="modal">
  
            <form class="login animate" action="/action_page.php">
                  
              <div class="imgcontainer">
                <span onclick="document.getElementById('testing').style.display='none'" class="close" title="Close PopUp">&times;</span>
                <img src="assert/icon.png" alt="Avatar" class="avatar">
                <h2 style="text-align:center">Log In</h2>
                <p>New to MOMENT? <a href="register.php" style="font-weight: bold; color:#ff849c">Sign Up</a></p>
              </div>

              <div class="container">
                <input type="username" placeholder="Enter Username" name="uname">
                <input type="password" placeholder="Enter Password" name="psw">        
                <button type="submit">Login</button>    
                <a href="#" style="text-decoration:none; float:left; margin-bottom:26px; margin-left:26px;color:#ff849c">Forgot Password ?</a>
              </div>
              
            </form>
  
    </div>
    <!-- /.container -->
    <script>
$(document).ready(function(){
    $('body').scrollspy({target: ".navbar", offset: 50});   
});
    </script>
  
  </body>

</html>
