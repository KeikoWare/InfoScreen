<?php
// *************************************************
// Copyright Capable Aps
// *************************************************
//
// *************************************************


	date_default_timezone_set('Europe/Copenhagen');
 
 
// Der oprettes forbindelse til databasen
	$link = mysql_connect("localhost", "root", "Capable") or die("Could not connect: " . mysql_error() . "<br>");
	mysql_select_db("infoscreen", $link) or die("Could not select DB: " . mysql_error() . "<br>");
	mysql_set_charset('utf8',$link);

	

?>
