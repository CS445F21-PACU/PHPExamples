<?php
	require_once('basicErrorHandling.php');

  // Author: 			Chadd Williams
  // File: 				showWorksOn.php
  // Date:				March 18, 2013
  // Class:				CS 445	
  // Project: 		In Class PDO Examples
  // Description: get data from POST variable and run a query
 
	require_once 'connDB.php';
	require_once 'queryTakesCourseByPersonID.php';
 
	if( !isset ($_POST['PersonID']) )
 	{
		die("ERROR: PersonID");	
 	}

 	$PersonID = $_POST['PersonID'];

 	$dbh = db_connect();
 	$data = getCourseByPersonID($dbh, $PersonID);
	
	echo("PersonID: ". $PersonID)
	// display data in table

?>   
