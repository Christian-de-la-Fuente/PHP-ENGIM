<?php

$user = 'root';

$pass = 'ruffi';
echo '<pre>';
try {
    $dbh = new PDO('mysql:host=serverside.lochiva.net;dbname=test', $user, $pass);
    foreach($dbh->query('SELECT * from PrimaTabella') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
