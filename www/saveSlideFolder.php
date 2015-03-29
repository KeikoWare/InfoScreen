<?php
session_start();
if(!$_SESSION["loggedinVerified"] == 1) header("location: login.php");

include('onscreen/mysql_dbconnect.php');

if($_REQUEST['folder'] == '')
$sql = "UPDATE IS_templatedata SET `int1` = ".$_REQUEST['timelap']." WHERE id = ".$_REQUEST['timelineid'];
else
$sql = "UPDATE IS_templatedata SET text1 = '".$_REQUEST['folder']."', `int1` = ".$_REQUEST['timelap']." WHERE id = ".$_REQUEST['timelineid'];
mysql_query($sql);
$error .= mysql_error();

header("location: index.php?content=editBox&boxid=".$_REQUEST["boxid"]);

?>