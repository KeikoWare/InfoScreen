<?php
echo '<div class="test" id="timelineid" style="position: relative; display: block; width: 800px; min-height: 330px; padding: 10px; margin: 0 auto; border: 5px solid #006633; font-size:16px;">Brugere:<br><hr>';

$sql = "SELECT * FROM IS_users WHERE id = ".$_REQUEST["id"];
$rsSql = mysql_query($sql);
$dataUser = mysql_fetch_array($rsSql);
echo '<form method="POST" action="saveuser.php">';
echo '<input type="hidden" value="'.$dataUser["id"].'">';
echo '<span style="float: left; width: 200px;">Navn:</span>';
echo '<span style="float: left; width: 500px;"><input name="username" type="text" style="width: 300px;" value="'.$dataUser["username"].'"></span>';
echo '<div style="clear:both; height:10px;"></div>';
echo '<span style="float: left; width: 200px;">Adgangskode:</span>';
echo '<span style="float: left; width: 500px;"><input name="password" type="password" style="width: 300px;" value="'.$dataUser["password"].'"></span>';
echo '<div style="clear:both; height:10px;"></div>';
echo '<button>GEM</button>';
echo '</form>';

echo '<br><br>';
$sql = "SELECT * FROM IS_usergroups ORDER BY name";
$rsSql = mysql_query($sql);
while($datagroup = mysql_fetch_array($rsSql)){

	$sqlcheck = "SELECT * FROM IS_usergrouprel WHERE userid = ".$_REQUEST["id"]." AND groupid = ".$datagroup["id"];
	$rsSqlcheck = mysql_query($sqlcheck);

	echo '<input '.(mysql_num_rows($rsSqlcheck) == 1 ? " checked " : "").' type="checkbox" onclick="chgRelation('.$_REQUEST["id"].','.$datagroup["id"].', this.checked)"> '.$datagroup["name"].'<br>';

}

echo '</div>';
?>