<?php
	/**
	 * To be included in every php file.
	 * Includes:
	 * - Global debug flags
	 * - Global variable definitions
	 * - Code to be executed by each php file
	 */
	
	/**
	 * Debug value to allow the use of GET parameters
	 * This flag should only be set to TRUE while in
	 * development and testing, and set to FALSE when 
	 * pushed to production
	 */
	define('ENABLE_GET', TRUE);
	
	/**
	 * Constant used in the httpboostrap to change 
	 * behavior when in a production environment
	 */
	define('PRODUCTION', TRUE);
	
	/**
	 * An outcome is met if this percentage
	 * of the students (80%) get 70% or more
	 */
	define('GOAL', 80);		
	
	/**
	 * Percentage a student must get to pass a course
	 * This is really only used in the stored procedure
	 * and it must be updated there if this is changed.
	 * The stored procedure script is in the db directory.
	 */
	define('PASSING_GOAL', 70);
	
	session_start();
	
	try
	{
		$DB_Read = new PDO('mysql:dbname=AbOut;host=localhost', 'web_user', 'resu_bew');
		$DB_Write = new PDO('mysql:dbname=AbOut;host=localhost', 'web_user', 'resu_bew'); 
	}
	catch(PDOException $e)
	{
		echo "Error connecting to the database. Error information: ".$e->getMessage();
		die();
	}
?>
