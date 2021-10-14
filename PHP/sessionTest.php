<?php				// sessionTest.php
	session_start();
	$_SESSION['PID']=2;
	header('Location: showPID.php');
?>
