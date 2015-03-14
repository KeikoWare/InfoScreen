<?php
session_start();
if(!$_SESSION["loggedinVerified"] == 1) header("location: login.php");

include('onscreen/mysql_dbconnect.php');

	$id = $_REQUEST["id"];
	
	if($id <> 1){
		$sql = "DELETE FROM IS_users WHERE id =".$id;
		mysql_query($sql);
		$error .= mysql_error();
	}

echo $error;
header("Location: index.php?content=editUsers");
?>