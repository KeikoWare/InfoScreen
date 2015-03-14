	

	<?php
	$sqlScheme = 'SELECT * FROM IS_schemes WHERE id = '.$_REQUEST["schemeid"];
	$rsSqlScheme = mysql_query($sqlScheme);
	$dataScheme=mysql_fetch_array($rsSqlScheme);
	?>
	
	<div class="test" id="shemeEdit" style="overflow: hidden; position: relative; display: block; width: 800px; height: 330px; margin: 0 auto; border: 5px solid #006633;">
	<form method="POST" action="saveScheme.php" id="saveScheme">
		<input id="schemeid"  name="schemeid" type="hidden" value="<?php echo ($_REQUEST["schemeid"]=='new' ? 0 : $_REQUEST["schemeid"]);?>">
		<div style="position: absolute; left: 20px; top: 20px;">
			Navn: <input style="margin-left: 45px;" type="text" name="name" value="<?php echo $dataScheme["name"];?>">
		</div>
		<div style="position: absolute; left: 500px; top: 20px; height: 30px;">
			Aktiv: <input style="margin-left: 45px; vertical-align: bottom; position: relative; top: 5px;" type="checkbox" name="active" <?php if($dataScheme["active"] == 1) echo " checked ";?>>
		</div>
		<div style="position: absolute; left: 500px; top: 45px;">
			Start (valgfri): <input style="width: 55px;" type="text" name="timestart" value="<?php echo $dataScheme["starttime"];?>"> (TT:mm:ss)
		</div>
		<div style="position: absolute; left: 500px; top: 70px;">
			Slut (valgfri): <input style="margin-left: 6px; width: 55px;" type="text" name="timeend" value="<?php echo $dataScheme["endtime"];?>"> (TT:mm:ss)
		</div>
		<div style="position: absolute; left: 20px; top: 45px;">
			Bredde: <input style="margin-left: 34px; width: 40px;" type="text" name="width" value="<?php echo $dataScheme["width"];?>"> px
		</div>
		<div style="position: absolute; left: 20px; top: 70px;">
			Højde: <input style="margin-left: 41px; width: 40px;" type="text" name="height" value="<?php echo $dataScheme["height"];?>"> px
		</div>
		<div style="position: absolute; left: 20px; top: 103px;">
			<hr style="width: 760px; height: 1px; border: 0px solid; color: #000000; background: #000000;">
			<br>
			Baggrundsfarve: <input class="color" name="background" style="width: 40px; height: 15px; font-size: 10px;" value="<?php echo $dataScheme["background"];?>">
		</div>
		<div style="position: absolute; left: 20px; top: 160px;">
			Baggrundsbillede (valgfri):
		</div>
		<div style="position: absolute; left: 85px; top: 187px;">
			<img border="1" height="100" src="img/no_pic.jpg" id="imageShow" onclick="location.href='?content=editImage&boxid=<?php echo $_REQUEST["schemeid"];?>&timelineid=0';">
			<input id="image" name="image" type="hidden" value="<?php echo $dataScheme["backgroundImage"];?>">
			<br>(Klik på billedet for at skifte)
		</div>
		<div style="position: absolute; left: 20px; top: 190px;">
			<img align="absmiddle" border="1" src="img/bg_full.jpg"><input type="radio" name="imageStyle" value="1" <?php if($dataScheme["imageStyle"] == 1 OR $dataScheme["imageStyle"] == 0) echo " checked ";?>><br>
			<img align="absmiddle" border="1" src="img/bg_center.jpg"><input type="radio" name="imageStyle" value="2" <?php if($dataScheme["imageStyle"] == 2) echo " checked ";?>><br>
			<img align="absmiddle" border="1" src="img/bg_tile.jpg"><input type="radio" name="imageStyle" value="3" <?php if($dataScheme["imageStyle"] == 3) echo " checked ";?>>
		</div>
	</form>
	</div>

	<script>
		changeImage(document.getElementById('image'), document.getElementById('imageShow'));
		// this is the id of the submit button
		$("#saveSchemeSubmit").click(function() {
			
			$( "#progressbar" ).show();

			var url = "saveScheme.php"; // the script where you handle the form input.

			$.ajax({
					type: "POST",
					url: url,
					data: $("#saveScheme").serialize(), // serializes the form's elements.
					success: function(data)
					{
						//alert(data); // show response from the php script.
						document.getElementById('schemeid').value = data;
						checkProgress(1,'Gemt');
					}
				 });

			return false; // avoid to execute the actual submit of the form.
		});

	</script>	