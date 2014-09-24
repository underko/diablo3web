<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>Heroes page</title>
        <link rel="stylesheet" type="text/css" href="style.css">
	</head>
	
	<body>
		<div id="wrapper">
			<div id="header">
				Underko#2505 Heroes
			</div>
			
			<?php include("./resource/header/header.php");?>
			
			<div id="content" style="color: white;">

				<div id="char_header">List of heroes<br></div>
				
				<div id="char_header_sc">Softcore<br></div>
				<div id="char_header_hc">Hardcore<br></div>

				<?php
					$bnet_tag = 'Underko-2505';
					
					$max_lvl = 0;
					
					$profile_file = file_get_contents('http://eu.battle.net/api/d3/profile/'.$bnet_tag.'/');
					$profile_array = json_decode($profile_file, true);
					
					$char_number_total = sizeof($profile_array["heroes"]);

					$sc_char_array = array();
					$hc_char_array = array();
                    $sc_season_char_array = array();
					$hc_season_char_array = array();

					foreach ($profile_array["heroes"] as &$hero) 
					{
						if ($hero["hardcore"] == 1)
                        {
                        	if ($hero["seasonal"] == 1)
                            	$hc_season_char_array[] = $hero;
                            else
								$hc_char_array[] = $hero;
                        }
						else
                        {
							if ($hero["seasonal"] == 1)
                            	$sc_season_char_array[] = $hero;
                            else
								$sc_char_array[] = $hero;
                        }
					}

					$sc_char_number = 0;
					$hc_char_number = 0;
                    $sc_season_char_number = 0;
					$hc_season_char_number = 0;
			
					while ($sc_char_number + $hc_char_number + $sc_season_char_number + $hc_season_char_number != $char_number_total) 
					{
                    	if ($sc_season_char_number  != sizeof($sc_season_char_array))
                        {
                        	$hero = $sc_season_char_array[$sc_season_char_number];

							echo "<div id=\"char_div_sc_seasonal\"><br>\n";
							echo "name: ".$hero["name"]."<br>\n";
							echo "class: ".$hero["class"]."<br>\n";
							echo "level: ".$hero["level"]." (".$hero["paragonLevel"].")<br>\n";
							echo "gamemode: season softcore<br>\n";
							echo "last update: ".gmdate("H:i:s d-m-Y", $hero["last-updated"])."<br></div> \n\n";

							$sc_season_char_number += 1;
                        }
                        elseif ($sc_char_number  != sizeof($sc_char_array))
						{
							$hero = $sc_char_array[$sc_char_number];

							echo "<div id=\"char_div_sc\"><br>\n";
							echo "name: ".$hero["name"]."<br>\n";
							echo "class: ".$hero["class"]."<br>\n";
							echo "level: ".$hero["level"]." (".$hero["paragonLevel"].")<br>\n";
							echo "gamemode: softcore<br>\n";
							echo "last update: ".gmdate("H:i:s d-m-Y", $hero["last-updated"])."<br></div> \n\n";

							$sc_char_number += 1;
						}

						if ($hc_season_char_number  != sizeof($hc_season_char_array))
                        {
                        	$hero = $hc_season_char_array[$hc_season_char_number];

							echo "<div id=\"char_div_hc_seasonal\"><br>\n";
							echo "name: ".$hero["name"]."<br>\n";
							echo "class: ".$hero["class"]."<br>\n";
							echo "level: ".$hero["level"]." (".$hero["paragonLevel"].")<br>\n";
							echo "gamemode: season hardcore<br>\n";
							echo "last update: ".gmdate("H:i:s d-m-Y", $hero["last-updated"])."<br></div> \n\n";

							$hc_season_char_number += 1;
                        }
                        elseif ($hc_char_number  != sizeof($hc_char_array))
						{
							$hero = $hc_char_array[$hc_char_number];

							echo "<div id=\"char_div_hc\"><br>\n";
							echo "name: ".$hero["name"]."<br>\n";
							echo "class: ".$hero["class"]."<br>\n";
							echo "level: ".$hero["level"]." (".$hero["paragonLevel"].")<br>\n";
							echo "gamemode: hardcore<br>\n";
							echo "last update: ".gmdate("H:i:s d-m-Y", $hero["last-updated"])."<br></div> \n\n";

							$hc_char_number += 1;
						}
					}
					
				?>	
				
			</div>
		
			<?php include("./resource/footer/footer.php");?>
			
		</div>
	</body>
   
</html>