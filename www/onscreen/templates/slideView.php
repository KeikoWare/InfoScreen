<!DOCTYPE html>
<html>
<head>
</head>

<body style="margin: 0;">

<?php
	session_start();
	$dir = "../".substr($_REQUEST["dataSlide"],9);

	// Sort in ascending order - this is default
	$a = scandir($dir);


	if(!in_array($_SESSION["fileid"], $a)) $_SESSION["fileid"] = '';
	
	$request = $_SESSION["fileid"];
	foreach ($a as $key => $value) {
		
		if (strtolower(substr($value,-3)) == 'jpg'){
			if ($firstimg == '') $firstimg = $value;
			
			if ($request == ''){
				if ($value == ''){
					$request = $first;
					$_SESSION["fileid"] = $first;
					break;
				} else {
					$request = $value.' - '.$firstimg; 
					$_SESSION["fileid"] = $value;
					break;
				}
			}
			if($value == $_SESSION["fileid"]) $request = '';
		}
	}
	
	if ($request == '' OR $_SESSION["fileid"] == ''){$_SESSION["fileid"] = $firstimg;}
	if($_SESSION["fileid"] <> '') echo '<img src="'.$dir.'/'.$_SESSION["fileid"].'" border="0">';
	echo '<script>setTimeout(function(){window.location.reload();},'.$_REQUEST["timelap"].');</script>';		
	
?>
</body>
</html>