<?php
	
	$username = "mywebz";
	$password = "";
	$hostname = "localhost";
	$database = "my_mywebz";
	
	//connection to the database
	$dbhandle = mysql_connect($hostname, $username, $password) 
		or die("Unable to connect to MySQL");
	
	$selected = mysql_select_db($database, $dbhandle) 
		or die("Could not select database: '$database'");
	
	$query_first = "SELECT * FROM `d3_stat`
					ORDER BY 'date' ASC
					LIMIT 1";
					
	
	$query_last = "SELECT * FROM `d3_stat`
					ORDER BY `date` DESC
					LIMIT 1";
	
	$res_first = mysql_query($query_first);
	$res_last = mysql_query($query_last);
	
	$row_first = mysql_fetch_array($res_first);		
	$row_last = mysql_fetch_array($res_last);

	$hcParagonArr = array();
	$scParagonArr = array();
	$killsMonsterHcArr = array();
	$killsMonsterScArr = array();
	$killsEliteArr = array();
	$dateArr = array();
	
	$query_all = "SELECT * FROM `d3_stat`";
	$result_all = mysql_query($query_all);
	
	while ($row = mysql_fetch_array($result_all)) {
		array_push($dateArr, $row['date']);
		array_push($hcParagonArr, $row['paragon_hc']);
		array_push($scParagonArr, $row['paragon']);
		array_push($killsMonsterHcArr, $row['kills_monster_hc']);
		array_push($killsMonsterScArr, $row['kills_monster']);
		array_push($killsEliteArr, $row['kills_elite']);
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>Profile page</title>
        <link rel="stylesheet" type="text/css" href="style.css">
		
		<!--Load the AJAX API-->
		<script type="text/javascript" src="https://www.google.com/jsapi"></script>
		<script type="text/javascript">
		
		google.load('visualization', '1.0', {'packages':['corechart', 'table']});
		
		//array preparation
		<?php
			$tmpArr = json_encode($hcParagonArr);
			echo "var jsParagonHcArr = ". $tmpArr . ";\n";
			
			$tmpArr = json_encode($scParagonArr);
			echo "var jsParagonScArr = ". $tmpArr . ";\n";
			
			$tmpArr = json_encode($killsMonsterHcArr);
			echo "var jsKillsHcArr = ". $tmpArr . ";\n";
			
			$tmpArr = json_encode($killsMonsterScArr);
			echo "var jsKillsScArr = ". $tmpArr . ";\n";
			
			$tmpArr = json_encode($killsEliteArr);
			echo "var jsKillsEliteArr = ". $tmpArr . ";\n";
			
			$tmpArr = json_encode($dateArr);
			echo "var jsDateArr = ". $tmpArr . ";\n";
			
			echo "var tableHcParagon;\n";
			echo "var tableScParagon;\n";
			echo "var tableHcKills;\n";
			echo "var tableScKills;\n";
			echo "var tableEliteKills;\n";
		?>

		google.setOnLoadCallback(prepTab);
		
		google.setOnLoadCallback(drawChart_hcParagon);
		google.setOnLoadCallback(drawChart_scParagon);
		
		google.setOnLoadCallback(drawChart_killsMonsterHc);
		google.setOnLoadCallback(drawChart_killsMonsterSc);
		
		google.setOnLoadCallback(drawChart_killsElite);
		google.setOnLoadCallback(drawChart_PlayTime);
		
		
		
		function prepTab() {
			var size = jsDateArr.length;
			
			tableHcParagon = new google.visualization.DataTable();
			tableHcParagon.addColumn('number', 'date');
			tableHcParagon.addColumn('number', 'paragon hc');
			
			tableScParagon = new google.visualization.DataTable();
			tableScParagon.addColumn('number', 'date');
			tableScParagon.addColumn('number', 'paragon sc');
			
			tableHcKills = new google.visualization.DataTable();
			tableHcKills.addColumn('number', 'date');
			tableHcKills.addColumn('number', 'kills hc');
			
			tableScKills = new google.visualization.DataTable();
			tableScKills.addColumn('number', 'date');
			tableScKills.addColumn('number', 'kills sc');
			
			tableEliteKills = new google.visualization.DataTable();
			tableEliteKills.addColumn('number', 'date');
			tableEliteKills.addColumn('number', 'elite kills');
			
			for (var i = 0; i < size; i++) {
				tableHcParagon.addRow([parseInt(jsDateArr[i]), parseInt(jsParagonHcArr[i])]);
				tableScParagon.addRow([parseInt(jsDateArr[i]), parseInt(jsParagonScArr[i])]);
				tableHcKills.addRow([parseInt(jsDateArr[i]), parseInt(jsKillsHcArr[i])]);
				tableScKills.addRow([parseInt(jsDateArr[i]), parseInt(jsKillsScArr[i])]);
				tableEliteKills.addRow([parseInt(jsDateArr[i]), parseInt(jsKillsEliteArr[i])]);
			}
		}
		
		
		function drawChart_hcParagon() {
			var options = {
				'title': 'Hardcore Paragon Level',
				'width': 500,
				'height': 250
			};

			var chart = new google.visualization.LineChart(document.getElementById('chart_hcParagon'));
			chart.draw(tableHcParagon, options);
		}
		
		function drawChart_scParagon() {
			var options = {
				'title': 'Softcore Paragon Level',
				'width': 500,
				'height': 250
			};

			// Instantiate and draw our chart, passing in some options.
			var chart = new google.visualization.LineChart(document.getElementById('chart_scParagon'));
			chart.draw(tableScParagon, options);
		}
		
		function drawChart_killsMonsterHc() {
			var options = {
				'title': 'Hardcore Monster Kills',
				'width': 500,
				'height': 250
			};

			// Instantiate and draw our chart, passing in some options.
			var chart = new google.visualization.LineChart(document.getElementById('chart_killsMonsterHc'));
			chart.draw(tableHcKills, options);
		}
		
		function drawChart_killsMonsterSc() {
			var options = {
				'title': 'Overall Monster Kills',
				'width': 500,
				'height': 250
			};

			// Instantiate and draw our chart, passing in some options.
			var chart = new google.visualization.LineChart(document.getElementById('chart_killsMonsterSc'));
			chart.draw(tableScKills, options);
		}
		
		function drawChart_killsElite() {
			var options = {
				'title': 'Elite Kills',
				'width': 500,
				'height': 250
			};

			// Instantiate and draw our chart, passing in some options.
			var chart = new google.visualization.LineChart(document.getElementById('chart_killsElite'));
			chart.draw(tableEliteKills, options);
		}
		
		function drawChart_PlayTime() {
			var data = google.visualization.arrayToDataTable([
				['Class', 'Play Time', { role: 'style' }],
				['Barbarian',  		<?php echo $row_last['pt_barbarian']; ?>,		'stroke-color: #000000; stroke-width: 2; fill-color: #FF0000'],
				['Crusader',  		<?php echo $row_last['pt_crusader']; ?>,   		'stroke-color: #000000; stroke-width: 2; fill-color: #F8F8F8'],
				['Demon Hunter',  	<?php echo $row_last['pt_demon_hunter']; ?>,    'stroke-color: #000000; stroke-width: 2; fill-color: #00FF00'],
				['Monk',  			<?php echo $row_last['pt_monk']; ?>,   			'stroke-color: #000000; stroke-width: 2; fill-color: #FF9900'],
				['Witch Doctor',  	<?php echo $row_last['pt_witch_doctor']; ?>,   	'stroke-color: #000000; stroke-width: 2; fill-color: #009900'],
				['Wizard',  		<?php echo $row_last['pt_wizard']; ?>,   		'stroke-color: #000000; stroke-width: 2; fill-color: #00CCFF']
			]);

			var options = {
				'title': 'Class Playtime',
				'width': 500,
				'height': 250
			};

			// Instantiate and draw our chart, passing in some options.
			var chart = new google.visualization.ColumnChart(document.getElementById('chart_PlayTime'));
			chart.draw(data, options);
		}
		
		</script>
		
	</head>
	
	<body>
		<div id="wrapper">
			<div id="header">
				Bnet Profile Underko#2505
			</div>
			
			<?php include("./resource/header/header.php");?>
			
			<div id="content">
				<div id="chart_hcParagon"></div>
				<div id="chart_scParagon"></div>
				
				<div id="chart_killsMonsterHc"></div>
				<div id="chart_killsMonsterSc"></div>
				
				<div id="chart_killsElite"></div>
				<div id="chart_PlayTime"></div>
			</div>
		
			<?php include("./resource/footer/footer.php");?>

		</div>
	</body>
   
</html>