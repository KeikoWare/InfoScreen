	<?php

	if(!$_SESSION["loggedinVerified"] == 1) header("location: login.php");

	?>

	<div class="test" id="shemeEdit" style="position: relative; display: block; width: 800px; min-height: 350px; margin: 0 auto; border: 5px solid #006633; padding: 10px;">

	<b>System:</b>
	<br><br>
	<?php
	if($version == ''){
		$sqlSystem = "INSERT INTO IS_systemdata (sdtype, sdvalue) VALUES ('version', '1.00')";
		mysql_query($sqlSystem);
		$version = '1.00';
	}

	$sql = "SELECT sdvalue FROM IS_systemdata WHERE sdtype = 'zoom' LIMIT 0, 1";
	$rssql = mysql_query($sql);
	$zoomdata = mysql_fetch_array($rssql);
	

	
	$zoom = ($zoomdata["sdvalue"] ? $zoomdata["sdvalue"] : 100);
	
	echo "Version: $version <br><br>";
	echo "Standard zoom: $zoom %<br><br>";
	
	?>
	<hr><br>
	Kontakt Capable ApS <br><br>
	Mail: info@capable.dk <br><br>
	Tel: +45 70 3456 07
	
	
	</div>
