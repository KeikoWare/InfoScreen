<?php
session_start();
$_SESSION["reload"] = 1;
include("mysql_dbconnect.php");

$sql = "SELECT sdvalue FROM IS_systemdata WHERE sdtype = 'reload' LIMIT 0, 1";
$rssql = mysql_query($sql);
$data = mysql_fetch_array($rssql);

echo $data["sdvalue"];

$sql = "UPDATE IS_systemdata SET sdvalue = '' WHERE sdtype = 'reload'";
$rssql = mysql_query($sql);
?>