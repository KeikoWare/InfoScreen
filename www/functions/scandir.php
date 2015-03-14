<?php


function tempdir() { 
	$tempfile=tempnam(sys_get_temp_dir(),''); 
	if (file_exists($tempfile)) { unlink($tempfile); } 
	mkdir($tempfile); 
	if (is_dir($tempfile)) { return $tempfile; } 
} 

function RecursiveCopy($source, $dest){ 
	$sourceHandle = opendir($source); 
	
	while($res = readdir($sourceHandle)){ 
		if($res == '.' || $res == '..') 
			continue; 
		if(is_dir($source . '/' . $res)){ 
			mkdir($dest . '/' . $res); 
			RecursiveCopy($source . '/' . $res, $dest . '/' . $res); 
		} else { 
			copy($source . '/' . $res, $dest . '/' . $res); 
		} 
	} 
} 

function rmdir_recursive($dir) { 
	foreach(scandir($dir) as $file) { 
		if ('.' === $file || '..' === $file) continue; 
		if (is_dir("$dir/$file")) rmdir_recursive("$dir/$file"); 
		else unlink("$dir/$file"); 
	} 
	rmdir($dir); 
} 

function RemoveEmptySubFolders($path) 
{ 
	$empty=true; 
	if(is_array(glob($path.DIRECTORY_SEPARATOR."*")))
	{
		foreach (glob($path.DIRECTORY_SEPARATOR."*") as $file)
		{ 
			$empty &= is_dir($file) && RemoveEmptySubFolders($file); 
		} 
	}
	return $empty && rmdir($path); 
} 

function scan_folder($directory, $extensions = array()) {
	global $newFiles, $totalFiles;
	// Generates a valid XHTML list of all directories, sub-directories, and files in $directory
	// Remove trailing slash
	if( substr($directory, -1) == "/" ) $directory = substr($directory, 0, strlen($directory) - 1);
	if (is_dir($directory)) $code .= scan_folder_tree($directory,  $extensions);
	return $code;
}

function scan_folder_tree($directory,  $extensions = array(), $first_call = true) {
	global $newFiles, $totalFiles, $txtNewFiles;
	// Get and sort directories/files
	$file = scandir($directory);
	natcasesort($file);
	// Make directories first
	$files = $dirs = array();
	foreach($file as $this_file) {
		if( is_dir("$directory/$this_file" ) ) $dirs[] = $this_file; else $files[] = $this_file;
	}
	$file = array_merge($dirs, $files);
	
	// Filter unwanted extensions
	if( !empty($extensions) ) {
		foreach( array_keys($file) as $key ) {
			if( !is_dir("$directory/$file[$key]") ) {
				if( !in_array($ext, $extensions) ) unset($file[$key]);
			}
		}
	}
	
	if( count($file) > 2 ) { // Use 2 instead of 0 to account for . and .. "directories"
		$subphp_file_tree="";
		$subs = 0;
		foreach( $file as $this_file ) {
			if( $this_file != "." && $this_file != ".." ) {
				if( is_dir("$directory/$this_file") ) {
					$subphp_file_tree .= scan_folder_tree("$directory/$this_file",$extensions, false);
				} else {
					//$ext = "ext-" . substr($this_file, strrpos($this_file, ".") + 1); 
					//$link = urlencode("$directory/$this_file") ;
					$subphp_file_tree .=  "$directory/$this_file</br>\n";
					$totalFiles++;
					$newFiles++;
					$txtNewFiles .= "$directory/$this_file</br>\n";
				}
				$subs++;
			}
		}
		if($subs > 0){
			$php_file_tree = $subphp_file_tree;
		} 
	}
	return $php_file_tree;
}


?>