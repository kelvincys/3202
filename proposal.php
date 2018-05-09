<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Moment-The Wedding Party Expert</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/basic.css" rel="stylesheet">
    <link href="css/service.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
    <!-- Navigation -->
   
    <center>
    <img src="assert/008.jpg" width=100%></img>
    </center>
    <h1>Proposal</h1>
    
        <button onclick="document.getElementById('testing').style.display='block'" class="logbutton">
              <img src="assert/007.jpg" width="365"></button>
          <div id="testing" class="modal">
          
                    <form class="login animate" action="/action_page.php">
                          
                      <div class="imgcontainer">
                        <span onclick="document.getElementById('testing').style.display='none'" class="close" title="Close PopUp">&times;</span>
                        <img src="assert/007.jpg" alt="product1" width="365">
                        <h2 style="text-align:center">This is Proposal 1</h2>
                        
                      </div>

                      <div class="container">
                        <input type="username" placeholder="Enter Username" name="uname">
                        <input type="password" placeholder="Enter Password" name="psw">        
                        <button type="submit">Login</button>    
                        <a href="#" style="text-decoration:none; float:left; margin-bottom:26px; margin-left:26px;color:#ff849c">Forgot Password ?</a>
                      </div>
                      
                    </form>
          
            </div>


   
  </body>

</html>
