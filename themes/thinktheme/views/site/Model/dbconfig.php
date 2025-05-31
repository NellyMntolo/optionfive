<?php
		$dbhost = 'localhost';

	   	$dbuser = 'optionfive'; 
	   	$dbpass = 'option5';
	   	$conn = mysql_connect($dbhost, $dbuser, $dbpass);
	   	mysql_select_db('optionfive');
	   	mysql_set_charset("utf8");
	   	mysql_query("SET NAMES 'utf8'");	
	   	mysql_query("SET CHARACTER SET utf8", $conn); 


	   	if(! $conn )
	   {
	      die('Could not connect: ' . mysql_error());
	   }
