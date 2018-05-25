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
    <link href="css/services.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Do+Hyeon|IM+Fell+DW+Pica" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/service.js"></script>
    <script src="js/basic.js"></script>
    <script src="js/servicewindow.js"></script>
    <script type="text/javascript">
      function openbox(paypalid, productimg, name ,price,detail){
            document.getElementById('testing').style.display='block';
            document.getElementById('paypalid').value=paypalid;
            document.getElementById('productname').innerHTML =name;
            document.getElementById("productimg").src = productimg;
            document.getElementById('productdetail').innerHTML =detail;
            document.getElementById('productprice').innerHTML = price;

        }
    </script>
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
  
            <form class="login animate" action="checkpw.php" name="myForm">
                  
              <div class="imgcontainer">
                <span onclick="document.getElementById('poplog').style.display='none'" class="close" title="Close PopUp">&times;</span>
                <img src="assert/icon.png" alt="Avatar" class="avatar">
                <h2 style="text-align:center">Log In</h2>
                <p>New to MOMENT? <a href="register.php" style="font-weight: bold; color:#ff849c">Sign Up</a></p>
              </div>

              <div class="container">
                <input type="username" placeholder="Enter Username" name="uname">
                <input type="password" placeholder="Enter Password" name="psw">        
                <input type="button" value="Login" onClick="check_data()" class="logbutton"> 
              </div>
              
            </form>
  
          </div>

          
    <div class="container-fluid halfdown">
      <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-2" style="text-align: center">
          <a onclick="loadproposal()"><button class="serbutton">Sercet Proposal</button></a>
        </div>
        <div class="col-lg-2" style="text-align: center">
          <a onclick="loadbirthday()"><button class="serbutton">Birthday Party</button></a>
        </div>
        <div class="col-lg-2" style="text-align: center">
          <a onclick="loadwedding()"><button class="serbutton">Wedding Party</button></a>
        </div>
        <div class="col-lg-3"></div>
      </div>
    </div>
    
    <div id="content">
    
    </div>
    <div class="mapdiv">
    <?php 
        // function to geocode address, it will return false if unable to geocode address
        function geocode($address){
         
            // url encode the address
            $address = urlencode($address);
             
            // google map geocode api url
            $url = "https://maps.googleapis.com/maps/api/geocode/json?address={$address}&key=AIzaSyB8CPPm5gZwLYrBNiDS0nC7FFBrZFJssKw";
         
            // get the json response
            $resp_json = file_get_contents($url);
             
            // decode the json
            $resp = json_decode($resp_json, true);
         
            // response status will be 'OK', if able to geocode given address 
            if($resp['status']='OK'){
         
                // get the important data
                $lati = isset($resp['results'][0]['geometry']['location']['lat']) ? $resp['results'][0]['geometry']['location']['lat'] : "";
                $longi = isset($resp['results'][0]['geometry']['location']['lng']) ? $resp['results'][0]['geometry']['location']['lng'] : "";
                $formatted_address = isset($resp['results'][0]['formatted_address']) ? $resp['results'][0]['formatted_address'] : "";
                 
                // verify if data is complete
                if($lati && $longi && $formatted_address){
                 
                    // put the data in the array
                    $data_arr = array();            
                     
                    array_push(
                        $data_arr, 
                            $lati, 
                            $longi, 
                            $formatted_address
                        );
                     
                    return $data_arr;
                     
                }else{
                    return false;
                }
                 
            }
         
            else{
                echo "<strong>ERROR: {$resp['status']}</strong>";
                return false;
            }
        }
    ?>
    <h2>We hold event in the following venue. You can enter event venue here to see the location</h2>
    <b>The Cinema Proposal:</b><br>
    Sunnybank Plaza Shopping Centre, Cnr Main Rd and McCullough St, Sunnybank QLD 4109<br>
    <b>The River Proposal:</b><br>
    Eagle Street Pier, 1 Eagle St, Brisbane City QLD 4000<br>
    <b>Rooftop Party:</b><br>
    71/73 Melbourne St, South Brisbane QLD 4101<br>
    <b>Cate Cafe Party:</b><br>
    667 Ipswich Rd, Annerley QLD 4103<br>
    <b>Skytower Wedding Party:</b><br>
    222 Margaret St, Brisbane City QLD 4000<br>
    <b>Beach Wedding Party:</b><br>
    Mermaid beach<br>
    
    <form action="" method="post">
        <input type='text' name='address' placeholder='Enter event venue here to see the map' />
        <input type='submit' value='Go!'>
    </form>
    </body>
    <?php
    if($_POST){
     
        // get latitude, longitude and formatted address
        $data_arr = geocode($_POST['address']);
     
        // if able to geocode the address
        if($data_arr){
             
            $latitude = $data_arr[0];
            $longitude = $data_arr[1];
            $formatted_address = $data_arr[2];
                         
        ?>
     
        <!-- google map will be shown here -->
        <div id="gmap_canvas" style="height: 500px; width: 500px">Loading map...</div>
        <div id='map-label'>Map shows approximate location.</div>
     
        <!-- JavaScript to show google map -->
        <script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyB8CPPm5gZwLYrBNiDS0nC7FFBrZFJssKw"></script>   
        <script type="text/javascript">
            function init_map() {
                var myOptions = {
                    zoom: 14,
                    center: new google.maps.LatLng(<?php echo $latitude; ?>, <?php echo $longitude; ?>),
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);
                marker = new google.maps.Marker({
                    map: map,
                    position: new google.maps.LatLng(<?php echo $latitude; ?>, <?php echo $longitude; ?>)
                });
                infowindow = new google.maps.InfoWindow({
                    content: "<?php echo $formatted_address; ?>"
                });
                google.maps.event.addListener(marker, "click", function () {
                    infowindow.open(map, marker);
                });
                infowindow.open(map, marker);
            }
            google.maps.event.addDomListener(window, 'load', init_map);
        </script>
     
        <?php
     
        // if unable to geocode the address
        }else{
            echo "No map found.";
        }
    }
    ?>

    </div>
    <?php
      if(isset($_GET["id"])){
        $id = $_GET["id"];
        if ($id ==1){
          echo "<script type='text/javascript'>loadproposal();</script>";
        } elseif ($id==2){
          echo "<script type='text/javascript'>loadbirthday();</script>";
        } elseif ($id==3){
          echo "<script type='text/javascript'>loadwedding();</script>";
        } else{
         echo "<script type='text/javascript'>loadproposal();</script>";
        }
      } else{
        echo "<script type='text/javascript'>loadproposal();</script>";
      }
    ?>



  </body>
      ​​


</html>
