<?php
	require_once '/space/https/libraries/phpass/PasswordHash.php';

	// stolen from http://stackoverflow.com/questions/1581610/how-can-i-store-my-users-passwords-safely

	$pwdHasher = new PasswordHash(8, FALSE);
	$password = "12345"; // the combination on my luggage!

	// $hash is what you would store in your database
	$hash = $pwdHasher->HashPassword( $password );
	print "Password: " . $password . "<br/>";
	print "Hashed Password: " . $hash. "<br/>";

	// $hash would be the $hashed stored in your database for this user
	$checked = $pwdHasher->CheckPassword($password, $hash);
	if ($checked) 
	{
    		echo 'password correct';
	} 
	else 
	{
    		echo 'wrong credentials';
	}

?>
