<?php
	
	function dbs_connect() {
		 //database variables for connection    
		$username = "mywebz";
		$password = "";
		$hostname = "localhost";
		$database = "my_mywebz";
		
		//connection to the database
		$dbhandle = mysql_connect($hostname, $username, $password) 
			or die("Unable to connect to MySQL");
		
		$selected = mysql_select_db($database, $dbhandle) 
			or die("Could not select database: '$database'");
	}
?>