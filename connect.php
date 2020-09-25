<?php 

	/* 
	Configuration
	fill those varaibles with your data
	*/
 
	 $DB_SERVER = getenv('OPENSHIFT_MYSQL_DB_HOST');
	 $DB_USER = getenv('OPENSHIFT_MYSQL_DB_USERNAME');
	 $DB_PASS = getenv('OPENSHIFT_MYSQL_DB_PASSWORD');
	 $DB_DATABASE = getenv('MYSQL_DATABASE');
/******************************************************************/

	 try { 
	 $connect =  new PDO("mysql:host=$DB_SERVER; dbname=$DB_DATABASE", $DB_USER,$DB_PASS); 
	 } 

	catch (PDOException $e) { 

	 	if (empty($DB_DATABASE)) {
	 		//die("oui trouve") ;
			echo $DB_DATABASE;
	 	} else {
	 		die("non trouve ") ;
	 	}
	 	 
	 } 
 
	
 
	 $connect->query("set charcter_set_server = 'utf8'"); 
	 $connect->query("set names'utf8' "); 
	 	
?>
