<?php

$dbhost 	= "127.0.0.1";
$dbname		= "dbmsproject";
$dbuser		= "root";
$dbpass		= "";

// database connection
$conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);

?>
