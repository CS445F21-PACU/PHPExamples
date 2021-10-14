<?php
  // Author: 			Chadd Williams
  // File: 				connect.php
  // Date:				March 18, 2013
  // Class:				CS 445	
  // Project: 		In Class PDO Examples
  // Description: produce a connection

   # pdo_testdb_connect.php - function for connecting to the "test" database

   function db_connect ()
   {
     $dbh = new PDO("mysql:host=64.59.233.245;dbname=chadd_test",  // chadd_a1
     "CLASS_EXAMPLE_RO", "CS445!@#");
		 $dbh->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
     return ($dbh);
   }
	 
	 function db_close (&$dbh)
	 {
	 	$dbh = NULL;
	 }
	 
?>
