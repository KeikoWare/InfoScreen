<?php
session_start();
if(!$_SESSION["loggedinVerified"] == 1) header("location: login.php");

include('onscreen/mysql_dbconnect.php');

if($_POST['save'] == 'true')
$sql = "INSERT INTO IS_usergrouprel (groupid, userid) VALUES (".$_POST["groupid"].", ".$_POST["userid"].")";
else
$sql = "DELETE FROM IS_usergrouprel WHERE groupid = ".$_POST["groupid"]." AND userid = ".$_POST["userid"];
mysql_query($sql);
$error .= mysql_error();
echo $error;
//header("location: index.php?content=editBox&boxid=".$_POST["boxid"]);

?>