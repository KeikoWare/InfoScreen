<?php
echo '<div class="test" id="timelineid" style="position: relative; display: block; width: 800px; min-height: 330px; padding: 10px; margin: 0 auto; border: 5px solid #006633; font-size:16px;">Gruppe:<br><hr>';

$sql = "SELECT * FROM IS_usergroups WHERE id = ".$_REQUEST["id"];
$rsSql = mysql_query($sql);
$dataUser = mysql_fetch_array($rsSql);
echo '<form method="POST" action="savegroup.php">';
echo '<input type="hidden" value="'.$dataUser["id"].'">';
echo '<span style="float: left; width: 200px;">Navn:</span>';
echo '<span style="float: left; width: 500px;"><input name="username" type="text" style="width: 300px;" value="'.$dataUser["name"].'"></span>';
echo '<div style="clear:both; height:10px;"></div>';
echo '<span style="float: left; width: 200px;">Beskrivelse:</span>';
echo '<span style="float: left; width: 500px;"><input name="password" type="text" style="width: 300px;" value="'.$dataUser["description"].'"></span>';
echo '<div style="clear:both; height:10px;"></div>';
echo '<button>GEM</button>';
echo '</form>';

echo '<br><br>';

$sqlcheck = "SELECT * FROM IS_userrights WHERE groupid = ".$_REQUEST["id"]." AND type = 'menu' AND typeid = 2";
$rsSqlcheck = mysql_query($sqlcheck);
echo '<input '.(mysql_num_rows($rsSqlcheck) == 1 ? " checked " : "").' type="checkbox" onclick="chgGroupRelation('.$_REQUEST["id"].', 2, this.checked)"> Design<br>';

$sqlcheck = "SELECT * FROM IS_userrights WHERE groupid = ".$_REQUEST["id"]." AND type = 'menu' AND typeid = 3";
$rsSqlcheck = mysql_query($sqlcheck);
echo '<input '.(mysql_num_rows($rsSqlcheck) == 1 ? " checked " : "").' type="checkbox" onclick="chgGroupRelation('.$_REQUEST["id"].', 3, this.checked)"> Edit<br>';

$sqlcheck = "SELECT * FROM IS_userrights WHERE groupid = ".$_REQUEST["id"]." AND type = 'menu' AND typeid = 4";
$rsSqlcheck = mysql_query($sqlcheck);
echo '<input '.(mysql_num_rows($rsSqlcheck) == 1 ? " checked " : "").' type="checkbox" onclick="chgGroupRelation('.$_REQUEST["id"].', 4, this.checked)"> Upload<br>';

$sqlcheck = "SELECT * FROM IS_userrights WHERE groupid = ".$_REQUEST["id"]." AND type = 'menu' AND typeid = 5";
$rsSqlcheck = mysql_query($sqlcheck);
echo '<input '.(mysql_num_rows($rsSqlcheck) == 1 ? " checked " : "").' type="checkbox" onclick="chgGroupRelation('.$_REQUEST["id"].', 5, this.checked)"> Indstillinger<br>';

$sqlcheck = "SELECT * FROM IS_userrights WHERE groupid = ".$_REQUEST["id"]." AND type = 'menu' AND typeid = 6";
$rsSqlcheck = mysql_query($sqlcheck);
echo '<input '.(mysql_num_rows($rsSqlcheck) == 1 ? " checked " : "").' type="checkbox" onclick="chgGroupRelation('.$_REQUEST["id"].', 6, this.checked)"> System<br>';


echo '</div>';
?>