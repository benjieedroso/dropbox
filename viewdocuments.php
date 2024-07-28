<?php require('vendor/autoload.php');
include('client.php');


$listOfFiles = $client->listFolder('/dropboxpath');

print_r($listOfFiles);

