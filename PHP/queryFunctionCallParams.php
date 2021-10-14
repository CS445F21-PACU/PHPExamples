<?php

	// Author: 			Chadd Williams
  // File: 				queryFunctionCallParams.php
  // Date:				March 18, 2013
  // Class:				CS 445	
  // Project: 		In Class PDO Examples
  // Description: demonstrate a function call that returns an array from
  //							an SQL query using a parameter to add to WHERE
	
	require_once 'connDB.php';
	
	require_once 'queryFunctionParams.php';
		
	session_start();

	$dbh = db_connect();
	
	
?>

<html>

	<head>
		<title></title>
	</head>

	<body>
		<?php
		$data = getAllPeopleNamesWhereLName($dbh, "Simpson");

		foreach ( $data as $row )
		{
  		print $row['FName'] . ' ' . $row['LName'].'<br/>';
		}
		?>
		
	</body>

</html>

<?php
	db_close($dbh);
?>