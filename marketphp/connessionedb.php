<?php



try {
	$db = new PDO('mysql:host=127.0.0.1;dbname=esercizio-php-gts;charset=utf8mb4', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	throw new Exception(sprintf(
		"PDO connection failed: %s\n", $e->getMessage()
	));
}
var_dump($db);