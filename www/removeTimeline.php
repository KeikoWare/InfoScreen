<?php
session_start();
if(!$_SESSION["loggedinVerified"] == 1) header("location: login.php");

	include('onscreen/mysql_dbconnect.php');

	$timelineid = ($_POST["timelineid"] ? $_POST["timelineid"] : 99999999);
	$sql = "DELETE FROM IS_timeline WHERE dataid = ".$timelineid;
	mysql_query($sql);
	$error .= mysql_error();

echo $error;
?>