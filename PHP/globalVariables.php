<?php
  // Author: 			Chadd Williams
  // File: 				globalVariables.php
  // Date:				March 18, 2013
  // Class:				CS 445	
  // Project: 		In Class PDO Examples
  // Description: demonstrate the use of global and local variables 
  //							in a function

  	$gValue = 1;
	
 	function printDataGlobal($data)
 	{
  	 global $gValue;  // this attaches the name 
										// to the global variable.
   	print $gValue . ' ' . $data;
 	}
?>