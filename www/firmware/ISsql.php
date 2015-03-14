<?php

	date_default_timezone_set('Europe/Copenhagen');
 
 	$link = mysql_connect("localhost", "root", "K31k0Ware") or die("Could not connect: " . mysql_error() . "<br>");
	$sql = file_get_contents('create_infoscreen_db.sql');
	mysql_query($sql);

?>