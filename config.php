<?php
	$baseurl= 'http://localhost/deadsquad/';
	$host= 'localhost';
	$user= 'root';
	$pass= '';
	$dbname= 'deadsquad';
	
	mysql_connect($host, $user, $pass) or die(mysql_error());
	$dbselect= mysql_select_db($dbname);
?>