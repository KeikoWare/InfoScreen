<?php

session_start();
if(!$_SESSION["loggedinVerified"] == 1) header("location: login.php");
include("onscreen/mysql_dbconnect.php");
include("inc/url.php");
$menuchoice = ($_REQUEST["content"] ? $_REQUEST["content"] : "");

$activescheme = ($_REQUEST["schemeid"] ? $_REQUEST["schemeid"] : 1);
$activeboxid  = $_REQUEST["boxid"];


$sqlScheme = "SELECT * FROM IS_schemes WHERE id = $activescheme";
$rsSqlScheme = mysql_query($sqlScheme);
$dataScheme=mysql_fetch_array($rsSqlScheme);

$sqlrights = "SELECT IS_userrights.type AS rightstype, IS_userrights.typeid AS rightsid FROM IS_usergrouprel WHERE userid = ".$_SESSION["userid"]." INNER JOIN IS_userrights ON IS_usergrouprel.groupid = IS_userrights.groupid";
$rsSqlrights = mysql_query($sqlRights);

while($rights = mysql_fetch_array($rsSqlrights)){
	$_SESSION['userrights'][$rights["rightstype"]] = $rights["rightsid"];
}

$sql = "SELECT sdvalue FROM IS_systemdata WHERE sdtype = 'version' LIMIT 0, 1";
$rssql = mysql_query($sql);
$data = mysql_fetch_array($rssql);


$version = $data["sdvalue"];

if($version == ''){
	$sqlSystem = "INSERT INTO IS_systemdata (sdtype, sdvalue) VALUES ('version', '1.00')";
	mysql_query($sqlSystem);
	$version = '1.00';
}

?>

<!DOCTYPE html>
<html>
<head>
<!--
THIS IS A PRODUCT DEVELOPED AND OWNED BY CAPABLE APS
THIS PRODUCT IS SOLD ALONG WITH OUR CAPABLE ONSCREEN INFOBOXES AND
ARE NOT ALLOWED TO BE COPIED, DISTRIBUTED OR IN ANY 
OTHER WAY SHARED WITHOUT WRITTEN AUTHORIZATION FROM CAPABLE APS

Contact for Capable ApS:
Telephone: (+45) 70 3456 07
E-Mail: info@capable.dk
-->

<title>INFOSCREEN</title>

<meta name="viewport" content="user-scalable=0">

<meta charset="utf-8" />


<link href="css/main.css" rel="stylesheet" >

<link rel="stylesheet" href="css/jquery-ui.css" />
<link href="css/php_file_tree.css" rel="stylesheet">


<script type="text/javascript" src="js/main.js.php"></script>

<script src="js/jquery-1.9.1.js"></script>

<script src="js/jquery-ui.js"></script>

<script type="text/javascript" src="js/jscolor.js"></script>
<script type="text/javascript" src="js/nicEdit.js.php?content=<?php echo $_REQUEST["content"];?>"></script>

<script>
//var boxData = new Array();
var editX 	= <?php echo ($dataScheme["width"] ? $dataScheme["width"] : 0);?>;
var editY   = <?php echo ($dataScheme["height"] ? $dataScheme["height"] : 0);?>;
var zoom 	= 100;
var autozindex = 0;
var boxEditId, timelineid;
var scheme = <?php echo $activescheme.';';

$sql="SELECT * FROM IS_boxes WHERE scheme = ".$activescheme;
$rsSql = mysql_query($sql);
echo 'var objBoxes = {';
	$first = 1;
	
	while($boxes = mysql_fetch_array($rsSql)){
		if($first == 0) echo ',';
		
		echo $boxes['boxID'] . ' : {';
		echo '"width" : ' . $boxes['width'];
		echo ',';
		echo '"height" : ' . $boxes['height'];
		echo ',';
		echo '"left" : ' . $boxes['left'];
		echo ',';
		echo '"top" : ' . $boxes['top'];
		echo ',';
		echo '"zindex" : ' . $boxes['zindex'];
		echo ',';
		echo '"name" : "' . $boxes['name'] . '"';
		echo ',';
		echo '"editcolor" : "' . $boxes['editColor'] . '"';
		echo ',';
		echo '"position" : "' . $boxes['position'] . '"';
		echo ',';		
		echo '"displaycolor" : "' . $boxes['displayColor'] . '"';
		echo '}';
	
		$first = 0;
	}

echo '};';



$rsSql = mysql_query($sql);

echo '$(function() {';
		echo '$( "#editor" ).draggable();';
	while($boxes = mysql_fetch_array($rsSql)){
		echo '$( "#boxid'.$boxes['boxID'].'" ).draggable();';
		echo '$( "#boxid'.$boxes['boxID'].'" ).resizable();';
	}
echo '	});';		
	
?>

$(function() {
	$( "#progressbar" ).progressbar({
		value: false
    });

	var progressbar = $( "#progressbar" ),
	progressbarValue = progressbar.find( ".ui-progressbar-value" );

	progressbarValue.css({
		"background": '#006633'
	});
});


function reloadpage(){

	$.ajax({ 
		type: "POST",
		url: 'setreload.php',
		data: '',
		dataType: "html",
		success: function(data) {

			
		
		},
		error: function() {
			alert('Error occured');
		}
	});

}


</script>


</head>
<body style="margin: 0 0 0 0;">

	<?php ($version*1); $html = file_get_contents('http://www.capable.dk/onscreen/update/LatestUpdate.php'); $html = ($html * 1); if($html > $version) 
	echo '<div id="updatecheck" style="height: 30px; width: 100%; background: #FF0000; color: #FFFFFF; padding: 7px; font-size: 14px; text-align: center;">Der er en opdatering klar! <button onclick="location.href=\'updater.php?version='.$version.'\';">OPDATER</button></div>';
	
	?>

	<div class="menubox" style="z-index: 1000;">

		<ul id="nav">
			<li><a href="?content=home" title="">Home</a></li>


			<?php if($_SESSION["group"]["editdesign"]){?>
			<li><a href="#" title="">Design</a>
				<ul id="nav" style="width: 250px;">
				<?php
				$sqlSchemeMenu = 'SELECT * FROM IS_schemes ORDER BY name ASC';
				$rsSqlSchemeMenu = mysql_query($sqlSchemeMenu);
				while($dataSchemeMenu=mysql_fetch_array($rsSqlSchemeMenu)){

					echo '<li><a href="?content=scheme&schemeid='.$dataSchemeMenu["id"].'" title="">'.$dataSchemeMenu["name"].'</a>';
						echo '<ul>';

						$sqlSchemeSubMenu = 'SELECT * FROM IS_boxes WHERE scheme ='.$dataSchemeMenu["id"].' ORDER BY active DESC, name ASC';
						$rsSqlSchemeSubMenu = mysql_query($sqlSchemeSubMenu);
						while($dataSchemeSubMenu=mysql_fetch_array($rsSqlSchemeSubMenu)){
							echo '<li id="menuid'.$dataSchemeSubMenu["boxID"].'"><a href="?content=scheme&schemeid='.$dataSchemeMenu["id"].'&boxid='.$dataSchemeSubMenu["boxID"].'" title="">'.$dataSchemeSubMenu["name"].'</a>';
						}
						
						echo '</ul>';
					echo '</li>';
				}
				?>
				<li style="border-top: 2px solid #000000; font-style:italic; font-weight:bold"><a href="?content=editScheme&schemeid=new" title="">Nyt design</a></li>
				</ul>
			</li>
			<?php }?>

			<?php if($_SESSION["group"]["editbox"]){?>
			<li><a href="#" title="">Edit</a>
				<ul id="nav" style="width: 250px;">
				<?php
				$sqlSchemeMenu = 'SELECT * FROM IS_schemes ORDER BY name ASC';
				$rsSqlSchemeMenu = mysql_query($sqlSchemeMenu);
				while($dataSchemeMenu=mysql_fetch_array($rsSqlSchemeMenu)){

					echo '<li><a href="?content=editScheme&schemeid='.$dataSchemeMenu["id"].'" title="">'.$dataSchemeMenu["name"].'</a>';
						echo '<ul>';

						$sqlSchemeSubMenu = 'SELECT * FROM IS_boxes WHERE scheme ='.$dataSchemeMenu["id"].' ORDER BY active DESC, name ASC';
						$rsSqlSchemeSubMenu = mysql_query($sqlSchemeSubMenu);
						while($dataSchemeSubMenu=mysql_fetch_array($rsSqlSchemeSubMenu)){
							echo '<li id="menuid'.$dataSchemeSubMenu["boxID"].'"><a href="?content=editBox&boxid='.$dataSchemeSubMenu["boxID"].'" title="">'.$dataSchemeSubMenu["name"].'</a></li>';
						}
						
						echo '</ul>';
					echo '</li>';
				}
				?>
				</ul>
			
			</li>
			<?php }?>

			<?php if($_SESSION["group"]["upload"]){?>
			<li><a href="?content=upload" title="">Upload</a></li>
			<?php }?>
			
			<?php if($_SESSION["group"]["settings"]){?>
			<li><a href="#" title="">Indstillinger	</a>
			
			<ul>
			<li id="settingsGroups"><a href="#" title="">Sikkerhed</a>
						<ul>
						<li id="settingsGroups"><a href="?content=editGroups" title="">Brugergrupper</a></li>
						<li id="settingsUsers"><a href="?content=editUsers" title="">Brugere</a></li>
						</ul>
			</li>
			<li id="settingsUsers"><a href="?content=settings" title="">Opsætning</a></li>
			</ul>
			</li>
			<?php }?>
			
			<?php if($_SESSION["group"]["system"]){?>
			<li><a href="#" title="">System</a></li>
			<?php }?>
		</ul>
		
		<div style="right: 60px; top: 5px; width: 150px; position: absolute; color: #FFFFFF; padding: 5px;"><i>OnScreen</i> ver. <?php echo $version;?></div>
		<div style="right: 15px; top:2px; width: 80px; position: absolute; color: #FFFFFF;"><a class="img" target="_blank" href="http://www.capable.dk"><img border="0" src="img/capable_logo.jpg" height="31px;" align="right"></a></div>

	</div>
	
	<div style="position: relative; display: block; width: 100%; height: 40px; background: #FFFF00; border-bottom: 3px solid #000000;">

	<?php
	
	if (isset($menuchoice)){
	switch($menuchoice){

		Case "scheme":

		echo '
		<div style="position: absolute; top: 10px; left: 10px;">
		Zoom: 
		<select onchange="saveSystemdata(this.value); rebuildBoxes(this.value);">
			<option value="100">100%</option>
			<option value="75">75%</option>
			<option value="50">50%</option>
			<option value="25">25%</option>
		</select>
		</div>
		
		<div style="position: absolute; top: 8px; left: 150px;">
		<button id="test" style="width: 80px;" onclick="addNewBox();">Tilføj box</button>
		</div>

		<div style="position: absolute; top: 8px; left: 250px;">
		<button style="width: 80px;" onclick="editBox();">Edit box</button>
		</div>

		<div style="position: absolute; top: 8px; left: 350px;">
		<button style="width: 80px;" onclick="saveBoxes();">Gem alt</button>
		</div>
		';

		break;
		
		Case "editScheme":

		echo '

		<div style="position: absolute; left: 10px; top: 10px;">
			<button style=" width: 100px;" type="submit" id="saveSchemeSubmit">Gem</button>
		</div>
		';
		if($_REQUEST["scheme"] <> 'new')
		echo '
		<div style="position: absolute; left: 200px; top: 10px;">
			<button style=" width: 100px;" onclick="if(confirm(\'Er du sikker på at du vil slette dette design?\n\nData kan ikke genskabes!\')) location.href=\'removeDesign.php?id='.$_REQUEST["scheme"].'\'; else return false;">Slet</button>
		</div>
		';
		break;

		Case "editBox":

		echo '

		<div style="position: absolute; top: 10px; left: 10px;">
		<button style="width: 80px;" onclick="saveTimelines();">Gem alt</button>
		</div>
		';
		break;

		
		Case "editText":
/*
		echo '

		<div style="position: absolute; left: 10px; top: 10px;">
			<button style=" width: 100px;" type="submit" id="saveTextSubmit">Gem</button>
		</div>
		';
		break;
*/		
		Default:
			break;
		}
} else {
	echo "ERROR: no such value!";
}


		?>

		
		<div id="aktiver" style="display: block; text-align: center; float: right; margin-top: 10px; margin-right: 10px;"><button onclick="reloadpage();">Aktiver alle ændringer</button></div>
		<div id="progressbar" style="display: none; text-align: center; width: 300px; float: right; margin-top: 7px; margin-right: 10px;"><div id="progressText" style="z-index: 1; width: 300px; text-align: center; position: absolute; font-size: 20px; color: #FFFFFF;">Gemmer</div></div>

	</div>	

<?php

if (isset($menuchoice)){
	switch($menuchoice){

		Case "scheme":
			include("editSchemeBoxes.php");
			break;

		Case "editScheme":
			include("editScheme.php");
			break;

		Case "editBox":
			include("editBox.php");
			break;

		Case "editText":
			include("editText.php");
			break;

		Case "editSlideshow":
			include("editSlideshow.php");
			break;

		Case "editAgenda":
			include("editAgenda.php");
			break;

		Case "editVideo":
			include("editVideo.php");
			break;

		Case "editImage":
			include("editImage.php");
			break;

		Case "upload":
			include("upload.php");
			break;

		Case "settings":
			include("settings.php");
			break;

		Case "editGroups":
			include("groups.php");
			break;

		Case "editUsers":
			include("users.php");
			break;

		Case "home":
			include("home.php");
			break;

		Default:
			include("home.php");
			break;
		}
} else {
	echo "ERROR: no such value!";
}

if(in_array(1,$_SESSION["userrights"]) ) echo "ok";
echo $_SESSION["userrights"][0];
?>		

</body>
</html>
<?php mysql_close();?>
