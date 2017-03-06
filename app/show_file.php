<?php

$current_dir = DOC_PATH . '/';
if(!empty($_GET['dir'])){
	$current_dir  = $_GET['dir'];
}
$current_file = $_GET['file'];

$filename = "$current_dir";

$path_parts = pathinfo($filename);


if(!is_file_supported($path_parts['extension'])){
	echo "<div class=\"ui container\"><p style=\"font-size:1.5rem;\">The file format is not support, file: $filename</p></div>";
}else{
	
	$content = file_get_contents($filename);
	
	$edit_url = $_SERVER['REQUEST_URI'] . '&edit=true';
	
	echo '<div style="margin-top:40px;"></div>';
	echo '<div class="ui container right aligned"><a class="ui teal button" href="'.$edit_url.'">Edit</a></div>';

	echo '<xmp theme="bootstrap" style="display:none;">'."\n\n";
	echo $content;
	echo '</xmp>';
	echo '<script src="'. ASSETS_PATH .'/js/strapdown-0.2.js"></script>';

}

?>



