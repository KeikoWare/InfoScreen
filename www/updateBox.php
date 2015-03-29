<?php
session_start();
if(!$_SESSION["loggedinVerified"] == 1) header("location: login.php");

include('onscreen/mysql_dbconnect.php');

$sql = "UPDATE IS_boxes SET width = ".$_POST['width'].", height = ".$_POST['height'].", top = ".$_POST['top'].", `left` = ".$_POST['left'].", `name` = '".$_POST['boxname']."', `editColor` = '".$_POST['editcolor']."', `displayColor` = '".$_POST['displaycolor']."' , `zindex` = '".$_POST['zindex']."', `active` = '1', `position` = '".$_POST['position']."', `scheme` = '".$_POST['scheme']."' WHERE boxID = ".$_POST['boxid'];
mysql_query($sql);
$error .= mysql_error();

if($error == '') echo 'succes'; else echo $error;
?>