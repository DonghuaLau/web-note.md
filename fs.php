<?php 
include_once('./app/config.php');
include(APP_PATH . '/header.php');
set_navbar_active('doc_active');
include(APP_PATH . '/navbar.php'); 
?>


<div class="navbar" style="display:none;"></div>


<?php


$current_file = '';
if(!empty($_GET['file'])){
	$current_file = $_GET['file'];
}

$edit = false;
if(!empty($_GET['edit']) && $_GET['edit'] == 'true'){
	$edit = true;
}

if(!empty($current_file)){
	// process file	
	if($edit == true){
		// edit file
		include(APP_PATH . '/edit_file.php');
	}else{
		// show file
		include(APP_PATH . '/show_file.php');
	}
}else{
	// list files of current directory
	include(APP_PATH . '/list_dir.php');
}

?>


<?php include(APP_PATH . '/footer.php'); ?>

