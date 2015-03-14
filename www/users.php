<?php
echo '<div class="test" id="timelineid" style="position: relative; display: block; width: 800px; min-height: 330px; padding: 10px; margin: 0 auto; border: 5px solid #006633; font-size:16px;">Brugere:<br><hr>';

$sql = "SELECT * FROM IS_users ORDER BY username";
$rsSql = mysql_query($sql);
while($dataUsers = mysql_fetch_array($rsSql)){
	echo "<span style='font-size: 16px; float: left; width: 250px; overflow: hidden;'>".$dataUsers["username"]."</span><span style='margin-top: -5px; float: right; overflow: hidden;'><button onclick=\"location.href='?content=editUser&id=".$dataUsers["id"]."';\">RET</button>"."<button onclick=\"if(confirm('Vil du slette brugeren?')) location.href='deleteuser.php?id=".$dataUsers["id"]."';\">SLET</button></span><hr style='clear: both;'>";
}

echo "<div><form method='POST' action='createuser.php'><br><br><br>Navn<br><input name='username' type='text' style='width: 250px;'><br><br>Adgangskode:<br><input name='password' type='text' style='width: 250px;'><br><br><button>Opret</button></form></div>";

echo '</div>';
?>