<?php
session_start();
if(!$_SESSION["loggedinVerified"] == 1) header("location: login.php");

include('onscreen/mysql_dbconnect.php');

		$sql = "INSERT INTO IS_usergroups (name, description) VALUES ('".$_POST["name"]."','".$_POST["description"]."')";
		mysql_query($sql);
		$error .= mysql_error();

echo $error;
header("Location: index.php?content=editGroups");
?>