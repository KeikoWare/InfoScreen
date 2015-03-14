<?php
session_start();
if(!$_SESSION["loggedinVerified"] == 1) header("location: login.php");

include('onscreen/mysql_dbconnect.php');

$text = addslashes($_POST['text']);

if ($_POST["selectedText"] == 0) {
	$sql = "INSERT INTO IS_texts (textinput, active) VALUES ('".$text."', 1)";
	mysql_query($sql);
	$Lastid = mysql_insert_id();
	$error .= mysql_error();
} else {
	$sql = "UPDATE IS_texts SET textinput='".$text."' WHERE id =".$_POST["selectedText"];
	mysql_query($sql);
	$Lastid = $_POST["selectedText"];
	$error .= mysql_error();
}

	$sql = "UPDATE IS_templatedata SET `int4`=".$Lastid." WHERE id = ".$_POST["dataid"];
	mysql_query($sql); 
//echo mysql_error();
//if($error == '') echo $Lastid; else echo $error;

header("location: index.php?content=editText&timelineid=".$_POST["dataid"]."&textid=".$Lastid);
?>