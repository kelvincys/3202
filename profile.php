<?php
session_start();
if(!isset($_SESSION['logined'])){
  header('Location:' . $_SERVER['HTTP_REFERER']);
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

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/basic.css" rel="stylesheet">
    <link href="css/profile.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Do+Hyeon|IM+Fell+DW+Pica" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/basic.js"></script>

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

      <div class="container-fluid" id="content">
        <div class="row">
          <div class="col-lg-4" id="userpicture">
            <img src="assert/profile.jpg" class="userphoto" height="100%">
          </div>
          <div class="col-lg-8">
            <?php
            include("dbtools.inc.php");
            $link = create_connection();
            $userid = $_SESSION['id'];
            $sql = "SELECT * FROM user INNER JOIN user_detail ON user.user_id = user_detail.user_id WHERE  user.user_id= '$userid'";
            $result = execute_sql($link, "moment", $sql) or die(mysqli_error($link));
            echo "<table>"; // start a table tag in the HTML

            while($row = mysqli_fetch_assoc($result)){   //Creates a loop to loop through results
            echo "<tr><td>Username: " . $row["username"]. "</td></tr><tr><td>Name: " . $row["firstname"]. " " . $row["lastname"]. "</td></tr>";
            echo "<tr><td>Email: " . $row["email"]. "</td></tr><tr><td>Contact Number: " . $row["contact"]. "</td></tr>";
            }

            echo "</table>"; //Close the table in HTML

            ?>
            <div classs="profile0">
            <a href="edit.php"><button>Edit Profile</button></a>
            <a href="logout.php"><button>Logout</button></a>
            <a href="delete.php"><button>Delete Your Account</button></a>
            </div>
          </div>
            <div class="col-lg-4">
              <?php
                $sql = "SELECT * FROM order_detail INNER JOIN service ON order_detail.service_id = service.service_id  WHERE  order_detail.user_id= '$userid' ORDER BY order_id";
                $result = execute_sql($link, "moment", $sql) or die(mysqli_error($link));
                echo "<table  class='order'><tr class='order'><th class='order'>Order ID</th><th>Service Name</th></tr>";
                while($row = mysqli_fetch_assoc($result)){   //Creates a loop to loop through results
                echo "<tr class= 'order'><td class='order'>" . $row["order_id"]. "</td><td>"  .$row["service_name"]. "</td></tr>";
              }
              echo "</table>"
              ?>
            </div>
            <?php
              $videos = '';
              $channels = '';


              if(isset($_GET['q'])&& isset($_GET['maxResults'])){
                if ($_GET['q'] && $_GET['maxResults']) {
                // Call set_include_path() as needed to point to your client library.
                require_once ($_SERVER["DOCUMENT_ROOT"].'/google-api-php-client/src/Google_Client.php');
                require_once ($_SERVER["DOCUMENT_ROOT"].'/google-api-php-client/src/contrib/Google_YouTubeService.php');

                /* Set $DEVELOPER_KEY to the "API key" value from the "Access" tab of the
                Google APIs Console <http://code.google.com/apis/console#access>
                Please ensure that you have enabled the YouTube Data API for your project. */
                $DEVELOPER_KEY = 'AIzaSyB8CPPm5gZwLYrBNiDS0nC7FFBrZFJssKw';

                $client = new Google_Client();
                $client->setDeveloperKey($DEVELOPER_KEY);

                $youtube = new Google_YoutubeService($client);

                try {
                  $searchResponse = $youtube->search->listSearch('id,snippet', array(
                    'q' => $_GET['q'],
                    'maxResults' => $_GET['maxResults'],
                  ));

                  $videos = '';
                  $channels = '';

                  foreach ($searchResponse['items'] as $searchResult) {
                    switch ($searchResult['id']['kind']) {
                      case 'youtube#video':
                        $videos .= sprintf('<li>%s (%s)</li>', $searchResult['snippet']['title'],
                          "<a href=http://www.youtube.com/watch?v=".$searchResult['id']['videoId']." target=_blank>   Watch This Video</a>");
                        break;
                      case 'youtube#channel':
                        $channels .= sprintf('<li>%s (%s)</li>', $searchResult['snippet']['title'],"<a href=http://www.youtube.com/channel/".$searchResult['id']['channelId']." target=_blank>   Go to this channel</a>"
                          );
                        break;
                     }
                  }

                 } catch (Google_ServiceException $e) {
                  $htmlBody .= sprintf('<p>A service error occurred: <code>%s</code></p>',
                    htmlspecialchars($e->getMessage()));
                } catch (Google_Exception $e) {
                  $htmlBody .= sprintf('<p>An client error occurred: <code>%s</code></p>',
                    htmlspecialchars($e->getMessage()));
                }
                }
              }
            ?>
            <div class="col-lg-8">
               <p>You can also search here for some inspiration for your event!</p>
                <form method="GET">
                  <div>
                    Search Term: <input type="search" id="q" name="q" placeholder="Enter Search Term">
                  </div>
                  <div>
                    Max Results: <input type="number" id="maxResults" name="maxResults" min="1" max="20" step="1" value="10">
                  </div>
                  <input type="submit" value="Search">
                </form>
                <h3>Videos</h3>
                <ul><?php echo $videos; ?></ul>
                <h3>Channels</h3>
                <ul><?php echo $channels; ?></ul>
            </div>
        </div>
      </div>
  
  </body>

</html>
