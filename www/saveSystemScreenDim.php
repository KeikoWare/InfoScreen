<?php
session_start();
if(!$_SESSION["loggedinVerified"] == 1) header("location: login.php");

include('onscreen/mysql_dbconnect.php');

$height = addslashes($_GET["height"]);
$width = addslashes($_GET["width"]);
$error = "";
$sql = "DELETE FROM IS_systemdata WHERE sdtype = 'screen_height' OR sdtype = 'screen_width'";
mysql_query($sql);
$error .= mysql_error();
$sql = "INSERT INTO `IS_systemdata` (`sdtype`, `sdvalue`) VALUES ('screen_width', '$width'),";
mysql_query($sql);
$error .= mysql_error();
$sql = "INSERT INTO `IS_systemdata` (`sdtype`, `sdvalue`) VALUES ('screen_height', '$height'),";
mysql_query($sql);
$error .= mysql_error();
echo $error;

?>