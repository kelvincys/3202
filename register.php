<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Moment-The Wedding Party Expert</title>
    <link href="https://fonts.googleapis.com/css?family=Do+Hyeon|IM+Fell+DW+Pica" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/basic.css" rel="stylesheet">
    <link href="css/register.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/basic.js"></script>
    <script src="js/register.js"></script>

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

          <div class="container-fluid" id="register">
            <div class="row">
              <div class="col-md-12 order-md-1">
                <h4>Join the MOMENT now</h4>
                
                <form action="newmember.php" method="post" name="myForm">
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="firstName">First name</label>
                      <input name="fname" type="text" class="form-control" id="firstName" placeholder="" value="">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="lastName">Last name</label>
                      <input name="lname" type="text" class="form-control" id="lastName" placeholder="" value="">
                    </div>
                    
                    <div class="col-md-6 mb-3">
                      <label for="password">Password</label>
                      <input name="password" type="password" class="form-control" id="password" placeholder="" value="">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="comfirmPassword">Comfirm password</label>
                      <input name="re_password" type="password" class="form-control" id="comfirmPassword" placeholder="" value="">
                    </div>
                    
                  </div>

                  <div class="mb-3">
                    <label for="username">Username</label>
                    <div class="input-group">
                      <input name="username" type="text" class="form-control" id="username" placeholder="Username">
                    </div>
                  </div>

                  <div class="mb-3">
                    <label for="email">Email <span class="text-muted"></span></label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="you@example.com">
                  </div>

                  <div class="mb-3">
                    <label for="contact">Phone Number <span class="text-muted"></span></label>
                    <input name="contact" type="" class="form-control" id="contact" placeholder="Your Phone number">
                  </div>
                  <input type="button" value="Register" onClick="check_data()">
                </form>
              </div>
            </div>
          </div>
  </body>

</html>
