<?php
session_start();
if(!$_SESSION["loggedinVerified"] == 1) header("location: login.php");

include('onscreen/mysql_dbconnect.php');

	$boxid = ($_POST["boxid"] ? $_POST["boxid"] : 99999999);
	
	$sql = "DELETE FROM IS_boxes WHERE boxID =".$boxid;
	mysql_query($sql);
	$error .= mysql_error();


echo $error;
?>