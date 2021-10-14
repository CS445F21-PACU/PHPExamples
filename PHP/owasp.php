<?php

	require_once '/space/https/libraries/owasp/src/ESAPI.php';

	$ESAPI = new ESAPI ("/space/ESAPI_config/ESAPI.xml");

	$badString = "<script>alert('hello');</script>	";

	print $badString;
	print "<br/>";

 	$safe = $ESAPI->getEncoder()->encodeForHTML(  $badString );
	print $safe;
	print "<br/>";
?>
