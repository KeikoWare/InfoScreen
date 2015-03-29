	<?php
	
	
	if(!$_SESSION["loggedinVerified"] == 1) header("location: login.php");

	include('functions/php_file_tree_upload.php');
	
	$sqlTemplate = 'SELECT * FROM IS_templatedata WHERE id = '.$_REQUEST["timelineid"];
	$rsTemplate = mysql_query($sqlTemplate);
	$dataTemplate=mysql_fetch_array($rsTemplate);
	?>
	<script type="text/javascript" src="<?php echo $webmainurlpath;?>/js/php_file_tree.js"></script>
	<div class="test" id="shemeEdit" style="overflow: hidden; position: relative; display: block; width: 800px; min-height: 350px; margin: 0 auto; border: 5px solid #006633; padding: 10px;">
	<b>Vælg billede:</b>
	<?php 
	echo php_file_tree("onscreen/upload/images/" , "[link]", array(),false, $_REQUEST["timelineid"], $_REQUEST["boxid"]);
	?>
	Billedesti for slideshow:<br>
	<input type="text" name="uploadPath" id="uploadPath" style="width: 400px;" readonly>
	<br><br>
	Tidsinterval for billeder (sekunder):
	
	<input type="text" name="timelap" id="timelap" style="width: 20px;" value="<?php echo $dataTemplate["int1"];?>">
	<br><br>
	<button onclick="location.href='saveSlideFolder.php?folder='+document.getElementById('uploadPath').value+'&timelap='+document.getElementById('timelap').value+'&timelineid=<?php echo $_REQUEST["timelineid"];?>&boxid=<?php echo $_REQUEST["boxid"];?>'; return false;">Gem</button>

	</div>
	