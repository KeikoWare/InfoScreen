	<?php
	
	
	function formatSeconds( $seconds )
	{
	  $hours = 0;
	  $milliseconds = str_replace( "0.", '', $seconds - floor( $seconds ) );

	  if ( $seconds > 3600 )
	  {
		$hours = floor( $seconds / 3600 );
	  }
	  $seconds = $seconds % 3600;


	  return str_pad( $hours, 2, '0', STR_PAD_LEFT )
		   . gmdate( ':i:s', $seconds )
		   . ($milliseconds ? ".$milliseconds" : '')
	  ;
	}
	
	
	$sqlBox = 'SELECT * FROM IS_boxes WHERE boxID = '.$_REQUEST["boxid"];
	$rsSqlBox = mysql_query($sqlBox);
	$dataBox=mysql_fetch_array($rsSqlBox);

	$sqlTimeline = 'SELECT * FROM IS_timeline WHERE boxID = '.$_REQUEST["boxid"].' AND active = "1" ORDER BY sorting ASC';
	$rsTimeline = mysql_query($sqlTimeline);

	echo '<script>';
	echo 'var objTimelines = {';
		$first = 1;
		
		while($timelines = mysql_fetch_array($rsTimeline)){
			$sqlTemplateData = 'SELECT * FROM IS_templatedata WHERE id = '.$timelines["dataid"];
			$rsTemplateData = mysql_query($sqlTemplateData);
			$dataTemplateData=mysql_fetch_array($rsTemplateData);

			if($first == 0) echo ',';
			
			echo $dataTemplateData['id'] . ' : {';
			echo '"delay" : ' . $timelines['delay'];
			echo ',';
			echo '"sorting" : ' . $timelines['sorting'];
			echo ',';
			echo '"templateid" : ' . $dataTemplateData['templateid'];
			echo ',';
			echo '"text1" : "' . addslashes($dataTemplateData['text1']);
			echo '",';
			echo '"text2" : "' . addslashes($dataTemplateData['text2']);
			echo '",';
			echo '"text3" : "' . addslashes($dataTemplateData['text3']);
			echo '",';
			echo '"text4" : "' . addslashes($dataTemplateData['text4']);
			echo '",';
			echo '"int1" : ' . $dataTemplateData['int1'];
			echo ',';
			echo '"int2" : ' . $dataTemplateData['int2'];
			echo ',';
			echo '"int3" : ' . $dataTemplateData['int3'];
			echo ',';
			echo '"int4" : ' . $dataTemplateData['int4'];
			echo '}';
		
			$first = 0;
		}

	echo '};';
	echo '</script>';
	
	$rsTimeline = mysql_query($sqlTimeline);
	?>
	
	<div class="test" id="timelineid" style="position: relative; display: block; width: 800px; min-height: 330px; padding: 10px; margin: 0 auto; border: 5px solid #006633;">
	<?php
	while($dataTimeLine=mysql_fetch_array($rsTimeline)){

		$delay=formatSeconds($dataTimeLine["delay"]/1000);
		list($hour, $min, $sec) = split(":", $delay);
		
		$sqlTemplateData = 'SELECT * FROM IS_templatedata WHERE id = '.$dataTimeLine["dataid"];
		$rsTemplateData = mysql_query($sqlTemplateData);
		$dataTemplateData=mysql_fetch_array($rsTemplateData);
		
		echo '<div class="timeline" id="timelineid'.$dataTemplateData["id"].'" style="overflow: hidden; position: relative; display: block; width: 780px; height: 20px; margin: 0 auto; border: 1px solid #006633; padding: 10px;">';
		
		switch($dataTemplateData["templateid"]){

		//Url
		case 1:
		echo '<div style="padding: 14px; position: absolute; top: 0px; left: 0px; background: #006633; width: 50px; height: 40px; color: #FFFFFF;">Url:</div><div style="position: relative; left: 75px;"><input style="width: 400px;" type="text" value="'.$dataTemplateData["text1"].'" onkeyup="changeProperties(\'text1\', this.value, '.$dataTemplateData["id"].');"></div>';
		echo '<div style="position: absolute; top: 10px; right: 10px;">Visning: <input type="text" style="width: 20px;" MAXLENGTH="2" value="'.$hour.'" onkeyup="changeProperties(\'delayH\', this.value, '.$dataTemplateData["id"].');">:<input type="text" style="width: 20px;" MAXLENGTH="2" value="'.$min.'" onkeyup="changeProperties(\'delayM\', this.value, '.$dataTemplateData["id"].');">:<input type="text" style="width: 20px;" MAXLENGTH="2" value="'.$sec.'" onkeyup="changeProperties(\'delayS\', this.value, '.$dataTemplateData["id"].');"></div>';
		break;

		//Tekst
		case 2:
		echo '<div style="padding: 14px; position: absolute; top: 0px; left: 0px; background: #006633; width: 50px; height: 40px; color: #FFFFFF;">Tekst:</div><div style="position: relative; left: 75px;"><button onclick="location.href=\'?content=editText&timelineid='.$dataTemplateData["id"].'&textid='.$dataTemplateData["int4"].'\';">Rediger tekst</button>&nbsp;&nbsp;&nbsp;&nbsp;Retning:
		<div style="position: absolute; top: -9px; left: 170px;">
			<input onclick="changeProperties(\'text2\', this.value, '.$dataTemplateData["id"].'); document.getElementById(\'testmarquee'.$dataTemplateData["id"].'\').setAttribute(\'direction\', this.value); document.getElementById(\'testmarquee'.$dataTemplateData["id"].'\').start();" checked '.($dataTemplateData["text2"] == 'left' ? " checked " : "").' type="radio" name="direction'.$dataTemplateData["id"].'" value="left" style="position: absolute; top: 10px; left: 0px;">
			<input onclick="changeProperties(\'text2\', this.value, '.$dataTemplateData["id"].'); document.getElementById(\'testmarquee'.$dataTemplateData["id"].'\').setAttribute(\'direction\', this.value); document.getElementById(\'testmarquee'.$dataTemplateData["id"].'\').start();" '.($dataTemplateData["text2"] == 'up' ? " checked " : "").'type="radio" name="direction'.$dataTemplateData["id"].'" value="up" style="position: absolute; top: 0px; left: 15px;">
			<input onclick="changeProperties(\'text2\', this.value, '.$dataTemplateData["id"].'); document.getElementById(\'testmarquee'.$dataTemplateData["id"].'\').setAttribute(\'direction\', this.value); document.getElementById(\'testmarquee'.$dataTemplateData["id"].'\').start();" '.($dataTemplateData["text2"] == 'down' ? " checked " : "").'type="radio" name="direction'.$dataTemplateData["id"].'" value="down" style="position: absolute; top: 20px; left: 15px;">
			<input onclick="changeProperties(\'text2\', this.value, '.$dataTemplateData["id"].'); document.getElementById(\'testmarquee'.$dataTemplateData["id"].'\').setAttribute(\'direction\', this.value); document.getElementById(\'testmarquee'.$dataTemplateData["id"].'\').start();" '.($dataTemplateData["text2"] == 'right' ? " checked " : "").'type="radio" name="direction'.$dataTemplateData["id"].'" value="right" style="position: absolute; top: 10px; left: 30px;">
		</div>';

		echo '<div style="position: absolute; top: -10px; left: 340px; overflow: hidden;">';
			echo '<marquee behavior="scroll" id="testmarquee'.$dataTemplateData["id"].'" scrollamount="'.$dataTemplateData["int2"].'" direction="'.$dataTemplateData["text2"].'" height="40px" width="200px">Tekst der bliver brugt som eksempel:<br>Velkommen til min testtekst!</marquee>';
		echo '</div>';
		
		echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hastighed: <input style="width: 20px" type="text" value="'.$dataTemplateData["int2"].'" onkeyup="changeProperties(\'int2\', this.value, '.$dataTemplateData["id"].');" onblur="document.getElementById(\'testmarquee'.$dataTemplateData["id"].'\').scrollAmount=this.value;"></div>';
		echo '<div style="position: absolute; top: 10px; right: 10px;">Visning: <input type="text" style="width: 20px;" MAXLENGTH="2" value="'.$hour.'" onkeyup="changeProperties(\'delayH\', this.value, '.$dataTemplateData["id"].');">:<input type="text" style="width: 20px;" MAXLENGTH="2" value="'.$min.'" onkeyup="changeProperties(\'delayM\', this.value, '.$dataTemplateData["id"].');">:<input type="text" style="width: 20px;" MAXLENGTH="2" value="'.$sec.'" onkeyup="changeProperties(\'delayS\', this.value, '.$dataTemplateData["id"].');"></div>';
		break;

		//Video
		case 3:
		echo '<div style="padding: 14px; position: absolute; top: 0px; left: 0px; background: #006633; width: 50px; height: 40px; color: #FFFFFF;">Video:</div><div style="position: relative; left: 75px;"><button onclick="location.href=\'?content=editVideo&boxid='.$_REQUEST["boxid"].'&timelineid='.$dataTemplateData["id"].'\';">Skift video</button>&nbsp;&nbsp;&nbsp;&nbsp;'.$dataTemplateData["text1"].'</div>';
		echo '<div style="position: absolute; top: 10px; right: 10px;">Visning: <input type="text" style="width: 20px;" MAXLENGTH="2" value="'.$hour.'" onkeyup="changeProperties(\'delayH\', this.value, '.$dataTemplateData["id"].');">:<input type="text" style="width: 20px;" MAXLENGTH="2" value="'.$min.'" onkeyup="changeProperties(\'delayM\', this.value, '.$dataTemplateData["id"].');">:<input type="text" style="width: 20px;" MAXLENGTH="2" value="'.$sec.'" onkeyup="changeProperties(\'delayS\', this.value, '.$dataTemplateData["id"].');"></div>';
		break;

		//Billede
		case 4:
		echo '<div style="padding: 14px; position: absolute; top: 0px; left: 0px; background: #006633; width: 50px; height: 40px; color: #FFFFFF;">Billede:</div><div style="position: relative; left: 75px;"><button onclick="location.href=\'?content=editImage&boxid='.$_REQUEST["boxid"].'&timelineid='.$dataTemplateData["id"].'\';">Skift billede</button></div>';
		echo '<div style="position: absolute; left: 182px; top: 0px; height: 40px; width: 400px; overflow: hidden;"><img src="onscreen/'.$dataTemplateData["text1"].'" height="40px"></div>';
		echo '<div style="position: absolute; top: 10px; right: 10px;">Visning: <input type="text" style="width: 20px;" MAXLENGTH="2" value="'.$hour.'" onkeyup="changeProperties(\'delayH\', this.value, '.$dataTemplateData["id"].');">:<input type="text" style="width: 20px;" MAXLENGTH="2" value="'.$min.'" onkeyup="changeProperties(\'delayM\', this.value, '.$dataTemplateData["id"].');">:<input type="text" style="width: 20px;" MAXLENGTH="2" value="'.$sec.'" onkeyup="changeProperties(\'delayS\', this.value, '.$dataTemplateData["id"].');"></div>';
		break;
		
		//TV
		case 5:
		echo '<div style="position: absolute; top: 10px; right: 10px;">Visning: <input type="text" style="width: 20px;" MAXLENGTH="2" value="'.$hour.'" onkeyup="changeProperties(\'delayH\', this.value, '.$dataTemplateData["id"].');">:<input type="text" style="width: 20px;" MAXLENGTH="2" value="'.$min.'" onkeyup="changeProperties(\'delayM\', this.value, '.$dataTemplateData["id"].');">:<input type="text" style="width: 20px;" MAXLENGTH="2" value="'.$sec.'" onkeyup="changeProperties(\'delayS\', this.value, '.$dataTemplateData["id"].');"></div>';
		break;

		//Slideshow
		case 6:
		echo '<div style="padding: 14px; position: absolute; top: 0px; left: 0px; background: #006633; width: 50px; height: 40px; color: #FFFFFF;">Slideshow:</div><div style="position: relative; left: 75px;"><button onclick="location.href=\'?content=editSlideshow&boxid='.$_REQUEST["boxid"].'&timelineid='.$dataTemplateData["id"].'\';">Skift mappe</button></div>';
		echo '<div style="position: absolute; left: 182px; top: 13px; height: 40px; width: 400px; overflow: hidden;">'.$dataTemplateData["text1"].'</div>';
		echo '<div style="position: absolute; top: 10px; right: 10px;">Visning: <input type="text" style="width: 20px;" MAXLENGTH="2" value="'.$hour.'" onkeyup="changeProperties(\'delayH\', this.value, '.$dataTemplateData["id"].');">:<input type="text" style="width: 20px;" MAXLENGTH="2" value="'.$min.'" onkeyup="changeProperties(\'delayM\', this.value, '.$dataTemplateData["id"].');">:<input type="text" style="width: 20px;" MAXLENGTH="2" value="'.$sec.'" onkeyup="changeProperties(\'delayS\', this.value, '.$dataTemplateData["id"].');"></div>';
		break;
		
		//Agenda
		case 7: 
		echo '<div style="padding: 14px; position: absolute; top: 0px; left: 0px; background: #006633; width: 50px; height: 40px; color: #FFFFFF;">Agenda:</div>';
		echo '<div style="position: relative; left: 75px;"><button onclick="location.href=\'?content=editAgenda&boxid='.$_REQUEST["boxid"].'&timelineid='.$dataTemplateData["id"].'\';">Rediger agenda</button></div>';
		echo '<div style="position: absolute; top: 10px; right: 10px;">Visning: <input type="text" style="width: 20px;" MAXLENGTH="2" value="'.$hour.'" onkeyup="changeProperties(\'delayH\', this.value, '.$dataTemplateData["id"].');">:<input type="text" style="width: 20px;" MAXLENGTH="2" value="'.$min.'" onkeyup="changeProperties(\'delayM\', this.value, '.$dataTemplateData["id"].');">:<input type="text" style="width: 20px;" MAXLENGTH="2" value="'.$sec.'" onkeyup="changeProperties(\'delayS\', this.value, '.$dataTemplateData["id"].');"></div>';
		break;

		//RSS feed
		case 8: 
		echo '<div style="padding: 14px; position: absolute; top: 0px; left: 0px; background: #006633; width: 50px; height: 40px; color: #FFFFFF;">RSS:</div>';
		echo '<div style="position: relative; left: 75px;"><input style="width: 200px;" type="text" value="'.$dataTemplateData["text1"].'" onkeyup="changeProperties(\'text1\', this.value, '.$dataTemplateData["id"].');">&nbsp;Retning:
		<div style="position: absolute; top: -9px; left: 260px;">
			<input onclick="changeProperties(\'text2\', this.value, '.$dataTemplateData["id"].'); document.getElementById(\'testmarquee'.$dataTemplateData["id"].'\').setAttribute(\'direction\', this.value); document.getElementById(\'testmarquee'.$dataTemplateData["id"].'\').start();" checked '.($dataTemplateData["text2"] == 'left' ? " checked " : "").' type="radio" name="direction'.$dataTemplateData["id"].'" value="left" style="position: absolute; top: 10px; left: 0px;">
			<input onclick="changeProperties(\'text2\', this.value, '.$dataTemplateData["id"].'); document.getElementById(\'testmarquee'.$dataTemplateData["id"].'\').setAttribute(\'direction\', this.value); document.getElementById(\'testmarquee'.$dataTemplateData["id"].'\').start();" '.($dataTemplateData["text2"] == 'up' ? " checked " : "").'type="radio" name="direction'.$dataTemplateData["id"].'" value="up" style="position: absolute; top: 0px; left: 15px;">
			<input onclick="changeProperties(\'text2\', this.value, '.$dataTemplateData["id"].'); document.getElementById(\'testmarquee'.$dataTemplateData["id"].'\').setAttribute(\'direction\', this.value); document.getElementById(\'testmarquee'.$dataTemplateData["id"].'\').start();" '.($dataTemplateData["text2"] == 'down' ? " checked " : "").'type="radio" name="direction'.$dataTemplateData["id"].'" value="down" style="position: absolute; top: 20px; left: 15px;">
			<input onclick="changeProperties(\'text2\', this.value, '.$dataTemplateData["id"].'); document.getElementById(\'testmarquee'.$dataTemplateData["id"].'\').setAttribute(\'direction\', this.value); document.getElementById(\'testmarquee'.$dataTemplateData["id"].'\').start();" '.($dataTemplateData["text2"] == 'right' ? " checked " : "").'type="radio" name="direction'.$dataTemplateData["id"].'" value="right" style="position: absolute; top: 10px; left: 30px;">
		</div>';

		echo '<div style="position: absolute; top: -10px; left: 440px; overflow: hidden;">';
			echo '<marquee behavior="scroll" id="testmarquee'.$dataTemplateData["id"].'" scrollamount="'.$dataTemplateData["int2"].'" direction="'.$dataTemplateData["text2"].'" height="40px" width="100px">Tekst der bliver brugt som eksempel:<br>Velkommen til min testtekst!</marquee>';
		echo '</div>';
		
		echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hastighed: <input style="width: 20px" type="text" value="'.$dataTemplateData["int2"].'" onkeyup="changeProperties(\'int2\', this.value, '.$dataTemplateData["id"].');" onblur="document.getElementById(\'testmarquee'.$dataTemplateData["id"].'\').scrollAmount=this.value;"></div>';
		echo '<div style="position: absolute; top: 10px; right: 10px;">Visning: <input type="text" style="width: 20px;" MAXLENGTH="2" value="'.$hour.'" onkeyup="changeProperties(\'delayH\', this.value, '.$dataTemplateData["id"].');">:<input type="text" style="width: 20px;" MAXLENGTH="2" value="'.$min.'" onkeyup="changeProperties(\'delayM\', this.value, '.$dataTemplateData["id"].');">:<input type="text" style="width: 20px;" MAXLENGTH="2" value="'.$sec.'" onkeyup="changeProperties(\'delayS\', this.value, '.$dataTemplateData["id"].');"></div>';
		break;
		
		//Dato Tid
		case 9:
		echo '<div style="padding: 14px; position: absolute; top: 0px; left: 0px; background: #006633; width: 50px; height: 40px; color: #FFFFFF;">Dato/Tid:</div><div style="position: relative; left: 75px;"><button onclick="location.href=\'?content=editDateTime&boxid='.$_REQUEST["boxid"].'&timelineid='.$dataTemplateData["id"].'\';">Opsætning</button></div>';
		echo '<div style="position: absolute; left: 182px; top: 13px; height: 40px; width: 400px; overflow: hidden;">'.$dataTemplateData["text1"].'</div>';
		echo '<div style="position: absolute; top: 10px; right: 10px;">Visning: <input type="text" style="width: 20px;" MAXLENGTH="2" value="'.$hour.'" onkeyup="changeProperties(\'delayH\', this.value, '.$dataTemplateData["id"].');">:<input type="text" style="width: 20px;" MAXLENGTH="2" value="'.$min.'" onkeyup="changeProperties(\'delayM\', this.value, '.$dataTemplateData["id"].');">:<input type="text" style="width: 20px;" MAXLENGTH="2" value="'.$sec.'" onkeyup="changeProperties(\'delayS\', this.value, '.$dataTemplateData["id"].');"></div>';
		break;

		default:
		echo 'no title';
		}
		echo '</div><br>';
	
	}
	?>

	<div>
		<select style="width: 200px; padding: 10px;" onchange="location.href='addNewTimeline.php?boxid=<?php echo $dataBox["boxID"];?>&type='+this.value;">
			<option value="0">Tilføj ny</option>
			<option value="4">Billede</option>
			<option value="2">Tekst</option>
			<option value="5" disabled>TV</option>
			<option value="1">URL</option>
			<option value="3">Video</option>
			<option value="6">Slideshow</option>
			<option value="7">Agenda</option>
			<option value="8">RSS feed</option>
			<option value="9">Dato / Tid</option>
		</select>
	</div>

		<div style="position: absolute; bottom: 10px;">
		<?php
		$sqlRights = "SELECT id, name FROM IS_usergroups ORDER BY name ASC";
		$rsRights = mysql_query($sqlRights);
		
		while($dataRights=mysql_fetch_array($rsRights)){
		
		$sqlRightsGroup = "SELECT count(*) FROM IS_userrights WHERE groupid = ".$dataRights["id"]." AND type = 'box' AND typeid = ".$dataBox["boxID"];
		$rsRightsGroup = mysql_query($sqlRightsGroup);
		$dataRightsGroup = mysql_fetch_array($rsRightsGroup);
		
		echo "<input onclick='saveBoxRights(".$dataBox["boxID"].",this.checked, ".$dataRights["id"].");' type='checkbox' ".($dataRightsGroup[0] == 1 ? " checked " : "")." ".($dataRights["name"] == 'Admin' ? " disabled " : "").">".$dataRights["name"]."&nbsp;&nbsp;&nbsp;";
		}
		?>
		</div>
	</div>



	<div id="editmenu" style="height: 155px; width: 160px;">
		<div style="margin-left: -10px; margin-right: -10px; margin-top: -10px; width: 160px; padding: 10px; color: #FFFFFF; background: #006633;" id="editBoxHeader">Egenskaber</div>
		<ul id="nav" style="padding-top: 10px; width: 160px;">
			<li><a href="#" onclick="location.href='?content=move&dir=up&id='+timelineid;" title="">Flyt op</a></li>
			<li><a href="#" onclick="location.href='?content=move&dir=down&id='+timelineid;" title="">Flyt ned</a></li>
		</ul>
		<ul id="nav" style="top: 40px; padding-top: 10px;">
			<li><a href="#" onclick="removeTimeline(timelineid);" title="">Slet</a></li>
		</ul>
	</div>
	
	<script>
	
	$('.timeline').bind("contextmenu", function(e) {

		timelineid =  this.id.split("timelineid").pop();

		$('#editmenu').css({
			top: e.pageY+'px',
			left: e.pageX+'px'
		}).show();
		return false;

	});

	$(document).ready(function() {

		$('#editmenu').click(function() {
			$('#editmenu').hide();
		});
		
		$(document).click(function() {
			$('#editmenu').hide();
		});

	});
	</script>

