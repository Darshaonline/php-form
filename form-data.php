<?php 

$url = $_POST['url'];
$setulr="https://".$url;

$source_code = file_get_contents($setulr);

$character_count = strlen($source_code);

echo "The Character count of ". $url. " is ".$character_count; 


?>