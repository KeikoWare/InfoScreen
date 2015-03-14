	<?php
	if(!$_SESSION["loggedinVerified"] == 1) header("location: login.php");

	include('functions/php_file_tree.php');
	
	$sqlTimeline = 'SELECT * FROM IS_timeline WHERE id = '.$_REQUEST["timelineid"];
	$rsTimeline = mysql_query($sqlTimeline);
	$dataTimeline=mysql_fetch_array($rsTimeline);
	?>
	<script type="text/javascript" src="<?php echo $webmainurlpath;?>/js/php_file_tree.js"></script>
	<div class="test" id="shemeEdit" style="overflow: hidden; position: relative; display: block; width: 800px; height: 350px; margin: 0 auto; border: 5px solid #006633; padding: 10px;">
	<b>Vælg video:</b>
	<?php 
	echo php_file_tree("onscreen/upload/movie/" , "[link]", array(),true, $_REQUEST["timelineid"], $_REQUEST["boxid"]);
	?>
	</div>

