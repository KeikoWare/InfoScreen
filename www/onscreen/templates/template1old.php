<!DOCTYPE html>
<html>
<head>

	<style type="text/css">

		#makeMeScrollable
		{
			width:100%;
			height: 100%;
			position: relative;
		}
		
		/* Replace the last selector for the type of element you have in
		   your scroller. If you have div's use #makeMeScrollable div.scrollableArea div,
		   if you have links use #makeMeScrollable div.scrollableArea a and so on. */
		   
		#makeMeScrollable div.scrollableArea img
		{
			position: relative;
			float: left;
			margin: 0;
			padding: 0;
			/* If you don't want the images in the scroller to be selectable, try the following
			   block of code. It's just a nice feature that prevent the images from
			   accidentally becoming selected/inverted when the user interacts with the scroller. */
			-webkit-user-select: none;
			-khtml-user-select: none;
			-moz-user-select: none;
			-o-user-select: none;
			user-select: none;
		}
		
		#scrollingText div.scrollableArea p
		{
			display: block;
			float: left;
			margin: 0;
			padding: 0px 0px 20px 20px;
			font-family: Times, 'Times New Roman', Georgia, Serif; 
			font-size:75px; 
			font-weight: bold; 
			background-color: #fff; 
			color: #000; 
			white-space: nowrap;
		}
		
	</style>
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />

	<link rel="Stylesheet" type="text/css" href="../scroll/css/smoothDivScroll.css" />
  

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>

	<script type="text/javascript" src="../marquee/jquery.simplyscroll.js"></script>

	<link rel="stylesheet" href="../marquee/jquery.simplyscroll.css" media="all" type="text/css">


<script>
var video;
<?php
session_start();
include("../mysql_dbconnect.php");


$boxid       = $_REQUEST["boxid"];
$oldtimeline = ($_REQUEST["time_id"] ? $_REQUEST["time_id"] : 0);
$newtimeline = -1;
$oldsorting  = ($_REQUEST["time_id"] ? -1 : 0);

$sqlTime = "SELECT * FROM IS_timeline WHERE active = '1' AND boxid = $boxid ORDER BY sorting";
$rsSqlTime = mysql_query($sqlTime);

$sqlBox2 = "SELECT * FROM IS_boxes WHERE boxID = $boxid LIMIT 0,1";
$rsSqlBox2 = mysql_query($sqlBox2);
$dataBox2 = mysql_fetch_array($rsSqlBox2);

while($dataTime=mysql_fetch_array($rsSqlTime)){

	if($dataTime["id"] == $oldtimeline) 
		$oldsorting = $dataTime["sorting"];

	if($newtimeline == -1 OR ($dataTime["sorting"] > $oldsorting AND $oldsorting <> -1)) {
	
		$newtimeline = $dataTime["dataid"];

		$reloadTime = $dataTime["delay"];
		$dataid = $dataTime["dataid"];
		$timeid = $dataTime["id"];

	}
	
	if($dataTime["sorting"] > $oldsorting AND $oldsorting <> -1) 
		break;

}

$sqlTemplate = "SELECT * FROM IS_templatedata WHERE id = ".$dataid." LIMIT 0, 1";
$rsSqlTemplate = mysql_query($sqlTemplate);
$dataTemplate=mysql_fetch_array($rsSqlTemplate);

$reloadLink = "template1.php?template=".$dataTemplate["templateid"]."&id=".$dataTemplate["id"]."&time_id=".$timeid."&boxid=".$boxid;

if($reloadTime > 0)
	echo "var t=setTimeout(function(){location.href='$reloadLink'},$reloadTime);";


?>

function IS_showDateTime() {
    var dtoday=new Date();
    var dh=dtoday.getHours();
    var dm=dtoday.getMinutes();
    var ds=dtoday.getSeconds();
	var dmth = dtoday.getMonth();
	var dday = dtoday.getDate();
	var dyear = dtoday.getFullYear();
	var monthArray = new Array();
monthArray[0] = "JAN";
monthArray[1] = "FEB";
monthArray[2] = "MAR";
monthArray[3] = "APR";
monthArray[4] = "MAJ";
monthArray[5] = "JUN";
monthArray[6] = "JUL";
monthArray[7] = "AUG";
monthArray[8] = "SEP";
monthArray[9] = "OKT";
monthArray[10] = "NOV";
monthArray[11] = "DEC";
	
    dh = IS_checkDateTime(dh);
    dm = IS_checkDateTime(dm);
    ds = IS_checkDateTime(ds);
    document.getElementById('timebox').innerHTML = dday + ". " + monthArray[dmth] + " | " +dh+":"+dm;
    var dt = setTimeout(function(){IS_showDateTime()},500);
}

function IS_checkDateTime(i) {
    if (i<10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}
</script>


<script>
function showRSS(str, boxid)
{
var idscroller = "scroller_"+boxid;

if (str.length==0)
  {
  document.getElementById(idscroller).innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject('Microsoft.XMLHTTP');
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById(idscroller).innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","getrss.php?q="+str,true);
xmlhttp.send();
}

function updateRSS(url, boxid){
	var t;
	//alert();
	showRSS(url, boxid);
	t = setTimeout(function(){updateRSS(url, boxid);}, 5000);
}

</script>
</head>

<body style="margin: 0;">
<?php

switch($dataTemplate["templateid"])	{ 
	
//URL
case 1:

	if($dataTemplate["text1"] <> '')
		echo '<iframe style="margin: 0; height: '.$dataBox2["height"].'px; width: '.$dataBox2["width"].'px; border: 0px;" scrolling="no" name="templateiframe" src="'.$dataTemplate["text1"].'"><iframe>';
break; 

//Text
case 2:

	$sqlText = "SELECT * FROM IS_texts WHERE id = ".$dataTemplate["int4"]." LIMIT 0, 1";
	$rsSqlText = mysql_query($sqlText);
	$dataText=mysql_fetch_array($rsSqlText);

//	echo '<div id="makeMeScrollable"><p>'.$dataTemplate["text1"].'</p></div>';
	
	echo '<div style="border: 0px solid #000000; padding: 20px; height: '.$dataBox2["height"].'px; width: '.$dataBox2["width"].'px;">';

		echo '<ul id="scroller_'.$boxid.'"><li>'.$dataText["textinput"].'</li></ul>';
	
	//echo '<marquee scrollamount="'.$dataTemplate["int2"].'" direction="'.$dataTemplate["text2"].'" height="'.$dataBox2["height"].'px" width="'.($dataBox2["width"]-40).'px;">'.$dataText["textinput"].'</marquee>';
	echo '</div>';
break;

//Video
case 3:

	/*
	echo '<embed type="application/x-vlc-plugin" 
			pluginspage="http://www.videolan.org" 
			version="VideoLAN.VLCPlugin.2"  
			width="'.$dataBox2["width"].'px;"  
			height="'.$dataBox2["height"].'px;" 
			id="vlc" 
			loop="yes" 
			autoplay="yes" 
			target="../'.$dataTemplate["text1"].'"
	>';
	echo '</embed>';
	*//*
//	echo '<video id="video" width="100%" height="100%" src="../../img/VIDEO0026.mp4" controls>';

	echo '
	<video width="320" height="240" controls>
	<source src="../../img/VIDEO0026.mp4" type="video/mp4">
	<source src="../../img/VIDEO0026.mp4" type="video/ogg">
		Your browser does not support the video tag.
	</video> 
	';

	<source src="http://www.html5rocks.com/en/tutorials/video/basics/Chrome_ImF.mp4" type=\'video/mp4; codecs="avc1.42E01E, mp4a.40.2"\' />
        <source src="../upload/movie/Chrome_ImF.mp4"  type=\'video/mp4; codecs="avc1.42E01E, mp4a.40.2"\' />
*/
/* HTML5
*/echo '

    <video id="video_'.$dataTemplate["id"].'" poster="../../img/capable_logo.jpg" width="100%" height="100%" controls loop="true">
		<source src="../'.$dataTemplate["text1"].'" />
    </video> 
	<script>
		video = document.getElementById("video_'.$dataTemplate["id"].'");
		//video.addEventListener("click",function(){
		  video.play();
		//},false);
	</script>
	';
/* */
break;

//Images
case 4:

//	echo $dataTemplate["text1"];
	if($dataTemplate["int1"] > 0)
	echo '<img src="../'.$dataTemplate["text1"].'" border="'.$dataTemplate["int3"].'" width="'.$dataTemplate["int1"].'">';
	else
	echo '<img src="../'.$dataTemplate["text1"].'" border="'.$dataTemplate["int3"].'">';
break;

//TV
case 5:
break;

//Slideshow
case 6:

//	echo $dataTemplate["text1"];
	$dataSlide = $dataTemplate["text1"];
	$timelap = $dataTemplate["int1"]*1000;

	echo '<iframe style="padding: 0; margin: 0; height: '.$dataBox2["height"].'px; width: '.$dataBox2["width"].'px; border: 0px;" scrolling="no" name="slideiframe" src="slideView.php?timelap='.$timelap.'&dataSlide='.$dataSlide.'"></iframe>';

break;

//Agenda
case 7:

	$textarray = explode("[IS_cellsplit]", $dataTemplate["text1"]);
	$sizearray = explode("[IS_cellsplit]", $dataTemplate["text2"]);
	$showarray = $dataTemplate["text3"];
	$count = -1;

	echo "<table valign='bottom' style='border: 0px solid #000000;' cellspacing='0' cellpadding='5'><tr height='".($sizearray[0]+20)."' valign='bottom'>";
	for ($i = 1; $i <= $dataTemplate["int1"]; $i++) {
		$checkstring = "[IS_cellsplit]".$i."[IS_cellsplit]";
		if(strpos($showarray,$checkstring) <> 0){

		if($i > 1) echo "</tr><tr height='".($sizearray[0]+20)."' valign='bottom'>";
		for ($j = 1; $j <= $dataTemplate["int2"]; $j++) {
			$count++;
	
			echo "<td style='border-bottom: 1px solid #000000;' width='".$sizearray[$j]."'>".$textarray[$count]."</td>";
		
		}
		}
	}
	
	echo "</tr></table>";
break;

//RSS feed
case 8:

echo '<div id="rssbox" style="border: 0px solid #000000; padding: 0px; height: '.$dataBox2["height"].'px; width: '.$dataBox2["width"].'px;">';
echo "<ul id='scroller_".$boxid."'>";


for ($i = 1; $i <= 10; $i++) {
echo "<li></li>";
}

echo "</ul>";
echo "</div>";

break;



//Dato tid
case 9:

echo '<div id="timebox" style="font-size:30px; font-face:Tahoma, Geneva, sans-serif; font-weight: bold; border: 0px solid #000000; padding: 0px; height: '.$dataBox2["height"].'px; width: '.$dataBox2["width"].'px;">';
echo '</div>';
echo '<script type="text/javascript">IS_showDateTime();</script>';
break;
}
?>


<script type="text/javascript">

<?php


if($dataTemplate["templateid"] == 2 OR $dataTemplate["templateid"] == 8){

	if($dataTemplate["templateid"] == 8) echo "showRSS('".$dataTemplate["text1"]."', '".$boxid."');";

?>
(function($) {
	$(function() { //on DOM ready 

    		$("#scroller_<?php echo $boxid;?>").simplyScroll({
			autoMode: 'loop',
	
			<?php
			switch($dataTemplate["text2"])	{
	
			case 'up':
				echo "orientation: 'vertical',";
				echo "direction: 'forwards',";
				echo "customClass: 'vert',";
			break;
			
			case 'down':
				echo "orientation: 'vertical',";
				echo "direction: 'backwards',";
				echo "customClass: 'vert',";

			break;
			
			case 'left':
				echo "orientation: 'horizontal',";
				echo "direction: 'forwards',";
			break;
			
			case 'right':
				echo "orientation: 'horizontal',";
				echo "direction: 'backwards',";
			break;
			}
			?>
			frameRate: 20,
			speed: <?php echo $dataTemplate["int2"];?>
			});
			
	});
 })(jQuery);

 <?php } ?>
 
	<?php
	if($dataTemplate["templateid"] == 8){
		echo "updateRSS('".$dataTemplate["text1"]."', '".$boxid."');";
 	}?>
 
 </script>


</body>
</html>
<?php mysql_close();?>