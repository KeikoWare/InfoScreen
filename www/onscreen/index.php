<?php
session_start();
date_default_timezone_set('Europe/Copenhagen');

include("mysql_dbconnect.php");
?>

<html>
<head>
<!--
THIS IS A PRODUCT DEVELOPED AND OWNED BY CAPABLE APS
THIS PRODUCT IS SOLD ALONG WITH OUR INFOSCREENS AND
ARE NOT ALLOWED TO BE COPIED, DISTRIBUTED OR IN ANY 
OTHER WAY SHARED WITHOUT WRITTEN AUTHORIZATION FROM CAPABLE APS

Contact for Capable ApS:
Telephone: (+45) 70 3456 07
E-Mail: info@capable.dk
-->

	<meta name="viewport" content="user-scalable=0">

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



<title>INFOSCREEN</title>

  <meta charset="utf-8" />

  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />

  <link rel="Stylesheet" type="text/css" href="scroll/css/smoothDivScroll.css" />
  
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>

  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

  
  	<!-- Latest version (3.0.6) of jQuery Mouse Wheel by Brandon Aaron
	     You will find it here: http://brandonaaron.net/code/mousewheel/demos -->
	<script src="js/jquery.mousewheel.min.js" type="text/javascript"></script>

	<!-- jQuery Kinectic (1.5) used for touch scrolling -->
	<script src="js/jquery.kinetic.js" type="text/javascript"></script>

	<!-- Smooth Div Scroll 1.3 minified-->
	<script src="js/jquery.smoothdivscroll-1.3-min.js" type="text/javascript"></script>

  <script>
	var ip = setTimeout(function(){
		document.getElementById('ipaddress').style.display='none';
		var height = document.body.clientHeight;
		var width = document.body.clientWidth;

		var xmlhttp;
		if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		}
		else{// code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.open("GET","http://localhost/saveSystemScreenDim.php?width=" + width +"&height=" + height,false); // ASYNC = false
		xmlhttp.send();
}

		
	},10000);

  $(function() {

    $( "#draggable" ).draggable();
    $( "#draggable" ).resizable();

  });		

  
	setTimeout(function call() {

	
		$.ajax({
				type: "POST",
				url: 'checkreload.php',
				data: '',
				dataType: "html",
				success: function(data) {
	
					if(data == 'reload') window.location.reload();
				
				},
				error: function() {
					alert('Error occured');
				}
			});


	setTimeout( call, 5000 ); // loop
	}, 10000 );
  
  </script>




</head>
<body style="margin: 0 0 0 0;">
	<?php
	if($_SESSION["reload"] <> 1){
	$ip = shell_exec("/sbin/ifconfig | grep 'inet addr:' | grep -v '127.0.0.1' | cut -d: -f2 | awk '{ print $1}'");
	echo "<div id='ipaddress' style='display: block; z-index: 1000; top: 10px; left: 10px; position: absolute; padding: 20px;'>";
	echo "IP ADRESSE : " . $ip .$_SESSION["reload"];
	echo "</div>";
	}
	?>

	<?php
	
	$sqlScheme = "SELECT * FROM IS_schemes WHERE active = 1
	AND (
		(starttime = '00:00:00' AND endtime = '00:00:00')	
		OR
		(starttime <= DATE_ADD(CURTIME(), INTERVAL 1 HOUR) AND endtime >= DATE_ADD(CURTIME(), INTERVAL 1 HOUR) AND starttime < endtime)
		OR
		(starttime <= DATE_ADD(CURTIME(), INTERVAL 1 HOUR) AND endtime <= DATE_ADD(CURTIME(), INTERVAL 1 HOUR) AND starttime > endtime)	
		OR
		(starttime >= DATE_ADD(CURTIME(), INTERVAL 1 HOUR) AND endtime >= DATE_ADD(CURTIME(), INTERVAL 1 HOUR) AND starttime > endtime)	
	)
	";
	$rsSqlScheme = mysql_query($sqlScheme);
	$dataScheme=mysql_fetch_array($rsSqlScheme);

	if(mysql_num_rows($rsSqlScheme) == 0) {
	echo "<center><br><br><br><img src='../img/capable_logo.jpg'><br><br>PUBLIC DISPLAY BY CAPABLE ApS<br><br><b style='font-size:26px;'>:: NO ACTIVE SCHEME ::</b><br><br>CONTACT CAPABLE +45 70 3456 07</center>";
	echo '<script>setTimeout(function(){location.reload();},'.(1000*60).');</script>';
	}
	
	if($dataScheme["id"] > 0){
		if($dataScheme["starttime"] <> '00:00:00' OR $dataScheme["endtime"] <> '00:00:00'){
			if($dataScheme["starttime"] > $dataScheme["endtime"]){
				$timemillisec = (round(strtotime($dataScheme["endtime"]) * 1000)-round(microtime(true) * 1000));
			}  else {
				$timemillisec = (round(strtotime($dataScheme["endtime"]) * 1000)-round(microtime(true) * 1000));
			}
			echo '<script>setTimeout(function(){location.reload();},'.$timemillisec.');</script>';
		}
	}
	
	echo $timemillisec;

	
	echo '<div style="display: block; position: relative; width: '.$dataScheme["width"].'px; height: '.$dataScheme["height"].'px; overflow: hidden;';

	
	if($dataScheme["backgroundImage"] <> ""){ 
		$bckStyle=($dataScheme["imageStyle"] == 3 ? 
		""
		: ($dataScheme["imageStyle"] == 2 ?
		"no-repeat center center fixed;"
		:
		"no-repeat center center fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;"
		));
		
		echo ' background: #'.$dataScheme["background"].' url('.$dataScheme["backgroundImage"].') '.$bckStyle;
	} else {
		echo ' background: #'.$dataScheme["background"].' ';
	}
	
	echo '">';
		
	$sqlBox = "SELECT * FROM IS_boxes WHERE scheme = ".$dataScheme["id"]." ORDER BY zindex";
	$rsSqlBox = mysql_query($sqlBox);
	while($dataBox=mysql_fetch_array($rsSqlBox)){
	$style='overflow: hidden; margin: 0;';


	switch($dataBox["position"]){
	case "1top":
	$style.= ($dataBox["position"] <> "" ? 'position: fixed; top: 0px; ' : '');

	break; 
	case "1bottom":
	$style.= ($dataBox["position"] <> "" ? 'position: fixed; bottom: 0px; ' : '');

	break;

	default:
	$style.= ($dataBox["position"] <> "" ? 'position: absolute; ' : '');
	$style.= ($dataBox["top"] <> -1 ? 'top: '.$dataBox["top"].'px; ' : '');
	}


	$style.= ($dataBox["width"] <> 0 ? 'width: '.$dataBox["width"].'px; ' : '');
	$style.= ($dataBox["height"] <> 0 ? 'height: '.$dataBox["height"].'px; ' : '');
	$style.= ($dataBox["displayColor"] <> "" ? 'background: #'.$dataBox["displayColor"].'; ' : '');
	$style.= ($dataBox["left"] <> -1 ? 'left: '.$dataBox["left"].'px; ' : '');

	echo '<div id="boxid'.$dataBox["boxid"].'" name="boxname'.$dataBox["boxid"].'" style="'.$style.'">';
	if($dataBox["template"] > 0) 
	echo '<iframe style="padding: 0; margin: 0; height: '.$dataBox["height"].'px; width:'.$dataBox["width"].'px; border: 01px;" scrolling="no" name="templateiframe" src="templates/template'.$dataBox["template"].'.php?boxid='.$dataBox["boxID"].'"></iframe>';

	echo '</div>';
	
	}

	echo '</div>';
	?>


</body>
</html>
<?php mysql_close();?>
