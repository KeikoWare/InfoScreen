<?php
echo '<div class="test" id="timelineid" style="position: relative; display: block; width: 800px; min-height: 330px; padding: 10px; margin: 0 auto; border: 5px solid #006633; font-size:16px;">Grupper:<br><hr>';

$sql = "SELECT * FROM IS_usergroups ORDER BY name";
$rsSql = mysql_query($sql);
while($dataUsers = mysql_fetch_array($rsSql)){
	echo "<span style='font-size: 16px; float: left; width: 250px; overflow: hidden;'>".$dataUsers["name"]."</span><span style='font-size: 16px; float: left; width: 250px; overflow: hidden;'>".$dataUsers["description"]."</span><span style='margin-top: -5px; float: right; overflow: hidden;'><button onclick=\"location.href='?content=editGroup&id=".$dataUsers["id"]."';\">RET</button>"."<button onclick=\"if(confirm('Vil du slette gruppen?')) location.href='deletegroup.php?id=".$dataUsers["id"]."';\">SLET</button></span><hr style='clear: both;'>";
}

echo "<div><form method='POST' action='creategroup.php'><br><br><br>Gruppenavn<br><input name='name' type='text' style='width: 250px;'><br><br>Beskrivelse:<br><input name='description' type='text' style='width: 250px;'><br><br><button>Opret</button></form></div>";

echo '</div>';
?>