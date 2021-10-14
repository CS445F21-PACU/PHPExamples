<html>

<body>
	<?php
		print "<table border=1> <tr>";
		$columns = 1; // create variable
		while( $columns < 10)
		{
			print "<td>" . $columns . "</td>";
			$columns += 1;
		}
		print "</tr> </table>";
	?>

	Hello out there
	<center> HI!</center>

	<?php
		print $columns; // retains value from above
	?>
</body>
<html>
