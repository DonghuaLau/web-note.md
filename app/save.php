<?php

$current_dir  = urldecode($_POST['dir']);
$current_file = urldecode($_POST['file']);
$content = urldecode($_POST['content']);

if( empty($current_dir) || 
	empty($current_file) ||
	empty($content)
){
	echo json_encode(array('error' => 1, 'info' => 'invalid parameters')); 
	die();
}

//$result = file_put_contents($current_file.'-1', $content);

$fp = fopen($current_file, 'w');
$result = fwrite($fp, $content);
fclose($fp);

print_r(error_get_last());

if($result !== false){
	echo json_encode(array('error' => 0, 'info' => 'success', 'extra' => array($current_dir, $current_file, $content) )); 
}else{
	echo json_encode(array('error' => 1, 'info' => 'failed', 'extra' => array($current_dir, $current_file, $content) )); 
}
