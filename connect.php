<?php 

	/* 
	Configuration
	fill those varaibles with your data
	*/
 
	 $DB_SERVER = getenv('OPENSHIFT_MYSQL_DB_HOST');
	 $DB_USER = getenv('OPENSHIFT_MYSQL_DB_USERNAME');
	 $DB_PASS = getenv('OPENSHIFT_MYSQL_DB_PASSWORD');
	 $DB_DATABASE = getenv('OPENSHIFT_GEAR_NAME');
/******************************************************************/
 

	 	$conn =new mysqli($DB_SERVER,$DB_USER,$DB_PASS,$DB_DATABASE) or die(mysqli_connect_error());
 
?>
