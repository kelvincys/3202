<?php

require_once('google-api-php-client-2.2.1/vendor/autoload.php');


$client = new Google_Client();
$client->setApplicationName("Youtube Data API v3 Test");
$client->setDeveloperKey("AIzaSyCV6KVNaXan3k7ou72CXNZVdLgyMwZYHMs");


$youtube = new Google_Service_YouTube($client);


if(isset($_GET["event"]) && $_GET["event"] != "") {
    $searchResponse = $youtube->search->listSearch('id,snippet', array(
        'q' => $_GET["event"],
        'maxResults' => 1,
));
} else {
    $searchResponse = $youtube->search->listSearch('id,snippet', array(
        'q' => 'proposal',
        'maxResults' => 1,
));
}
echo json_encode($searchResponse);
?>