<?php include('client.php');


//get file metadata of specified file and get path
$path = '/dropboxpath/Resume.pdf'; 
// or 
$metadata = $client->getMetadata($path);
$path = $metadata["path_display"];

//initiate download

function downloadFile($path, $client){

$documentFileTypes = [
    '.abw' => ['description' => 'AbiWord document', 'mime' => 'application/x-abiword'],
    '.doc' => ['description' => 'Microsoft Word', 'mime' => 'application/msword'],
    '.docx' => ['description' => 'Microsoft Word (OpenXML)', 'mime' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'],
    '.epub' => ['description' => 'Electronic publication (EPUB)', 'mime' => 'application/epub+zip'],
    '.odt' => ['description' => 'OpenDocument text document', 'mime' => 'application/vnd.oasis.opendocument.text'],
    '.pdf' => ['description' => 'Adobe Portable Document Format (PDF)', 'mime' => 'application/pdf'],
    '.ppt' => ['description' => 'Microsoft PowerPoint', 'mime' => 'application/vnd.ms-powerpoint'],
    '.pptx' => ['description' => 'Microsoft PowerPoint (OpenXML)', 'mime' => 'application/vnd.openxmlformats-officedocument.presentationml.presentation'],
    '.rtf' => ['description' => 'Rich Text Format (RTF)', 'mime' => 'application/rtf'],
    '.txt' => ['description' => 'Text, (generally ASCII or ISO 8859-n)', 'mime' => 'text/plain'],
    '.xls' => ['description' => 'Microsoft Excel', 'mime' => 'application/vnd.ms-excel'],
    '.xlsx' => ['description' => 'Microsoft Excel (OpenXML)', 'mime' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'],
    '.xml' => ['description' => 'XML', 'mime' => 'application/xml'],
    '.xul' => ['description' => 'XUL', 'mime' => 'application/vnd.mozilla.xul+xml'],
];

$link  = $client->getTemporaryLink($path);
return $link;



	// if(isset($link)){
	// 	$fileName = $metadata['name'];
	// 	$fileSize = $metadata['size'];
	// 	$fileType = substr($fileName, strpos($fileName, '.'));
	// 	$mimeType = "";
	// 	foreach ($documentFileTypes as $key => $value) {
	// 		if($fileType == $key){
	// 			$mimeType = $value["mime"];
	// 		}
	// 	}
	// 	header("Content-Discription: File Transfer");
	// 	header("Content-Type: $mimeType");
	// 	header("Content-Disposition: attachment; filename=$fileName");
	// 	header("COntent-Transfer-Encoding: binary");
	// 	header("Expires: 0");
	// 	header("Cache-Control: must-revaldiate");
	// 	header("Pragma: public");
	// 	header("Content-Length: $fileSize");
	// 	flush();
	// 	readfile($link);
	// 	exit;
	// }else{
	// 	echo 'File not found';
	// }
}


$downloadLink = downloadFile($path, $client);

echo $downloadLink;

