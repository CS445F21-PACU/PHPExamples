<?php
  // Author: 			Chadd Williams
  // File: 				getData.php
  // Date:				March 18, 2013
  // Class:				CS 445	
  // Project: 		In Class PDO Examples
  // Description: get binary data from the database and display it using
  // 							its content type.

	require_once 'connDB.php';
	
	$dbh = db_connect();


	if( isset($_GET['id']) ) {
	
		$id = $_GET['id'];
		$sth = $dbh->prepare("select image, type from
		pictures where PicID=:picid");
		$sth->bindValue(":picid",$id);
		
	  $sth->execute();
	  
	  $row = $sth->fetch();
		$data = $row['image'];
		$type = $row['type'];
	  Header( "Content-type: $type");
	  print $data;
	  
	}else{
	   print "FILE NOT FOUND";
	}
  db_close();	
?>
