<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Moment</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Do+Hyeon|IM+Fell+DW+Pica" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/basic.css" rel="stylesheet">
    <link href="css/aboutus.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=IM+Fell+DW+Pica|Imprima" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/basic.js"></script>
    <script src="js/googlemap.js"></script>

  </head>

  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top" >
      <div class="container">
      <div class="effect"></div>
       <a class="navbar-brand" href="index.php">
          <img src="assert/icon.png"  alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="index.php">
                <span class="nav-link" >Home</span>
                <span class="line -right"></span>
                <span class="line -top"></span>
                <span class="line -left"></span>
                <span class="line -bottom"></span>
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="aboutus.php">
                <span class="nav-link" href="#about">About</span>
                <span class="line -right"></span>
                <span class="line -top"></span>
                <span class="line -left"></span>
                <span class="line -bottom"></span>
              </a>
            </li>
            <li class="nav-item">
              <a href="services.php?id=1">
              <span class="nav-link" href="#service">Services</span>
              <span class="line -right"></span>
                <span class="line -top"></span>
                <span class="line -left"></span>
                <span class="line -bottom"></span>
              </a>
            </li>
            <li class="nav-item">
              <a href="album.php">
              <span class="nav-link" href="#album">Album</span>
              <span class="line -right"></span>
                <span class="line -top"></span>
                <span class="line -left"></span>
                <span class="line -bottom"></span>
              </a>
            <li class="nav-item">
              <a href="contactus.php">
              <span class="nav-link" >Contact</span>
              <span class="line -right"></span>
                <span class="line -top"></span>
                <span class="line -left"></span>
                <span class="line -bottom"></span>
              </a>
              <?php
                include 'logined.php';
              ?>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div id="poplog" class="modal">
  
            <form class="login animate" action="checkpw.php" name="myForm" method="post">
                  
              <div class="imgcontainer">
                <span onclick="document.getElementById('poplog').style.display='none'" class="close" title="Close PopUp">&times;</span>
                <img src="assert/icon.png" alt="Avatar" class="avatar">
                <h2 style="text-align:center">Log In</h2>
                <p>New to MOMENT? <a href="register.php" style="font-weight: bold; color:#ff849c">Sign Up</a></p>
              </div>

              <div class="container">
                <input type="username" placeholder="Enter Username" name="username">
                <input type="password" placeholder="Enter Password" name="password">        
                <input type="button" value="Login" onClick="check_data()" class="logbutton">    
              </div>
              
            </form>
  
          </div>
    <div class="word">
      <h1>About Us</h1>
      <p><b>Moment®</b> is a modern event organizing company for proposing, wedding party and birthday party. The company established in February of 2018. With over 100 partnerships in Australia, we provide various locations for holding your party.  Our organizing committee are all passionate in making every moment in the party perfect.</p>
    </div>
    <div class="word">
        <h3>Our Vision</h3>
        To bring happiness to celebrations nationwide.<br><br>
 
        <h3>Our Mission</h3>
        Through each party we strive to provide a top-quality customer experience with our amazing event. We help make our guests the life of the party! <br><br>
 
        <h3>Our Core Values</h3>
        1. Party Quality and Customer Experience<br>
        2. Creative<br>
        3. Passionate
    </div>
    <h2>We Have Held Events In These Venues</h2>
    <div id="map" class="container" style=""></div>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDUVBBI2_Yhss8H1Wg48VRMzC4f11CgCCU&callback=initMap">
    </script>
  </body>

</html>
