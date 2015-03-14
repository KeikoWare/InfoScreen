<?php
include("onscreen/mysql_dbconnect.php");

$sql = "UPDATE IS_systemdata SET sdvalue = 'reload' WHERE sdtype = 'reload'";
$rssql = mysql_query($sql);
?>