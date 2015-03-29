<?php
session_start();
if(!$_SESSION["loggedinVerified"] == 1) header("location: login.php");

include('onscreen/mysql_dbconnect.php');

if($_POST['save'] == 'true')
$sql = "INSERT INTO IS_userrights (groupid, type, typeid) VALUES (".$_POST["groupid"].", 'menu', ".$_POST["typeid"].")";
else
$sql = "DELETE FROM IS_userrights WHERE groupid = ".$_POST["groupid"]." AND type = 'menu' AND typeid = ".$_POST["typeid"];
mysql_query($sql);
$error .= mysql_error();
echo $error;
//header("location: index.php?content=editBox&boxid=".$_POST["boxid"]);

?>