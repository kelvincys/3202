<?php
session_start();
if(!isset($_SESSION['login'])){
  //header('Location:' . $_SERVER['HTTP_REFERER']);
}else{
 // include("dbtools.inc.php");
  //$link = create_connection();
}
?>

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
    <script src="js/check.js"></script>

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
            </li>
            <li class="nav-item">
              <a href="profile.php">
              <span class="nav-link" >User Profile</span>
              <span class="line -right"></span>
                <span class="line -top"></span>
                <span class="line -left"></span>
                <span class="line -bottom"></span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

          <div class="container-fluid" id="registerform">
            <div class="row">
              <div class="col-md-12 order-md-1">
                <h4>Update Your Detail</h4>
                
                <form action="editdetail.php" method="post" name="mynewForm">
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="firstName">First name</label>
                      <input name="fname" type="text" class="form-control" id="firstName" placeholder="">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="lastName">Last name</label>
                      <input name="lname" type="text" class="form-control" id="lastName" placeholder="">
                    </div>
                    
                    <div class="col-md-6 mb-3">
                      <label for="password">Password</label>
                      <input name="password" type="password" class="form-control" id="password" placeholder="">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="comfirmPassword">Comfirm password</label>
                      <input name="re_password" type="password" class="form-control" id="comfirmPassword" placeholder="">
                    </div>
                    
                  </div>

                  <div class="mb-3">
                    <label for="email">Email <span class="text-muted"></span></label>
                    <input name="yemail" type="email" class="form-control" id="email_input" placeholder="you@example.com" >
                    <span id="estatus"></span>
                  </div>

                  <div class="mb-3">
                    <label for="contact">Phone Number <span class="text-muted"></span></label>
                    <input name="contact" type="contact" class="form-control" id="contact" placeholder="Your Phone number">
                  </div>
                  <input type="button" value="Update" onClick="check_editinfo()">
                  <input type="reset" value="Reset">
                </form>
              </div>
            </div>
          </div>
  </body>

</html>
