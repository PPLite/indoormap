<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>MAP</title>
	<link rel="stylesheet/less" type="text/css" href="styles/plan.less">
	<?php
		try
		{
			$bdd = new PDO('mysql:host=localhost;dbname=exposants', 'root', '');
		}
		catch (Exception $e)
		{
			die('Error : ' . $e->getMessage());
		}
		$reponse1 = $bdd->query('SELECT * FROM exposants');
		$exposants = $reponse1->fetchAll();
		$reponse1->closeCursor();
	?>
</head>
<body oncontextmenu="return false;">
	<div class="menu">
	<?php
		foreach ($exposants as $i) {;
			$names[]=[$i[1],$i[0]];
		}
		sort($names);
		foreach ($names as $j) {
			echo '<div class="entree"><a href="#" onclick="javascript:document.getElementById(\'s'.$j[1].'\').className=\'Selected\';">'.$j[0].'</a></div>';
		}
	?>
	</div>
	<div class="stand">
	<?php
		$echelle = 10;
		foreach ($exposants as $i) {
			echo '<div id="s'.$i[0].'" style="width:'.$echelle*$i[2].'px;height:'.$echelle*$i[3].'px;top:'.$echelle*$i[5].'px;left:'.$echelle*$i[4].'px;" onclick="javascript:className=\'Selected\';">'."\n";
			echo $i[1]."\n".$i[6];
			echo '</div>'."\n";
		}
	?></div>
	<script type="text/javascript" src="vendors/less-1.5.0.min.js"></script>
</body>
</html>
