<?php
	// Author: 			Chadd Williams
  // File: 				queryFunctionCall.php
  // Date:				March 18, 2013
  // Class:				CS 445	
  // Project: 		In Class PDO Examples
   // Description: demonstrate a function to run an SQL query and return
  // 							the results as an array,  using a parameter for WHERE

	function getAllPeopleNamesWhereLName($dbh, $LName)
	{
  	$rows = array();

  	$sth = $dbh->prepare(
			"SELECT FName, LName FROM People 
    	WHERE LName like :name");

  	$sth->bindValue(":name",$LName);
		// run the query	
  	$sth->execute();
	
  	while ($row = $sth -> fetch())
		{
			$rows[] = $row;
		}
		return $rows;
	}
  
  
?>