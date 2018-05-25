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
    <link href="css/album.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Lobster|Pacifico" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/album.js"></script>
    <script src="js/basic.js"></script>
    <script src="js/youtube.js"></script>
    <script type="text/javascript">
      function photoclick(imgtarget) {
          imglarge.style.display = "block";
          document.getElementById("img01").src = imgtarget.src;
      }

      function spanclose() {
            imglarge.style.display = "none";
      } 
    </script>
  </head>

  <body>
    <!-- Navigation -->
        <nav class="navbar navbar-expand-lg fixed-top" >
      <div class="container">
      <div class="effect"></div>
       <a class="navbar-brand" href="index.php">
          <img src="/assert/icon.png"  alt="logo">
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
              <span class="nav-link" href="#service?id=1">Services</span>
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
                <img src="/assert/icon.png" alt="Avatar" class="avatar">
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

    <div class="container">
        <div class="row">
        <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h1 class="gallery-title">Our Gallery</h1>
        </div>

        <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12" align="center">
            <button class="filter-button" data-filter="all">All</button>
            <button class="filter-button" data-filter="proposal">Secret Proposal</button>
            <button class="filter-button" data-filter="wedding">Wedding Party</button>
            <button class="filter-button" data-filter="birthday">Birthday Party</button>

        </div>
        <br>



            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter proposal">
                <img src="/assert/propose1.jpg" class="img-responsive resize" id="aimg1" onclick="photoclick(this)">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter wedding">
                <img src="/assert/album1.png" class="img-responsive resize" id="aimg2" onclick="photoclick(this)">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter birthday">
                <img src="/assert/birthday1.png" class="img-responsive resize" id="aimg3" onclick="photoclick(this)">
            </div>
            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter proposal">
                <img src="/assert/propose2.jpg" class="img-responsive resize" id="aimg4" onclick="photoclick(this)">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter wedding">
                <img src="/assert/wedding2.jpg" class="img-responsive resize" id="aimg5" onclick="photoclick(this)">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter birthday">
                <img src="/assert/birthday2.png" class="img-responsive resize" id="aimg6" onclick="photoclick(this)">
            </div>
            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter proposal">
                <img src="/assert/propose3.jpg" class="img-responsive resize" id="aimg7" onclick="photoclick(this)">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter wedding">
                <img src="/assert/wedding3.png" class="img-responsive resize" id="aimg8" onclick="photoclick(this)">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter birthday">
                <img src="/assert/birthday3.png" class="img-responsive resize" id="aimg9" onclick="photoclick(this)">

            </div>
            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter proposal">
                <img src="/assert/propose4.jpg" class="img-responsive resize" id="aimg10" onclick="photoclick(this)">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter wedding">
                <img src="/assert/wedding4.jpg" class="img-responsive resize" id="aimg11" onclick="photoclick(this)">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter birthday">
                <img src="/assert/birthday4.jpg" class="img-responsive resize" id="aimg12" onclick="photoclick(this)">
            </div>
          </div>
        </div>
    </div>
                <!-- The Modal -->
            <div id="imglarge" class="imglarge">

              <!-- The Close Button -->
              <span class="close" onclick="spanclose()">&times;</span>

              <!-- Modal Content (The Image) -->
              <img class="imgcontent" id="img01">

            </div>
  </body>

</html>
