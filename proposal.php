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
        
        
        // // Get the modal
        // var modal = document.getElementById('myModal');

        // // Get the button that opens the modal
        // var btn = document.getElementById("myBtn");

        // // Get the <span> element that closes the modal
        // var span = document.getElementsByClassName("close")[0];

        // // When the user clicks on the button, open the modal
        // btn.onclick = function() {
        //     modal.style.display = "block";
        // };

        // // When the user clicks on <span> (x), close the modal
        // span.onclick = function() {
        //     modal.style.display = "none";
        // };

        // // When the user clicks anywhere outside of the modal, close it
        // window.onclick = function(event) {
        //     if (event.target == modal) {
        //         modal.style.display = "none";
        //     }
        // };

        
    </script>
  </head>

  <body>

   
    <center>
    <img src="assert/008.jpg" width=100%></img>
    </center>
    <h1>Proposal</h1>
    <div class="container-fluid">
        <div class="row">
            <?php
                include("dbtools.inc.php");
                $link = create_connection();
                $sql = "SELECT * FROM service WHERE product_type = '1'";
                $result = execute_sql($link, "moment", $sql) or die(mysqli_error($link));
                while($row = mysqli_fetch_assoc($result)) {
                    $name = $row['service_name'];
                    $price = $row['price'];
                    $detail = $row['product_detail'];
                    $paypalid = $row['paypalid'];
                    $tmpassert = $row['assertid'];
                    $assertid = str_replace("assert/", "", $tmpassert);
                    echo "<div class='col-lg-4'>";
                    echo '<button  class="logbutton probutton" data-assertid='.$assertid.' data-paypalid='.$paypalid.' > <img src="assert/'.$assertid.'" width="100%"></button>';
                    echo"</div>";
                }
            ?>
        </div>
    </div>
        <button  class="logbutton" onclick="openbox('UXBNHAXQSXH2A','assert/007.jpg')">
              <img src="assert/007.jpg" width="365"></button>
          <div id="testing" class="modal">
          
                    <div class="login animate">
                          
                      <div class="imgcontainer">
                        <span onclick="document.getElementById('testing').style.display='none'" class="close" title="Close PopUp">&times;</span>
                        <img alt="product1" width="365" id="productimg">
                        <h2 style="text-align:center">This is Proposal 1</h2>
                        
                      </div>

                      <div class="container">
                        <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" id="paypalid">
                            <input type="image" src="https://www.sandbox.paypal.com/en_AU/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
                            <img alt="" border="0" src="https://www.sandbox.paypal.com/en_AU/i/scr/pixel.gif" width="1" height="1">
                        </form>



                      </div>
                      
                    </div>

            </div>
            <script type="text/javascript">
                $('.probutton').onclick(function(){
                    var button = $(this);
                    var assertid = button.data.attr("assertid");
                    var paypalid = button.data.attr("paypalid");
                    console.log("1");
                });
            </script>
<!-- document.getElementById('testing').style.display='block'-->
   
  </body>

</html>
