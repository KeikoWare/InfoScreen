	<?php
	if(!$_SESSION["loggedinVerified"] == 1) header("location: login.php");

	include('functions/php_file_tree_upload.php');
	
	$sqlTimeline = 'SELECT * FROM IS_timeline WHERE id = '.$_REQUEST["timelineid"];
	$rsTimeline = mysql_query($sqlTimeline);
	$dataTimeline=mysql_fetch_array($rsTimeline);

	?>
	<script type="text/javascript" src="<?php echo $webmainurlpath;?>/js/php_file_tree.js"></script>
	<div class="test" id="shemeEdit" style="position: relative; display: block; width: 800px; min-height: 350px; margin: 0 auto; border: 5px solid #006633; padding: 10px;">
	<b>Vælg upload-mappe:</b>
	
	<?php 
	echo php_file_tree("onscreen/upload/" , "[link]", array(),true, $_REQUEST["timelineid"], $_REQUEST["boxid"]);
	?> 
	<form action="uploadFile.php" method="post" enctype="multipart/form-data">
	<b>Destination:</b><br> 
	<input type="text" id="uploadPath" name="uploadPath" style="width: 500px; border: 0px;" value="onscreen/upload" readonly>
	<br><br>
	<b>Uploadfil:</b><br> 
	<input type="file" id="file" name="file" style="width: 303px;" value="">
	<br><br>
	<input type="submit" value="Upload">
	</form>
	<br><br><br>
	<b>Opret ny undermappe:</b><br>
	<input type="text" id="newDir" name="newDir" style="width: 300px;" value=""><br>
	<i>(oprettes i "destinationsmappen")</i>
	<br><br>
	<button onclick="location.href='createDir.php?newDir='+document.getElementById('newDir').value+'&path='+document.getElementById('uploadPath').value; return false;">Opret</button>
 
	</div>
