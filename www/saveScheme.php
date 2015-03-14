<?php
session_start();
if(!$_SESSION["loggedinVerified"] == 1) header("location: login.php");

include('onscreen/mysql_dbconnect.php');

if ($_POST["schemeid"] == 0) {
	$sql = "INSERT INTO IS_schemes (name, active, starttime, endtime, `width`, height, background, imageStyle) VALUES ('".$_POST["name"]."', ".($_POST["active"]=="on" ? 1 : 0).", '".$_POST["timestart"]."', '".$_POST["timeend"]."', ".$_POST["width"].", ".$_POST["height"].", '".$_POST["background"]."', ".$_POST["imageStyle"].")";
	mysql_query($sql);
	$Lastid = mysql_insert_id();
	$error .= mysql_error();
} else {
	$sql = "UPDATE IS_schemes SET name='".$_POST["name"]."', active=".($_POST["active"]=="on" ? 1 : 0).", starttime='".$_POST["timestart"]."', endtime='".$_POST["timeend"]."', `width`=".$_POST["width"].", height=".$_POST["height"].", background='".$_POST["background"]."', imageStyle='".$_POST["imageStyle"]."' WHERE id =".$_POST["schemeid"];
	mysql_query($sql);
	$Lastid = $_POST["schemeid"];
	$error .= mysql_error();
}

if($error == '') echo $Lastid; else echo $error;
?>