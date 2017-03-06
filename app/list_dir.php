<?php

echo '<div style="margin-top:40px;"></div>';
echo '<div class="ui container">';

$current_dir = DOC_PATH . '/';
if(!empty($_GET['dir'])){
	$current_dir  = $_GET['dir'];
}

// sort the diretories in the front is better
$dirs = files_fullpath($current_dir, array('assets', 'common', 'demo'));

// list directories
foreach ($dirs as $name => $fileinfo) 
{
	if($fileinfo[0] == true){
		echo '<a href="/fs.php?dir='.$fileinfo[1].'&file=">'.$name.'</a><br/>';
	}else{
		//echo '<a href="/fs.php?dir='.$fileinfo[1].'&file='.$name.'">'.$name.'</a><br/>';
	}	
}


// list files 
foreach ($dirs as $name => $fileinfo) 
{
	if($fileinfo[0] == true){
		//echo '<a href="/fs.php?dir='.$fileinfo[1].'&file=">'.$name.'</a><br/>';
	}else{
		echo '<a href="/fs.php?dir='.$fileinfo[1].'&file='.$name.'">'.$name.'</a><br/>';
	}	
}

echo '</div>';
