<?php
	// Author: 			Chadd Williams
  // File: 				queryWorksOnByEmpID.php
  // Date:				October 16, 2019
  // Class:				CS 445	
  // Project: 		In Class PDO Examples
   // Description: demonstrate a function to run an SQL query and return
  // 							the results as an array,  using a parameter for WHERE

	function getCourseByPersonID($dbh, $PersonID)
	{
  	$rows = array();

  	$sth = $dbh->prepare(
			"SELECT * FROM CurrentlyEnrolled 
    	WHERE PersonID  = :pid");

  	$sth->bindValue(":pid",$PersonID);
		// run the query	
  	$sth->execute();
	
  	while ($row = $sth -> fetch())
		{
			$rows[] = $row;
		}
		return $rows;
	}
  
  
?>