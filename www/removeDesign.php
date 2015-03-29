<?php
session_start();
if(!$_SESSION["loggedinVerified"] == 1) header("location: login.php");

include('onscreen/mysql_dbconnect.php');

	$id = ($_REQUEST["id"] ? $_REQUEST["id"] : 99999999);
	
	$sql = "DELETE FROM IS_schemes WHERE id =".$id;
	mysql_query($sql);
	$error .= mysql_error();

		if($error == '') header('location: index.php'); else echo $error;
?>