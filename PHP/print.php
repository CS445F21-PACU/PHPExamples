<?php
  // Author: 			Chadd Williams
  // File: 				print.php
  // Date:				March 18, 2013
  // Class:				CS 445	
  // Project: 		In Class PDO Examples
  // Description: demonstrate a function with arguments
  
	function printData ($data1, $data2)
	{
    $lString = $data1 . " " . $data2;
    print $lString;
  	return $lString;
  }   

?>