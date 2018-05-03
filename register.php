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
    <script src="js/index.js"></script>

  </head>

  <body>
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
              <a href="services.php">
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
                <h4>Join Us in this MOMENT</h4>
                <form class="needs-validation" method="post">
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="firstName">First name</label>
                      <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                      <div class="invalid-feedback">
                        Valid first name is required.
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="lastName">Last name</label>
                      <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                      <div class="invalid-feedback">
                        Valid last name is required.
                      </div>
                    </div>
                    
                    <div class="col-md-6 mb-3">
                      <label for="password">Password</label>
                      <input type="text" class="form-control" id="password" placeholder="" value="" required>
                      <div class="invalid-feedback">
                        Valid password is required.
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="comfirmPassword">Comfirm password</label>
                      <input type="text" class="form-control" id="comfirmPassword" placeholder="" value="" required>
                      <div class="invalid-feedback">
                        Different with previous password
                      </div>
                    </div>
                    
                  </div>

                  <div class="mb-3">
                    <label for="username">Username</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="username" placeholder="Username" required>
                      <div class="invalid-feedback">
                        Your username is required.
                      </div>
                    </div>
                  </div>

                  <div class="mb-3">
                    <label for="email">Email <span class="text-muted"></span></label>
                    <input type="email" class="form-control" id="email" placeholder="you@example.com" required>
                    <div class="invalid-feedback">
                      Please enter a valid email address for shipping updates.
                    </div>
                    
                  </div>

                  <div class="mb-3">
                    <label for="email">Phone Number <span class="text-muted"></span></label>
                    <input type="email" class="form-control" id="email" placeholder="Your Phone number" required>
                    <div class="invalid-feedback">
                      Please enter a valid email address for shipping updates.
                    </div>
                    
                  </div>
                  <input type="submit" value="Register">
                  
            <!-- /.row -->
                </form>
              </div>
            </div>
          </div>
  
  </body>

</html>
