<?php
session_start();
if(!$_SESSION["loggedinVerified"] == 1) header("location: login.php");

include('onscreen/mysql_dbconnect.php');

		$sql = "INSERT INTO IS_users (username, password, active) VALUES ('".$_POST["username"]."','".$_POST["password"]."',1)";
		mysql_query($sql);
		$error .= mysql_error();

echo $error;
header("Location: index.php?content=editUsers");
?>