<?php
	$server = "localhost";
	$user = "root";
	$pass = "";
	$db ="notice";
	$conn = new mysqli($server, $user, $pass, $db);
	if ($conn->connect_error)
	  {
	  	echo "Failed to connect with database: " . $conn->connect_error;
	  }
?>