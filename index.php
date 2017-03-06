<?php 
include_once('./app/config.php');
include(APP_PATH . '/header.php');
set_navbar_active('home_active');
include(APP_PATH . '/navbar.php'); 
?>


<div class="navbar" style="display:none;"></div>

<div style="width:100%; min-height:80%;">
	<div class="ui container">
		<h1>Web-Note.md</h1>
		<p>Web-Note.md is markdown editor based on web。</p>
	</div>
</div>

<?php include(APP_PATH . '/footer.php'); ?>
