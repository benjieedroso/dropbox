<?php include('client.php');
$client = new Spatie\Dropbox\Client($authorizationToken);


$content = file_get_contents(__DIR__ . '\Resume.pdf');

$client->upload('/dropboxpath/Resume.pdf', $content, $mode='add');

