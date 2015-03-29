	<?php
	if(!$_SESSION["loggedinVerified"] == 1) header("location: login.php");
	
	$sqlText = 'SELECT * FROM IS_templatedata WHERE id = '.$_REQUEST["timelineid"];
	$rsText = mysql_query($sqlText);
	$dataText=mysql_fetch_array($rsText);
	
	$textarray = explode("[IS_cellsplit]", $dataText["text1"]);
	$sizearray = explode("[IS_cellsplit]", $dataText["text2"]);
	$showarray = $dataText["text3"];
	
	?>
	
	<div class="test" id="shemeEdit" style="overflow: auto; position: relative; display: block; width: 1200px; max-width: 1210px; margin: 0 auto; border: 5px solid #006633; padding: 10px;">
	<form method="POST" action="saveAgenda.php" id="saveAgenda">
	
			<div>
				<div style="position: relative; top: 3px; float: left; width: 65px;">Rækker:</div>
				<input name="numrow" type="text" style="position: relative; top: 0px; width: 20px;" value="<?php echo $dataText["int1"];?>">
				&nbsp;&nbsp;Rækkehøjde: 
				<input name="colwidth[]" type="text" style="text-align: right; position: relative; top: 0px; width: 35px;" value="<?php echo $sizearray[0];?>">
			</div>
			<br>
			<div>
				<div style="position: relative; top: 3px; float: left; width: 65px;">Kolonner:</div>
				<input name="numcol" type="text" style="position: relative; top: 0px; width: 20px;" value="<?php echo $dataText["int2"];?>">
				&nbsp;&nbsp;Cellebredde:
				<?php
				for ($i = 1; $i <= $dataText["int2"]; $i++) {
					echo '<input name="colwidth[]" type="text" style="text-align: right; position: relative; top: 0px; width: 35px;" value="'.$sizearray[$i].'">&nbsp;';
				}
				?>
			</div>
			<br>
			<?php
			$count = -1;
			
			echo "<table><tr height='".($sizearray[0]+20)."' valign='bottom'>";
			
			for ($i = 1; $i <= $dataText["int1"]; $i++) {
				if($i > 1) echo "</tr><tr height='".($sizearray[0]+20)."' valign='bottom'>";
				for ($j = 1; $j <= $dataText["int2"]; $j++) {
					$count++;
			
					echo '<td width="'.$sizearray[$j].'"><textarea class="input-xxlarge" name="agenda[]" style="width: '.$sizearray[$j].'px; height: '.($sizearray[0]+20).'px;">'.$textarray[$count].'</textarea></td>';
				
				}
				$checkstring = "[IS_cellsplit]".$i."[IS_cellsplit]";
				echo '<td><input value="'.$i.'" name="ShowMe[]" type="checkbox" '.(strpos($showarray,$checkstring) <> 0 ? " checked " : "").'> vis på skærm</td>';
			}
			
			echo "</tr></table>";
			
			?>
			
			<input name="dataid" type="hidden" value="<?php echo $_REQUEST["timelineid"];?>">
			<input type="submit" value="Gem agenda">
	</form>
	</div>

	<script language="javascript" type="text/javascript">
		bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });

		// this is the id of the submit button
		$("#saveTextSubmit").click(function() {
			
			$( "#progressbar" ).show();

			var url = "saveAgenda.php"; // the script where you handle the form input.

			$.ajax({
					type: "POST",
					url: url,
					data: $("#saveAgendat").serialize(), // serializes the form's elements.
					success: function(data)
					{
						alert(data); // show response from the php script.
						//document.getElementById('textid').value = data;
						checkProgress(1,'Gemt');
					}
				 });

			return false; // avoid to execute the actual submit of the form.
		});

	</script>	