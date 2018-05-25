<?php
  session_start();
  $userid = $_SESSION["id"];
  include("dbtools.inc.php");
  $link = create_connection();
  if(isset($_GET["serviceid"])){
    $serviceid = $_GET["serviceid"];
  }
  $_SESSION["serviceid"] = $serviceid;
    
  $sql = "INSERT INTO order_detail (user_id, service_id) 
            VALUES ('$userid', '$serviceid')";
  $result = execute_sql($link, "moment", $sql) or die(mysqli_error($link));
    

  

  $sql = "SELECT service_name FROM service WHERE service_id = $serviceid";
  $result = execute_sql($link, "moment", $sql) or die(mysqli_error($link));
  while($row = mysqli_fetch_assoc($result)){
    $servicename = $row["service_name"];
  }

  $sql = "SELECT email, firstname, lastname FROM user_detail WHERE user_id = $userid";
  $result = execute_sql($link, "moment", $sql) or die(mysqli_error($link));
  while($row = mysqli_fetch_assoc($result)){
    $to = $row["email"];
    $name = $row["firstname"]."".$row["lastname"];
  }

  $subject = "Thank you for purchasing our service";
  $message = "Dear".$name."We will reply you soon";
  $headers = "From: kelvinchungkw@gmail.com";
  mail($to,$subject,$message,$headers);


?>
<?php
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

?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Purchase successful!</title>
    <!--<meta http-equiv="refresh" content="5; url=index.php" />-->
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Lobster|Pacifico|Roboto+Slab" rel="stylesheet">
  </head>
  <body bgcolor="#FFFFFF">      
    <p align="center">Thank you for purchasing our service!<br>
      Your Plan：<font color="#FF0000"><?php  echo $servicename; ?></font><br>
      You can download your reciept <a href="pdfgen.php" target="_blank">here</a><br>
      You can mark down your event in your google calendar here<a href="google-login.php">here</a><br>
      Click <a href="index.php">here</a> to return to the home page
    </p>
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
  </body>
</html>