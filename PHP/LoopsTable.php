
<html>
<body>

<table border=1 cellpadding=4>
	<?php
  	$rows = 1; // create variable
		while( $rows < 10)
		{
			print "<tr>";
			$columns = 1; // create variable
			while( $columns < 10)
			{
				print "<td>";
				print $rows . " , " . $columns;
				print "</td>";
				$columns += 1;
			}
			print "</tr>";
			$rows += 1;
		}
	?>
</table>

</body>
</html>
