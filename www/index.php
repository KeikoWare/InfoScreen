<?php
include("onscreen/mysql_dbconnect.php");
$menuchoice = ($_REQUEST["content"] ? $_REQUEST["content"] : "");
$sqlScheme = "SELECT * FROM IS_schemes WHERE id = $activescheme";
<script>
echo '$(function() {';
$(function() {
	var progressbar = $( "#progressbar" ),
</script>
</head>
	<?php ($version*1); $html = file_get_contents('http://www.capable.dk/onscreen/update/LatestVersion.php'); $html = ($html * 1); if($html > $version) 
	<div class="menubox" style="z-index: 1000;">
						$sqlSchemeSubMenu = 'SELECT * FROM IS_boxes WHERE scheme ='.$dataSchemeMenu["id"].' ORDER BY active DESC, name ASC';
						echo '</ul>';
			<li><a href="#" title="">Edit</a>
			<?php }?>
			<li><a href="?content=upload" title="">Upload</a></li>
			<?php }?>
			<?php if($_SESSION["group"]["settings"]){?>
			<li><a href="#" title="">Indstillinger	</a>
			<ul>
			<li id="settingsGroups"><a href="#" title="">Sikkerhed</a>
			<?php if($_SESSION["group"]["system"]){?>
		<div style="right: 60px; top: 5px; width: 150px; position: absolute; color: #FFFFFF; padding: 5px;"><i>OnScreen</i> ver. <?php echo $version;?></div>
		echo '