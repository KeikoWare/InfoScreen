<?php
session_start();
if(!$_SESSION["loggedinVerified"] == 1) header("location: login.php");

include('onscreen/mysql_dbconnect.php');

$sql = "UPDATE IS_templatedata SET templateid = ".$_POST['templateid'].", text1 = '".$_POST['text1']."', text2 = '".$_POST['text2']."', text3 = '".$_POST['text3']."', text4 = '".$_POST['text4']."', `int1` = ".$_POST['int1'].", `int2` = ".$_POST['int2'].", `int3` = ".$_POST['int3'].", `int4` = ".$_POST['int4']." WHERE id = ".$_POST['timelineid'];
mysql_query($sql);
$error .= mysql_error();

$sql = "UPDATE IS_timeline SET sorting = ".$_POST['sorting'].", delay = ".$_POST['delay']." WHERE dataid = ".$_POST['timelineid'];
mysql_query($sql);
$error .= mysql_error(); 

if($error == '') echo 'succes'; else echo $error;
?>