	<?php
	if(!$_SESSION["loggedinVerified"] == 1) header("location: login.php");

	$sqlTextAll = 'SELECT * FROM IS_texts WHERE active = 1';
	$rsTextAll = mysql_query($sqlTextAll);

	$sqlText = 'SELECT * FROM IS_texts WHERE id = '.$_REQUEST["textid"];
	$rsText = mysql_query($sqlText);
	$dataText=mysql_fetch_array($rsText);
	?>
	
	<div class="test" id="shemeEdit" style="overflow: hidden; position: relative; display: block; width: 800px; height: 350px; margin: 0 auto; border: 5px solid #006633; padding: 10px;">
	
	<form method="POST" action="saveText.php" id="saveText">
			
			<select name="selectedText" style="display: <?php if($_SESSION["group"]["editbox"]) echo "block"; else echo "none";?>; width: 200px; padding: 10px;" onchange="location.href='?content=editText&timelineid=<?php echo $_REQUEST["timelineid"];?>&textid='+this.value;">
				<option value="0">Ny tekst</option>
				<?php
				while($dataTextAll=mysql_fetch_array($rsTextAll)){
					echo '<option '.($dataTextAll["id"] == $dataText["id"] ? ' selected ' : '').' value="'.$dataTextAll["id"].'">'.substr(strip_tags($dataTextAll["textinput"]),0,50).'...</option>';
				}
				?>
			</select>
	
			<br><br>
			<textarea class="input-xxlarge" name="text" style="width: 800px; height: 240px;"><?php echo $dataText["textinput"];?></textarea>
			<input name="dataid" type="hidden" value="<?php echo $_REQUEST["timelineid"];?>">
			<input type="submit" value="Gem tekst">
	</form>
	
	</div>

	<script language="javascript" type="text/javascript">
		bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });

		// this is the id of the submit button
		$("#saveTextSubmit").click(function() {
			
			$( "#progressbar" ).show();

			var url = "saveText.php"; // the script where you handle the form input.

			$.ajax({
					type: "POST",
					url: url,
					data: $("#saveText").serialize(), // serializes the form's elements.
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