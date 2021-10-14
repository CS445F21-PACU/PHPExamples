<?php
  // Author: 			Chadd Williams
  // File: 				simpleQuery.php
  // Date:				March 18, 2013
  // Class:				CS 445	
  // Project: 		In Class PDO Examples
  // Description: scratch file to test lots of stuff
 
 
	require_once 'connDB.php';
	
	$dbh = db_connect();
	
	$dbh->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	
	// SIMPLE STATEMENT
	$sth = $dbh -> prepare("SELECT FName, LName, Login FROM People");
	
	$sth -> execute();
	
	printf("Number of columns in result set: %d\n", $sth -> columnCount());
	
	$count = 0;
	while ($row = $sth -> fetch())
	{
		printf("FName: %s, LName: %s, Login: %s\n", $row[0], $row[1], $row[2]);
		$count++;
	}
	printf("Number of rows in result set: %d\n", $count);
	

	printf("\n\nNEW QUERY\n");
	// More complex query
	// http://www.kitebird.com/articles/php-pdo.html
	$sthWhereName = $dbh -> prepare("SELECT FName, LName, Login FROM People WHERE LName like :name");
	
	$sthWhereName->bindValue(":name","Simpson");
	$sthWhereName -> execute();
	
	printf("Number of columns in result set: %d\n", $sthWhereName -> columnCount());
	
	$count = 0;
	while ($row = $sthWhereName -> fetch())
	{
		printf("FName: %s, LName: %s, Login: %s\n", $row[0], $row[1], $row[2]);
		// You can use the Column names to access the array
		printf("FName: %s, LName: %s, Login: %s\n", $row["FName"], $row["LName"], $row["Login"]);
		$count++;
	}
	printf("Number of rows in result set: %d\n", $count);

	try
   {
     $sth = $dbh->prepare ("INSERT INTO no_such_table");
     $sth->execute ();
   }
   catch (PDOException $e)
   {
     printf ("The statement failed.\n");
     printf ("getCode: ". $e->getCode () . "\n");
     printf ("getMessage: ". $e->getMessage () . "\n");
   }

	db_close($dbh);
?>
