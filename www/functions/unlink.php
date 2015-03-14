<?php
session_start();

if(!$_SESSION["loggedinVerified"] == 1) header("location: login.php");

// place this code inside a php file and call it f.e. "download.php"
$path = "../"; // change the path to fit your websites document structure
$path2 = "../onscreen/"; // change the path to fit your websites document structure

$filename = @$_REQUEST["filename"];

$target = $path.$filename;
//if(!is_dir($target)) mkdir($target);

include("../onscreen/mysql_dbconnect.php");
include("../inc/url.php");


if( file_exists($target)){ 
	if (!unlink($target))
    {
		$res = "Error deleting file";
    }
	else
    {
		$res = "unlink successfull";
	}
} else { 
	$res = "FILE NOT FOUND";
}

header("location: $webmainurlpath?content=upload&result=".$res);
?>
