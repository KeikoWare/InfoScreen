<?php
$sqlBox = "SELECT *, IS_schemes.name AS schemename, IS_boxes.name AS boxname FROM IS_boxes 
			INNER JOIN IS_schemes ON
			IS_schemes.id = IS_boxes.scheme			
			INNER JOIN IS_userrights ON 
			IS_userrights.typeid = IS_boxes.BoxID
			AND IS_userrights.type = 'box'
			INNER JOIN IS_usergrouprel
			ON 
			IS_usergrouprel.userid  = ".$_SESSION["userid"]."
			AND 
			IS_usergrouprel.groupid = IS_userrights.groupid
			WHERE IS_schemes.active = 1 AND IS_boxes.active = 1
			ORDER BY IS_boxes.scheme
			";

$rssqlBox = mysql_query($sqlBox);

echo '	<div class="test" id="timelineid" style="position: relative; display: block; width: 800px; min-height: 330px; padding: 10px; margin: 0 auto; border: 5px solid #006633;">';

while($dataBoxes = mysql_fetch_array($rssqlBox)){

	if($newscheme <> $dataBoxes["scheme"])
	echo "<hr><b>DESIGN: ".$dataBoxes["schemename"]."</b><hr><br>";
	
	$newscheme = $dataBoxes["scheme"];
	

	$sqlTimelines = "SELECT IS_timeline.*, IS_templatedata.* FROM IS_timeline INNER JOIN IS_templatedata ON IS_timeline.dataid = IS_templatedata.id WHERE IS_timeline.boxid = ".$dataBoxes["boxID"];
	$rssqlTimelines = mysql_query($sqlTimelines);
	while($dataTimelines = mysql_fetch_array($rssqlTimelines)){
	$i=$dataTimelines["templateid"];
		if($_SESSION["group"]["type$i"] == 1) {
			switch($i){
			
			case 1:
			break;
			
			case 2:
				echo "<b>BOX: ".$dataBoxes["boxname"]."</b><br><br>";
				echo "<button style='margin-right: 20px;' onclick=\"location.href='?content=editText&timelineid=".$dataTimelines["id"]."&textid=".$dataTimelines["int4"].";'\">RET TEKST</button><br>";
			break;
			
			case 3:
			break;
			
			case 4:
			break;
			
			case 5:
			break;
			
			case 6:
			break;
			
			case 7:
				echo "<br><br><b>BOX: ".$dataBoxes["boxname"]."</b><br><br>";
				echo "<button style='margin-right: 20px;' onclick=\"location.href='?content=editAgenda&timelineid=".$dataTimelines["id"]."'\">RET AGENDA</button><br>";
			break;
			
			case 8:
			break;
			
			case 9:
			break;
			
			case 10:
			break;

			}
		
		}

	}
}

echo '</div>';
?>