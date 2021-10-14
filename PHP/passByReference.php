<?php
  // Author: 			Chadd Williams
  // File: 				passByReference.php
  // Date:				March 18, 2013
  // Class:				CS 445	
  // Project: 		In Class PDO Examples
  // Description: demonstrate pass by reference

  function printDataRef (&$data1, &$data2)
	{
    $lString = $data1 . " "  . $data2;
    print $lString;
  	return $lString;
	} 
	
?>