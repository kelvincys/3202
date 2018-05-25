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
    <!-- Custom styles for this template -->
    <link href="css/basic.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Concert+One|Fredericka+the+Great|Fredoka+One|Indie+Flower|Kaushan+Script|Love+Ya+Like+A+Sister|Righteous" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Do+Hyeon|IM+Fell+DW+Pica" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/basic.js"></script>
    <script src="js/getplace.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

  

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
       <a class="navbar-brand" href="index.php">
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
                <input type="button" value="Login" onClick="check_data()" class="popbutton">    
              </div>
              
            </form>
  
          </div>


    <div class="parallax"></div>
    <!-- Page Content -->
    <div class="sections">
          <section id="about" class="container-fluid">
          <h1 class="mt-5">The Event Organizing Expert</h1>
          <p>MOMENT® is founded by a group of people who are passionate in creating unforgettable experiences. We guarantee you will have a perfect memory for every important moment of your life.</p>
          <center><a href="aboutus.php"><button>Know more about us</button></a>
      </section>


          <section id="service" class="container-fluid service">
            <h1 class="mt-5">We Bring Your Dreams To Reality</h1>
            <p>Discuss your plan with us and we will try their best to work it out, if you don't have a plan. We can customized an unique experience for you.</p>  
            <center>
            <a href="services.php?id=1"> 
                <div class="photo">
                  <img src="assert/propose.jpg" alt="proposal" class="pbutton">
                  <div class="middle">
                <div class="caption">Secret proposal</div>
                  </div>
                </div>
            </a>
            <a href="services.php?id=2" id="birthday" >
                <div class="photo">
                  <img src="assert/birthday.jpg" alt="birthday" class="pbutton">
                  <div class="middle">
                <div class="caption">Birthday Party</div>
                  </div>
                </div>
            </a>
            <a href="services.php?id=3" id="wedding" >
                <div class="photo">
                  <img src="assert/004.jpg" alt="wedding" class="pbutton">
                  <div class="middle">
                <div class="caption">Engage/Wedding Party</div>
                  </div>
                </div>
            </a>
            </center>
          </section>


          <section id="album" class="container-fluid">
            <h1 class="mt-5">Amazing Moments Of Our Customers</h1>
              <p>We created many amazing experience to our customers in the past. Take a look on some of the wonderful moments.</p>
            <div class="row">
            <div class="col-lg-4">
            </div>
            <div class="col-lg-4">
              <iframe id ="frame" width="560" height="315" src="https://www.youtube.com/embed/fb5Phs2ojJo" frameborder="0" allowfullscreen align="center"></iframe>
              <div>
                <select name="event" id="event">
                  <option value="proposal">Proposal</option>
                  <option value="wedding">Wedding Party</option>
                  <option value="birthday party">Birthday Party</option>
                </select>
                <button type="action" value="search" onclick="getSelectedPlace()" id="change">Change</button>
              </div>
            </div>
            <div class="col-lg-4">
            </div>
            </div>
              <center><a  href="album.php"><button>Know more about our past events</button></a></center>  
          </section>


          <section id="contact" class="container-fluid">
            <form action="contacting.php" class="contactform">
              <h1>Contact us</h1>
              <label for="name">Your Name</label>
              <input type="text" id="name" name="yname" placeholder="Your name..." required>

              <label for="number">Contact number</label>
              <input type="tel" id="number" name="cnumber" placeholder="xx-xxxx-xxxx" required pattern="[0-9]{2}-[0-9]{4}-[0-9]{4}">

              <label for="email">Your email</label>
              <input type="email" id="email" name="yemail" placeholder="Your email..." required>

              <label for="enquiry">Your enquiry</label>
              <textarea id="enquiry" name="enquiry" placeholder="Write something..." style="height:200px" required></textarea>
              <input type="submit" value="Submit">
              

            </form> 
          </section>
        </div>

	</div>
  </body>

</html>
