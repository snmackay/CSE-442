<?php
require "lib/password.php"
//error logging
error_reporting(-1); // reports all errors
ini_set("display_errors", "1"); // shows all errors
ini_set("log_errors", 1);
ini_set("error_log", "/web/CSE442-542/2019-Summer/cse-442e/faculty/php-error.log");

//login to sql
session_start();
Change this to your connection info.
$DATABASE_HOST = 'tethys.cse.buffalo.edu';
$DATABASE_USER = 'jeh24';
$DATABASE_PASS = '50172309';
$DATABASE_NAME = 'cse442_542_2019_summer_teame_db';
 // Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
 	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
 }
if(isset($_POST['loginEmailEntryText']){
	$email = $_POST['loginEmailEntryText'];
	$code = random_string(10);
	mail($email,"Access Code", "Your code is: " $code);
	
}


