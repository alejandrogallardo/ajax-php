<?php
	$hostname = "localhost";
	$database = "curso_php_ajax";
	$username = "root";
	$password = "";

	try{
	$conn = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
	} catch(PDOException $e){
	$conn->setArribute(PDO::ATT_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo 'Could not open database.';
	}
?>