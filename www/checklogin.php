<?php
// sessionen startes
session_start();

// Der oprettes forbindelse til databasen
$path = "onscreen/";
include($path . "mysql_dbconnect.php");
$password = $_POST['frmPass'];
if($_POST["frmPass"]!= "" ){
	$sql = "SELECT IS_users.* FROM IS_users WHERE LCASE(IS_users.username) = LCASE('" . addslashes($_POST['frmUser']) . "') AND IS_users.password = '" . addslashes($password) . "' AND IS_users.active = '1' ";
	//echo $sql . "<br>";
	$rs = mysql_query($sql);
	//echo mysql_error();
	$grouparray[] = "";
	if(@mysql_num_rows($rs) == 1){
		$record = mysql_fetch_array($rs);
		$_SESSION["loggedinVerified"] = 1;
		$_SESSION["user"] = $record["username"];
		$_SESSION["userid"] = $record["id"];

		$sqlGroup = "SELECT * FROM IS_usergroups INNER JOIN IS_usergrouprel ON IS_usergrouprel.groupid = IS_usergroups.id WHERE IS_usergrouprel.userid = " . $record["id"];
		$rssqlGroup = mysql_query($sqlGroup);
		while($group = mysql_fetch_array($rssqlGroup)){
			if($group["type1"]  == 1) $_SESSION["group"]["type1"] 	= 1;
			if($group["type2"]  == 1) $_SESSION["group"]["type2"] 	= 1;
			if($group["type3"]  == 1) $_SESSION["group"]["type3"] 	= 1;
			if($group["type4"]  == 1) $_SESSION["group"]["type4"] 	= 1;
			if($group["type5"]  == 1) $_SESSION["group"]["type5"] 	= 1;
			if($group["type6"]  == 1) $_SESSION["group"]["type6"] 	= 1;
			if($group["type7"]  == 1) $_SESSION["group"]["type7"] 	= 1;
			if($group["type8"]  == 1) $_SESSION["group"]["type8"] 	= 1;
			if($group["type9"]  == 1) $_SESSION["group"]["type9"] 	= 1;
			if($group["type10"] == 1) $_SESSION["group"]["type10"] 	= 1;
		
			$sqlGroup = "SELECT * FROM IS_userrights WHERE groupid = " . $group["id"];
			$rssqlGroup = mysql_query($sqlGroup);
			
			while($group = mysql_fetch_array($rssqlGroup)){
				array_push($grouparray, $group["type"]."_".$group["typeid"]);
			}

		}

		$_SESSION["group"]["editbox"] 		= in_array("menu_3",$grouparray);
		$_SESSION["group"]["editdesign"] 	= in_array("menu_2",$grouparray);
		$_SESSION["group"]["upload"]		= in_array("menu_4",$grouparray);
		$_SESSION["group"]["settings"] 		= in_array("menu_5",$grouparray);
		$_SESSION["group"]["system"] 		= in_array("menu_6",$grouparray);
		
		mysql_close();
		header ("Location: index.php?login=success");
		exit;
	}
}
	mysql_close();
	header ("Location: index.php?login=failure");
	exit;
?>