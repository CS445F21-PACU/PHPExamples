<?php
  // Author: 			Chadd Williams
  // File: 				addUser.php
  // Date:				March 18, 2013
  // Class:				CS 445	
  // Project: 		In Class PDO Examples
  // Description: add a user to the DB
 
	require_once 'connDB.php';

	if( (isset($_POST['user']) &&
		isset($_POST['pass'])))
	{
  	$user = $_POST['user'];
		$passwd = $_POST['pass'];
		
		// http://stackoverflow.com/questions/853813/how-to-create-a-random-string-using-php
		// quick and very dirty.
		$salt = substr(hash("sha256",rand()), 0, 20);
		
		$dbh=db_connect();
		try
  	{
			$sth = $dbh->prepare("INSERT INTO  users VALUES (:user,:pass,:salt)");
		
			$hashedPW = crypt($passwd . $salt, '$2y$07$8d88bb4a9916b302c1c68c$');
	
			$sth->bindValue(":user",$user);
			$sth->bindValue(":pass",$hashedPW);
			$sth->bindValue(":salt",$salt);
		
		
			$sth->execute();
		}
		catch (PDOException $e)
   {
     printf ("The statement failed.\n");
     printf ("getCode: ". $e->getCode () . "\n");
     printf ("getMessage: ". $e->getMessage () . "\n");
   } 
		
		db_close($dbh);
		print "User " . $user ." added";
	}
		
	
 
?>