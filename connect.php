<?php 

	/* 
	Configuration
	fill those varaibles with your data
	*/
 
	 $DB_SERVER = getenv('MYSQL_SERVICE_HOST');
	 $DB_USER = getenv('MYSQL_USER');
	 $DB_PASS = getenv('MYSQL_PASSWORD');
	 $DB_DATABASE = getenv('MYSQL_DATABASE');
/******************************************************************/


//echo $DB_DATABASE;
//echo $DB_USER;
//echo $DB_PASS;
//echo $DB_SERVER;
	 	 try { 
	 $connect =  new PDO("mysql:host=$DB_SERVER; dbname=$DB_DATABASE", $DB_USER,$DB_PASS); 
	 } 

	 catch (PDOException $e) { 

	 	if (empty($DB_DATABASE)) {
	 		die("<strong>Database Error..! </strong><a href='install'>Start installation</a>") ;
	 	} else {
	 		die("<strong>Database Error..! </strong>") ;
	 	}
	 	 
	 } 
?>
