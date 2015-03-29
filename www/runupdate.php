<?php
session_start();
if(!$_SESSION["loggedinVerified"] == 1) header("location: login.php");

include('functions/scandir.php');

$file = explode('</br>',scan_folder_tree('firmware/updates/runupdate'));

//BACKUP REPLACED FILES
mkdir('firmware/updates/backup/BCK_Version_'.(str_replace('.','_',$_REQUEST["version"])).'/');

foreach( $file as $this_file ) {

	$this_file = trim(preg_replace('/\s+/', ' ', $this_file));
	
	if(!($this_file == 'firmware/updates/runupdate/runbefore.php' OR $this_file == 'firmware/updates/runupdate/runafter.php')) {
	
		$newfile = str_replace('runupdate', 'backup/BCK_Version_'.(str_replace('.','_',$_REQUEST["version"])).'',$this_file);
		
		$fromfile = str_replace('firmware/updates/runupdate/','',$this_file);
		
		$fullpath = substr($newfile, 0, strrpos($newfile, '/')+1);
			
		if(!is_dir($fullpath)) mkdir(substr($newfile, 0, strrpos($newfile, '/')));

		//echo "____".file_exists($this_file)."___<br>";
		
		if(file_exists($fromfile)) copy($fromfile, $newfile);
	}
}

include('firmware/updates/runupdate/runbefore.php');

//REPLACING FILES
foreach( $file as $this_file ) {

	$this_file = trim(preg_replace('/\s+/', ' ', $this_file));
	
	if(!($this_file == 'firmware/updates/runupdate/runbefore.php' OR $this_file == 'firmware/updates/runupdate/runafter.php') OR !file_exists($this_file)) {
	
		$newfile = str_replace('firmware/updates/runupdate/', '',$this_file);
		$fromfile = $this_file;
		
		$fullpath = substr($newfile, 0, strrpos($newfile, '/'));
		
		if(!is_dir($fullpath) AND !file_exists($fullpath)) mkdir(substr($newfile, 0, strrpos($newfile, '/')));

		//echo "____".file_exists($this_file)."___<br>";
		
		if(file_exists($fromfile)) copy($fromfile, $newfile);
	}
}

include('firmware/updates/runupdate/runafter.php');

header("Location: cleanupdate.php");
?>