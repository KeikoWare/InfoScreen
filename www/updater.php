<?php
session_start();
if(!$_SESSION["loggedinVerified"] == 1) header("location: login.php");


function downloadFile ($url, $path) {
	$newfname = $path;
	$file = fopen ($url, "rb");
	if ($file) {
		$newf = fopen ($newfname, "wb");

	if ($newf)
	while(!feof($file)) {
		fwrite($newf, fread($file, 1024 * 8 ), 1024 * 8 );
	}
	}

	if ($file) {
		fclose($file);
	}

	if ($newf) {
		fclose($newf);
	}
}

downloadFile("http://www.capable.dk/onscreen/update/CurrentVersion_".(str_replace('.','_',$_REQUEST["version"]))."/update.upd","firmware/updates/update.zip");

$zip = new ZipArchive;
$zip->open('firmware/updates/update.zip');
$zip->extractTo('firmware/updates/');
$zip->close();

header("location: runupdate.php?version=".$_REQUEST["version"]);

?>