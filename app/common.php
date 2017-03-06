<?php

function dirToArray($dir) 
{ 
   
   $result = array(); 

   $cdir = scandir($dir); 
   foreach ($cdir as $key => $value) 
   { 
      if (!in_array($value,array(".",".."))) 
      { 
         if (is_dir($dir . DIRECTORY_SEPARATOR . $value)) 
         { 
            $result[$value] = dirToArray($dir . DIRECTORY_SEPARATOR . $value); 
         } 
         else 
         { 
            $result[] = $value; 
         } 
      } 
   } 
   
   return $result; 
} 

/*
 *	@resturn
 *		[ { is_dir, "fullpath" }, ...]
 */
function files_fullpath($dir, $exclue_files = array())
{
	$result = array(); 

	if(!strcmp($dir, DOC_PATH) == 0)
	{
		//$path_parts = pathinfo($dir);
		$result['..'] = array(true, dirname($dir));
	}

	
	// exclude hidden file
	$cdir = preg_grep('/^([^.])/', scandir($dir));

	// exclude php file
	$cdir = preg_grep('/([^.php])$/', $cdir);

	// exclude html file (cannot work)
	//$cdir = preg_grep('/([^.html])$/', $cdir);

	foreach ($cdir as $key => $value) 
	{ 
	   if (!in_array($value,array(".","..")) && !in_array($value, $exclue_files))
	   { 

	      if (is_dir($dir . DIRECTORY_SEPARATOR . $value)) 
	      { 
	         $result[$value] = array(true, $dir . DIRECTORY_SEPARATOR . $value); 
	      } 
	      else 
	      { 
	         $result[$value] = array(false, $dir . DIRECTORY_SEPARATOR . $value); 
	      } 
	   } 
	} 

	return $result; 
}

function is_file_supported($file_extension)
{
	$extensions = array('txt', 'md', 'sql');
	if(in_array($file_extension, $extensions)){
		return true;
	}
	return false;
}

function set_navbar_active($nav)
{
	$GLOBALS[$nav] = true; 
}

function get_navbar_active($nav)
{
	if(!empty($GLOBALS[$nav]) && $GLOBALS[$nav] == true){
		return 'active';
	}else{
		return '';
	}
}
