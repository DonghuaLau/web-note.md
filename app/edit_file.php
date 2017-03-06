<link rel="stylesheet" href="<?php echo ASSETS_PATH; ?>/css/simplemde.min.css">
<script src="<?php echo ASSETS_PATH; ?>/js/simplemde.min.js" type="text/javascript"></script>

<?php

$current_dir = DOC_PATH . '/';
if(!empty($_GET['dir'])){
	$current_dir  = $_GET['dir'];
}
$current_file = $_GET['file'];

$filename = "$current_dir";

$path_parts = pathinfo($filename);

$show_url = '/fs.php?dir=' . $current_dir . '&file=' . $current_file;

if(!is_file_supported($path_parts['extension'])){
	echo "<div class=\"ui container\"><p style=\"font-size:1.5rem;\">The file format is not support, file: $filename</p></div>";
}else{
	
	$content = file_get_contents($filename);
}

?>

<div class="ui container" >
<h1>Markdown在线编辑器</h1>

<div style="margin-top:40px;"></div>

<div class="ui container left aligned">
	<button id="save-file" class="ui basic teal button">Save</button>
	<button id="show-file" class="ui basic button">Show</button>
	<!-- <a class="ui basic button" href="<?php echo $show_url; ?>">Return</a> -->
</div>

<div style="margin-top:40px;"></div>

<textarea id="edit-area" class="edit-area"><?php echo $content; ?></textarea>
</div>

<script>

var g_dir  = "<?php echo urlencode($current_dir); ?>";
var g_file = "<?php echo urlencode($current_file); ?>";

var simplemde = new SimpleMDE({ 
	 element: document.getElementById("edit-area")
	,autofocus: true

});
//simplemde.value('<?php //echo $content; ?>');

function save_file()
{
	var content = simplemde.value();
	//alert(content);
	jQuery.post( "/app/save.php", 
        { 
             dir: g_dir
            ,file: g_file
            ,content: encodeURI(content)
        }
    ).done(function( data ) {
        //warning_alert(data);
        console.dir(data);
        //var result = jQuery.parseJSON(data);
        //console.dir(result);
        //if(result.error == 0){
        //}else{
        //}
    });

}

function show_file()
{
}

jQuery(document).ready(function(){
	jQuery("#save-file").click(save_file);
	jQuery("#show-file").click(show_file);
});
</script>
