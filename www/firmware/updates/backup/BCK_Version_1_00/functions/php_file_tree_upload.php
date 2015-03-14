<?php
function RemoveEmptySubFolders($path)  
{ 
  $empty=true; 
  foreach (glob($path.DIRECTORY_SEPARATOR."*") as $file) 
  { 
     $empty &= is_dir($file) && RemoveEmptySubFolders($file); 
  } 
  return $empty && rmdir($path); 
} 
	
function php_file_tree($directory, $return_link, $extensions = array(), $deleteable = false, $linkid, $boxid) { 
	// Generates a valid XHTML list of all directories, sub-directories, and files in $directory
	// Remove trailing slash
	if( substr($directory, -1) == "/" ) $directory = substr($directory, 0, strlen($directory) - 1);
	if (is_dir($directory)) $code .= php_file_tree_dir($directory, $return_link, $extensions,true, $deleteable, $linkid, $boxid);
	return $code;
}

function php_file_tree_dir($directory, $return_link, $extensions = array(), $first_call = true, $deleteable=false, $linkid, $boxid) {
	// Recursive function called by php_file_tree() to list directories/files
	global $data;
	// Get and sort directories/files
	if( function_exists("scandir") ) $file = scandir($directory); else $file = php4_scandir($directory);
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
				$ext = substr($file[$key], strrpos($file[$key], ".") + 1); 
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
					// Directory
					$uploadPath = $directory."/".$this_file;
					$subphp_file_tree .= "<li class=\"pft-directory\"><a href=\"#\"><span onclick=\"document.getElementById('uploadPath').value='".$uploadPath."';\">" . htmlspecialchars(mb_convert_encoding($this_file, "Windows-1252", "UTF-8")) . "</a>\n";
					$subphp_file_tree .= php_file_tree_dir("$directory/$this_file", $return_link ,$extensions, false, $deleteable,$linkid);
					$subphp_file_tree .= "</span></li>\n";
				} else {
				 
					//$sqlcheck = "select count(*) from project_uploadfile where filename = '../".$directory."/".$this_file."' and linkid ='".$linkid."' and deleted = 0 and userid = ".$_SESSION["userID"];
					//$rscheck = mysql_query($sqlcheck);
					//$recordcheck = mysql_fetch_array($rscheck);
				
					// File
					// Get extension (prepend 'ext-' to prevent invalid classes from extensions that begin with numbers)
					$ext = "ext-" . substr($this_file, strrpos($this_file, ".") + 1); 
					$link = str_replace("[link]", "#", $return_link);
					$unlink = str_replace("[link]", "functions/unlink.php?idnumber=".$linkid."&filename=". urlencode("$directory/$this_file"), $return_link);
					
					$fileTxt = $this_file;
					if(strlen($fileTxt) > 50) $fileTxt = substr($fileTxt, 0, 47)."...";
					
					$subphp_file_tree .= "<li class=\"pft-file " . strtolower($ext) . "\"><a href=\"$link\" title=\"".htmlspecialchars(mb_convert_encoding($this_file, "Windows-1252", "UTF-8"))."\">" . htmlspecialchars(mb_convert_encoding($fileTxt, "Windows-1252", "UTF-8")) . "</a>";
					
					if($deleteable) $subphp_file_tree .= "&nbsp;&nbsp;&nbsp;<a href=\"$unlink\" onclick=\"return confirm('Vil du slette dette dokument');\"><img title=\"Slet dokumentet\" border=0 src=\"img/delete.png\"></a>";
					
					$subphp_file_tree .= "</li>\n";
				
				}
				$subs++;
			}
		}
		if($subs > 0){
			$php_file_tree .= " (".$subs.")";
			$php_file_tree = "<ul";
			if( $first_call ) { $php_file_tree .= " class=\"php-file-tree\""; $first_call = false; }
			$php_file_tree .= ">";
			$php_file_tree .= $subphp_file_tree;
			$php_file_tree .= "</ul>\n";
		}
	}
	return $php_file_tree;
}

// For PHP4 compatibility
function php4_scandir($dir) {
	$dh  = opendir($dir);
	while( false !== ($filename = readdir($dh)) ) {
	    $files[] = $filename;
	}
	sort($files);
	return($files);
}
?>