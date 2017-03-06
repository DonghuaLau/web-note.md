<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<link rel="shortcut icon" href="<?php echo ASSETS_PATH; ?>/images/wn-logo.png" /> 
	<script src="<?php echo ASSETS_PATH; ?>/js/jquery-3.1.0.min.js" type="text/javascript"></script>
	<script src="<?php echo ASSETS_PATH; ?>/js/semantic.min.js" type="text/javascript"></script>
	<link href="<?php echo ASSETS_PATH; ?>/css/semantic.min.css" rel="stylesheet"/>
	<link href="<?php echo ASSETS_PATH; ?>/css/style.css" rel="stylesheet">
	<title>
	<?php
	if(!empty($_GET['file'])){
		echo $_GET['file'];
	}else{
		echo $_GET['dir'];
	}
	?>
	</title>
</head>

<body>

