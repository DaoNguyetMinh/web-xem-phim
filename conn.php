<?php
	$servername = 'localhost';
	$username = 'root';
	$password = '';
	$db = 'filmonline';
	
	$conn = new mysqli($servername, $username, $password, $db);
	if ($conn->connect_error) {
		die($conn->connect_error);
	}
?>