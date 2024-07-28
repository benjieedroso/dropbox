<?php include('client.php');

$query = 'pic';

$searchResult = $client->search($query);

print_r($searchResult);