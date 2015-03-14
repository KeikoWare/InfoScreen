<?php
session_start();
if(!$_SESSION["loggedinVerified"] == 1) header("location: login.php");

include('onscreen/mysql_dbconnect.php');

$agenda = $_POST["agenda"];
$agendasize = $_POST["colwidth"];
$agendashow = $_POST["ShowMe"];

foreach( $agenda as $textarray ) {
	$text .= $textarray.'[IS_cellsplit]';
}

$showme='[[IS_cellsplit]';
foreach( $agendashow as $showarray ) {
	$showme .= $showarray.'[IS_cellsplit]';
}

foreach( $agendasize as $sizearray ) {
	$size .= $sizearray.'[IS_cellsplit]';
}
//$text = "test split[IS_cellsplit]hehe det virker";

	$sql = "UPDATE IS_templatedata SET `int1`=".$_POST["numrow"].", `int2`=".$_POST["numcol"].", `text1`='".$text."', `text2`='".$size."', `text3`='".$showme."' WHERE id = ".$_POST["dataid"];
	mysql_query($sql); 
//echo mysql_error();
//if($error == '') echo $Lastid; else echo $error;

header("location: index.php?content=editAgenda&timelineid=".$_POST["dataid"]);
?>