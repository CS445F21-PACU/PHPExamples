<?php
  // Author: 			Chadd Williams
  // File: 				binaryDataInput.php
  // Date:				March 18, 2013
  // Class:				CS 445	
  // Project: 		In Class PDO Examples
  // Description: load binary data from a web form to the database

	require_once 'connDB.php';
	
	$dbh = db_connect();

/* CREATE TABLE pictures (
 * PicID int(11) NOT NULL auto_increment,
 * image mediumblob NOT NULL,
 *	type varchar(255) NOT NULL,
 *  PRIMARY KEY  (`PicID`)) ENGINE=InnoDB;
 * 
 */
	if(isset($_POST['submit']) ) {
		
		$filename = $_FILES['datafile']['tmp_name'];
		$filesize = $_FILES['datafile']['size'];
		$filetype = $_FILES['datafile']['type'];
		
		$data = 	fread( fopen($filename, "r"), 
									filesize($filename));
		$sth = $dbh->prepare("INSERT INTO pictures 	       
			VALUES (null, :data , :filetype)");
		$sth->bindValue(":data", $data);
		$sth->bindValue(":filetype",$filetype);
		  $sth->execute();
		
		print "We just added PicID:". $dbh->lastInsertId();;
		print "{$filetype} {$_FILES['datafile']['name']}";
	}
	db_close();
?>
