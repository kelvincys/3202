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
  </head>

  <body>

   
    <center>
    </center>
    <h1>Wedding Party</h1>
    <div class="container-fluid">
        <div class="row">
            <?php
            
                function findValue($productid){
                    global $assertid, $paypalid, $name, $price, $detail;
                    include_once("dbtools.inc.php");
                    $link = create_connection();
                    $sql = "SELECT * FROM service WHERE service_id = $productid";
                    $result = execute_sql($link, "moment", $sql) or die(mysqli_error($link));
                    $row = mysqli_fetch_assoc($result);
                    $name = $row['service_name'];
                    $price = $row['price'];
                    $detail = $row['product_detail'];
                    $paypalid = $row['paypalid'];
                    $assertid = $row['assertid'];

                }
            ?>    
                    <div class='col-lg-6'>
                        <?php findValue("5"); ?>
                        <button  class="logbutton" onclick="openbox(<?php echo $paypalid; ?> , <?php echo "'".$assertid."'"; ?> ,<?php echo "'".$name."'"; ?> ,<?php echo "'".$price."'"; ?>,<?php echo "'".$detail."'"; ?>)" > <img src= <?php echo '"'.$assertid.'"'; ?> width="100%"><?php echo $name; ?></button>
                    </div>
                    <div class='col-lg-6'>
                        <?php findValue("6"); ?>
                        <button  class="logbutton" onclick="openbox(<?php echo $paypalid; ?> , <?php echo "'".$assertid."'"; ?> ,<?php echo "'".$name."'"; ?> ,<?php echo "'".$price."'"; ?>,<?php echo "'".$detail."'"; ?>)" > <img src= <?php echo '"'.$assertid.'"'; ?> width="100%"><?php echo $name; ?></button>
                    </div>
                
            
        </div>
    </div>
          <div id="testing" class="modal">
          
                    <div class="login animate">
                          
                      <div class="imgcontainer">
                        <span onclick="document.getElementById('testing').style.display='none'" class="close" title="Close PopUp">&times;</span>
                        <img alt="product1" width="365" id="productimg">
                        <h2 style="text-align:center" id="productname"></h2>
                        <p id="productdetail" class="detail"></p>
                        Price: <p style="display:inline" id="productprice" name="productprice"></p>
                        
                      </div>

                      <div class="container">
                        <?php include 'servicelogin.php'; ?>



                      </div>
                      
                    </div>

            </div>
   
  </body>

</html>
