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
    <link href="css/index.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/index.js"></script>

  </head>

  <body>
  	<div class="parallax"></div>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top" >
      <div class="container">
       <a class="navbar-brand" href="#">
          <img src="http://placehold.it/300x60?text=Logo" width="150" height="30" alt="">
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
            </li>

          </ul>
        </div>
      </div>
    </nav>


    <div class="parallax"></div>
    <!-- Page Content -->
    
    <div class="sections">
          <section id="about" class="container">
          <h1 class="mt-5">Logo Nav by Start Bootstrap</h1>
          <p>The logo in the navbar is now a default Bootstrap feature in Bootstrap 4! Make sure to set the width and height of the logo within the HTML. For best results, it's recommended that you use an SVG image as your logo.</p>
      </section>


          <section id="service" class="container">
            <h1 class="mt-5">Logo Nav by Start Bootstrap</h1>
            <p>The logo in the navbar is now a default Bootstrap feature in Bootstrap 4! Make sure to set the width and height of the logo within the HTML. For best results, it's recommended that you use an SVG image as your logo.</p>  
          </section>


          <section id="album" class="container">
            <h1 class="mt-5">Logo Nav by Start Bootstrap</h1>
              <p>The logo in the navbar is now a default Bootstrap feature in Bootstrap 4! Make sure to set the width and height of the logo within the HTML. For best results, it's recommended that you use an SVG image as your logo.</p>  
          </section>


          <section id="contact" class="container">
            <form action="action_page.php">
              <h1>Contact us</h1>
              <label for="name">Your Name</label>
              <input type="text" id="name" name="yname" placeholder="Your name...">

              <label for="number">Contact number</label>
              <input type="text" id="number" name="cnumber" placeholder="Your last name...">

              <label for="email">Your email</label>
              <input type="text" id="email" name="yemail" placeholder="Your email...">

              <label for="enquiry">Your enquiry</label>
              <textarea id="enquiry" name="enquiry" placeholder="Write something..." style="height:200px"></textarea>

              <input type="submit" value="Submit" class="btn btn-default">
              

            </form> 
          </section>

	</div>

    <!-- /.container -->
    <script>
$(document).ready(function(){
    $('body').scrollspy({target: ".navbar", offset: 50});   
});
</script>
  
  </body>

</html>
