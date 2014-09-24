<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>GRift Stats</title>
        <link rel="stylesheet" type="text/css" href="style.css">
	</head>
	
	<body>
		<div id="wrapper">
			<div id="header">
				Greater Rift Statistics
			</div>
			
			<?php include("./resource/header/header.php");?>
			
			<div id="content" style="color: white;">

				<!--seasonal hardcore stats-->
				<div id="season_hc_title">
					Season Hardcore
				</div>

				<div id="barbarian_hc_season">
					Barbarian<br><br>
					<?php include("./resource/web_stats/hc_season/barbarian_hc_season.php");?>
				</div>

				<div id="crusader_hc_season">
					Crusader<br><br>
					<?php include("./resource/web_stats/hc_season/crusader_hc_season.php");?>
				</div>

				<div id="demon_hunter_hc_season">
					Demon Hunter<br><br>
					<?php include("./resource/web_stats/hc_season/demon_hunter_hc_season.php");?>
				</div>

				<div id="monk_hc_season">
					Monk<br><br>
					<?php include("./resource/web_stats/hc_season/monk_hc_season.php");?>
				</div>

				<div id="witch_doctor_hc_season">
					Witch Doctor<br><br>
					<?php include("./resource/web_stats/hc_season/witch_doctor_hc_season.php");?>
				</div>

				<div id="wizard_hc_season">
					Wizard<br><br>
					<?php include("./resource/web_stats/hc_season/wizard_hc_season.php");?>
				</div>

				<!--seasonal softcore stats-->
				<div id="season_sc_title">
					Season Softcore
				</div>

				<div id="barbarian_sc_season">
					Barbarian<br><br>
					<?php include("./resource/web_stats/sc_season/barbarian_sc_season.php");?>
				</div>

				<div id="crusader_sc_season">
					Crusader<br><br>
					<?php include("./resource/web_stats/sc_season/crusader_sc_season.php");?>
				</div>

				<div id="demon_hunter_sc_season">
					Demon Hunter<br><br>
					<?php include("./resource/web_stats/sc_season/demon_hunter_sc_season.php");?>
				</div>

				<div id="monk_sc_season">
					Monk<br><br>
					<?php include("./resource/web_stats/sc_season/monk_sc_season.php");?>
				</div>

				<div id="witch_doctor_sc_season">
					Witch Doctor<br><br>
					<?php include("./resource/web_stats/sc_season/witch_doctor_sc_season.php");?>
				</div>

				<div id="wizard_sc_season">
					Wizard<br><br>
					<?php include("./resource/web_stats/sc_season/wizard_sc_season.php");?>
				</div>

				<!--non-seasonal hardcore stats-->
				<div id="hc_title">
					Non-Season Hardcore
				</div>

				<div id="barbarian_hc">
					Barbarian<br><br>
					<?php include("./resource/web_stats/hc/barbarian_hc.php");?>
				</div>

				<div id="crusader_hc">
					Crusader<br><br>
					<?php include("./resource/web_stats/hc/crusader_hc.php");?>
				</div>

				<div id="demon_hunter_hc">
					Demon Hunter<br><br>
					<?php include("./resource/web_stats/hc/demon_hunter_hc.php");?>
				</div>

				<div id="monk_hc">
					Monk<br><br>
					<?php include("./resource/web_stats/hc/monk_hc.php");?>
				</div>

				<div id="witch_doctor_hc">
					Witch Doctor<br><br>
					<?php include("./resource/web_stats/hc/witch_doctor_hc.php");?>
				</div>

				<div id="wizard_hc">
					Wizard<br><br>
					<?php include("./resource/web_stats/hc/wizard_hc.php");?>
				</div>

				<!--non-seasonal softcore stats-->
				<div id="sc_title">
					Non-Season Softcore
				</div>

				<div id="barbarian_sc">
					Barbarian<br><br>
					<?php include("./resource/web_stats/sc/barbarian_sc.php");?>
				</div>

				<div id="crusader_sc">
					Crusader<br><br>
					<?php include("./resource/web_stats/sc/crusader_sc.php");?>
				</div>

				<div id="demon_hunter_sc">
					Demon Hunter<br><br>
					<?php include("./resource/web_stats/sc/demon_hunter_sc.php");?>
				</div>

				<div id="monk_sc">
					Monk<br><br>
					<?php include("./resource/web_stats/sc/monk_sc.php");?>
				</div>

				<div id="witch_doctor_sc">
					Witch Doctor<br><br>
					<?php include("./resource/web_stats/sc/witch_doctor_sc.php");?>
				</div>

				<div id="wizard_sc">
					Wizard<br><br>
					<?php include("./resource/web_stats/sc/wizard_sc.php");?>
				</div>

			</div>
		
			<?php include("./resource/footer/footer.php");?>
			
		</div>
	</body>
   
</html>