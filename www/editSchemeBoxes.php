<?php
session_start();
if(!$_SESSION["loggedinVerified"] == 1) header("location: login.php");
?>
	<div class="test" id="boxEdit" style="overflow: hidden; position: relative; display: block; width: <?php echo $dataScheme["width"];?>px; height: <?php echo $dataScheme["height"];?>px; background: url(img/editbg.jpg); margin: 0 auto; border: 5px solid #006633;">

	<?php
/*	
	$sqlScheme = "SELECT * FROM IS_schemes WHERE active = 1";
	$rsSqlScheme = mysql_query($sqlScheme);
	$dataScheme=mysql_fetch_array($rsSqlScheme);
	$activescheme = $dataScheme["id"];
*/
		
	$sqlBox = "SELECT * FROM IS_boxes WHERE scheme = $activescheme AND active = '1' ORDER BY zindex";
	$rsSqlBox = mysql_query($sqlBox);
	while($dataBox=mysql_fetch_array($rsSqlBox)){
	$style='overflow: hidden; opacity:0.75; text-align: center; ';


	switch($dataBox["position"]){


	case "bottom":
	$style.= ($dataBox["position"] <> "" ? 'position: absolute; bottom: 0px; ' : '');

	break;

	default:
	$style.= ($dataBox["position"] <> "" ? 'margin: 0; position: absolute; ' : 'margin: 0; position: absolute;');
	$style.= ($dataBox["top"] <> 0 ? 'top: '.$dataBox["top"].'px; ' : '');
	$style.= ($dataBox["left"] <> 0 ? 'left: '.$dataBox["left"].'px; ' : '');
	}

	
	$style.= ($dataBox["zindex"] <> 0 ? 'z-index: '.$dataBox["zindex"].'; ' : '');
	$style.= ($dataBox["width"] <> 0 ? 'width: '.$dataBox["width"].'px; ' : '');
	$style.= ($dataBox["height"] <> 0 ? 'height: '.$dataBox["height"].'px; ' : '');
	$style.= ($dataBox["editColor"] <> "" ? 'background: #'.$dataBox["editColor"].'; ' : '');

	echo '<div id="boxid'.$dataBox["boxID"].'" class="clsBox" name="boxname'.$dataBox["boxID"].'" style="'.$style.'" onmouseup="getSizePos(this);" onclick="selectBox(this);" onmouseover="this.style.cursor=\'move\';">';
	echo '<div id="text'.$dataBox["boxID"].'"><b>'.$dataBox["name"].'</b></div>';
	echo '</div>';
	
	}

	
	?>

	</div>	
	
	<div id="editor" style="z-index: 999; visibility: hidden; padding: 0px; position: absolute; left: 20px; top: 100px; width: 400px; height: 110px; background: #eeeeee; border: 1px solid #000000;" onmouseover="this.style.cursor='move';">
		<div id="boxtext" style="width: 100%; height: 20px; background: #006633; color: #FFFFFF; padding-top: 5px; text-align: center;"><b>Box (ingen valgt)</b></div>


		<!-- SIZE AND POSITION -->
		<div id="sizepos" style="display: none;">
			<div style="width: 100%; height: 20px; background: #FFFFFF; color: #000000; text-align: center;">
				<div style="position: absolute; width: 50%; color: #FFFFFF; background: #006633; height: 20px;" onmouseover="this.style.cursor='pointer';"><div style="margin-top: 3px;" onclick="showLayer(1,'properties')">Egenskaber</div></div>
				<div style="position: absolute; right: 0px; color: #000000; background: #EEEEEE;  width: 50%; height: 20px;" onmouseover="this.style.cursor='pointer';" onclick="showLayer(1,'sizepos')"><div style="margin-top: 3px;">Størrelse & placering</div></div>
			</div>
			<div style="position: absolute; top: 55px; left: 3px;">
				Bredde: <input type="text" id="boxSelectWidth" name="boxSelectWidth" style="width: 50px;" onkeyup="changeValue('width', this.value);">
			</div>
			<div style="position: absolute; top: 80px; left: 3px;">
				Højde: <input type="text" id="boxSelectHeight" name="boxSelectHeight" style="width: 50px; margin-left: 7px;" onkeyup="changeValue('height', this.value);">
			</div>
			
			<div style="position: absolute; top: 55px; left: 123px;">
				Venstre: <input type="text" id="boxSelectLeft" name="boxSelectLeft" style="width: 50px;" onkeyup="changeValue('left', this.value);">
			</div>
			<div style="position: absolute; top: 80px; left: 123px;">
				Top: <input type="text" id="boxSelectTop" name="boxSelectTop" style="width: 50px; margin-left: 22px;" onkeyup="changeValue('top', this.value);">
			</div>

			<div style="position: absolute; top: 55px; left: 245px;">
				Niveau: <input type="text" id="boxSelectZindex" name="boxSelectZindex" style="width: 20px;" onkeyup="changeValue('zindex', this.value);">
			</div> 
			
			<div style="position: absolute; top: 50px; left: 330px;" onmouseover="this.style.cursor='pointer';">
				<input id="tl" value="tl" name="boxSelectposition" type="radio" onclick="changeValue('position', this.value);"><input id="tc" value="tc" name="boxSelectposition" type="radio" onclick="changeValue('position', this.value);"><input id="tr" value="tr" name="boxSelectposition" type="radio" onclick="changeValue('position', this.value);">
				<br>                                                                                                                                                                                                                                 
				<input id="ml" value="ml" name="boxSelectposition" type="radio" onclick="changeValue('position', this.value);"><input id="mc" value="mc" name="boxSelectposition" type="radio" onclick="changeValue('position', this.value);"><input id="mr" value="mr" name="boxSelectposition" type="radio" onclick="changeValue('position', this.value);">
				<br>                                                                                                                                                                                                                                 
				<input id="bl" value="bl" name="boxSelectposition" type="radio" onclick="changeValue('position', this.value);"><input id="bc" value="bc" name="boxSelectposition" type="radio" onclick="changeValue('position', this.value);"><input id="br" value="br" name="boxSelectposition" type="radio" onclick="changeValue('position', this.value);">
			</div>
			
		</div>
		<!-- SIZE AND POSITION -->

		<!-- PROPERTIES -->
		<div id="properties" style="display: block;">
			<div style="width: 100%; height: 20px; background: #FFFFFF; color: #000000; text-align: center;">
				<div style="position: absolute; color: #000000; background: #EEEEEE; width: 50%; height: 20px;" onmouseover="this.style.cursor='pointer';"><div style="margin-top: 3px;" onclick="showLayer(1,'properties')">Egenskaber</div></div>
				<div style="position: absolute; color: #FFFFFF; background: #006633; width: 50%; right: 0px; height: 20px;" onmouseover="this.style.cursor='pointer';" onclick="showLayer(1,'sizepos')"><div style="margin-top: 3px;">Størrelse & placering</div></div>
			</div>
			<div style="position: absolute; top: 55px; left: 3px;">
				Titel: <input maxlength="20" type="text" id="boxSelectName" name="boxSelectName" style="width: 150px;" onkeyup="changeValue('name', this.value);">
			</div>
			<div style="position: absolute; top: 80px; left: 3px;">
				Baggrundsfarve (edit): <input class="color" id="boxSelectEditColor" name="boxSelectEditColor" style="width: 40px; height: 15px; font-size: 10px;" onblur="changeValue('editcolor', this.value);">
			</div>
			<div style="position: absolute; top: 80px; left: 200px;">
				Baggrundsfarve (display): <input class="color" id="boxSelectDisplayColor" name="boxSelectDisplayColor" style="width: 40px; height: 15px; font-size: 10px;" onblur="changeValue('displaycolor', this.value);">
			</div>
		</div>
		<!-- PROPERTIES -->
		
		<input id="editorBoxId" type="hidden">
	</div>
	
	<div id="editmenu" style="height: 115px; width: 160px;">
		<div style="margin-left: -10px; margin-right: -10px; margin-top: -10px; width: 160px; padding: 10px; color: #FFFFFF; background: #006633;" id="editBoxHeader">BOX: </div>
		<ul id="nav" style="padding-top: 10px;">
			<li><a href="#" onclick="location.href='?content=editBox&boxid='+boxEditId;" title="">Edit</a></li>
		</ul>
		<ul id="nav" style="padding-top: 10px;">
			<li><a href="#" onclick="removeBox(boxEditId);" title="">Slet</a></li>
		</ul>
	</div>

	<script>
		rebuildFunctionality();
		<?php if($activeboxid <> '') echo "selectBox(document.getElementById('boxid$activeboxid'));";?>
	</script>