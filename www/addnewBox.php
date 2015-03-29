<?php
session_start();
if(!$_SESSION["loggedinVerified"] == 1) header("location: login.php");

include('onscreen/mysql_dbconnect.php');

$sql = "INSERT INTO IS_boxes (active) VALUES ('0')";
mysql_query($sql);
$Lastid = mysql_insert_id();
$error .= mysql_error();

$sql = "INSERT INTO IS_userrights (groupid, type, typeid) VALUES (1, 'box', $Lastid)";
mysql_query($sql);



if($error == '') echo 'succes'.$Lastid; else echo $error;
?>