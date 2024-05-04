<?php

// leggo me stesso

// passare come parametro name il nome del file da leggere
$filename = $_GET['name'] ?? 'file.txt';

$filename = 'dati/' . $filename;

$testo = file_get_contents($filename);


echo $testo;

