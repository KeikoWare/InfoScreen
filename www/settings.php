	<?php

	if(!$_SESSION["loggedinVerified"] == 1) header("location: login.php");

	?>

	<div class="test" id="shemeEdit" style="position: relative; display: block; width: 800px; min-height: 350px; margin: 0 auto; border: 5px solid #006633; padding: 10px;">

	<b>Indstillinger:</b>
	<br><br>
	<button style="height: 50px; width: 150px;" onclick="location.href='?editgroups';">Brugergrupper</button>
	<br><br>
	<button style="height: 50px; width: 150px;" onclick="location.href='?editusers';">Brugere</button>	

	</div>
