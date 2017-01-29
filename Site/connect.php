<?php
	define("HOST", "localhost"); 
	define("USER", "application_project"); 
	define("PASSWORD", "project_password_!");
	define("DATABASE", "heroschema") 

	$conn = new mysqli(HOST, USER, PASSWORD, DATABASE);
	
	if ($conn->connect_error){
		die("Could not connect" . $conn->connect_error);
	}
?>
