<?php



try {
	$db = new PDO('mysql:host=serverside.lochiva.net;dbname=chris_database;charset=utf8mb4', 'chris', 'chris');
} catch (PDOException $e) {
	throw new Exception(sprintf(
		"PDO connection failed: %s\n", $e->getMessage()
	));
}
var_dump($db);


