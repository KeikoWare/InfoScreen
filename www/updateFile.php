<?php
session_start();
if(!$_SESSION["loggedinVerified"] == 1) header("location: login.php");

include('onscreen/mysql_dbconnect.php');

$filename=substr(addslashes($_REQUEST["filename"]), 9);
//echo $_REQUEST["dataid"];
if($_REQUEST["dataid"] <> ''){
	$sql = "UPDATE IS_templatedata SET text1='".$filename."' WHERE id =".$_REQUEST["dataid"];
	mysql_query($sql);
	$error .= mysql_error();
	header("location: index.php?content=editBox&boxid=".$_REQUEST["boxid"]);

} else{
	$sql = "UPDATE IS_schemes SET backgroundImage='".$filename."' WHERE id =".$_REQUEST["boxid"];
	mysql_query($sql);
	$error .= mysql_error();
	header("location: index.php?content=editScheme&schemeid=".$_REQUEST["boxid"]);
}

//if($error == '') echo $Lastid; else echo $error;

?>