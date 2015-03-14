<?php
session_start();
if(!$_SESSION["loggedinVerified"] == 1) header("location: login.php");

include('onscreen/mysql_dbconnect.php');

		$sql = "UPDATE IS_users SET username = '".$_POST["username"]."', password = '".$_POST["password"]."'";
		mysql_query($sql);
		$error .= mysql_error();

echo $error;
header("Location: index.php?content=editUsers");
?>