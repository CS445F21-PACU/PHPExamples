<?php				// showPID.php
	session_start();
	if( isset($_SESSION['PID']))
	{	
		print $_SESSION['PID'];
	}
?> 
