<?php
	//phpinfo();
	$dbhost = 'localhost';
	$dbuser = 'faiq';
	$dbpass = 'Faiq123';
	$dbname = 'almatloob';
	$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
	if ($conn->connect_error) {
		echo "Connection failed<br/>";
		die("Connection failed: " . $conn->connect_error);
	}
?>
