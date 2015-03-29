<?php
session_start();
if(!$_SESSION["loggedinVerified"] == 1) header("location: login.php");

include('onscreen/mysql_dbconnect.php');

$testsql = "SELECT sorting FROM IS_timeline WHERE boxid = ".$_REQUEST["boxid"]." ORDER BY sorting DESC LIMIT 0, 1";
$rsSql= mysql_query($testsql);
$data=mysql_fetch_array($rsSql);

$sql2 = "INSERT INTO IS_templatedata (boxid, templateid) VALUES (".$_REQUEST["boxid"].", ".$_REQUEST["type"].")";
mysql_query($sql2);
$Lastid = mysql_insert_id();

$sql = "INSERT INTO IS_timeline (active, boxid, dataid, sorting, delay) VALUES ('1', ".$_REQUEST["boxid"].", ".$Lastid.", ".($data["sorting"]+1).", 0)";
mysql_query($sql);
$error .= mysql_error();

if($error == '') header('location: index.php?content=editBox&boxid='.$_REQUEST["boxid"]); else echo $error;
?>