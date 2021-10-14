<?php
	// Author: 			Chadd Williams
  // File: 				queryWorksOnByEmpID.php
  // Date:				October 16, 2019
  // Class:				CS 445	
  // Project: 		In Class PDO Examples
   // Description: demonstrate a function to run an SQL query and return
  // 							the results as an array,  using a parameter for WHERE

	function getWorksOnByEmpID($dbh, $EmpID)
	{
  	$rows = array();

  	$sth = $dbh->prepare(
			"SELECT * FROM WorksOn 
    	WHERE EmpID  = :empid");

  	$sth->bindValue(":empid",$EmpID);
		// run the query	
  	$sth->execute();
	
  	while ($row = $sth -> fetch())
		{
			$rows[] = $row;
		}
		return $rows;
	}
  
  
?>