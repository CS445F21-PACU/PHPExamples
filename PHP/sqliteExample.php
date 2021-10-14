<?php
    
    
  $dbh = new PDO
  ('sqlite:/space/sqlite/chadd/movies.db', 
    null, 
    null 
    /*array(PDO::ATTR_PERSISTENT => true) */
	);
	
	
	$sth = $dbh->prepare("SELECT * From Movies where MovieID = :movieid");
	
	$sth->bindValue(":movieid", 1);
	
	$sth->execute();
	
	$row = $sth->fetch();
	
	print $row[0] . " " . $row[1];
	
	$dbh = null;
?>
