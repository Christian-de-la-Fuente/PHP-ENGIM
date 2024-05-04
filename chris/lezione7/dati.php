<?php
declare(strict_types = 1); // in teoria si dovrebbe arrabbiare
// boolean
$isHappy = true; // false

// intero
$height = 180; // in centimetri

// string
$name = 'Bob';

echo gettype($isHappy) . '<br>';
echo gettype($height) . '<br>';
echo gettype($name) . '<br>';

// riasegnamento della variabile
$height = 180.5;
echo gettype($height) . '<br>';





// usiamo array_push e array_pop

$coda = ['mele', 'pere'];

array_push($coda, 'banane');
echo '<br>';

var_dump($coda);
echo '<br>';

$ultimo = array_pop($coda);

echo $ultimo;
echo '<br>';

var_dump($coda);
echo '<br>';
// fare la stessa cosa senza array_push e array_pop

$coda[] = 'mango';

var_dump($coda);
echo '<br>';

echo $coda[count($coda) - 1];
echo '<br>';

unset($coda[count($coda) - 1]);

var_dump($coda);
echo '<br>';