<?php

include 'config.php';

$filename = $configs['filename'];

$lines = file($filename);

$count_lines = 0;
$count_seasons = [
    'primavera' => 0,
    'estate' => 0,
    'autunno' => 0,
    'inverno' => 0
];
$seasons = array_keys($count_seasons);
$count_periods = [
    'begin' => 0,
    'end' => 0
];

foreach($lines as $line){

    list($date, $season, $period) = explode(';', $line);
    $count_lines++;
    $count_seasons[$season]++; // conto quante volte c' è una stagione
    $count_periods[$period]++; // conto quante volte c' è un periodo

}

print_r($count_lines);
echo '<hr>';

print_r($count_seasons);
echo '<hr>';

print_r($count_periods);
echo '<hr>';

echo 'numero totaledi invi memorizzati: ' . $count_lines . '<br>';


foreach($seasons as $season){
    $value = round($count_seasons[$season]/$count_lines*100, 2);
    echo 'percentuale scelta ' . $season . ': ' . $value . '%' . '<br>';
}

?>