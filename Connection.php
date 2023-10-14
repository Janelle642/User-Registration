<?php

$dsn = "mysql:host=localhost;dbname=user_registration";
$dbusername = "user";
$dbpassword = "";
try{
	$pdo = new PDO($dsn, $dbusername, $dbpassword); 
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}
