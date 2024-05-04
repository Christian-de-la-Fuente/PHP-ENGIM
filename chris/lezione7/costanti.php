<?php


echo 'la costante _FILE_ :' . __FILE__ . '<br>';
echo 'la costante _DIR_ :' . __DIR__ . '<br>';

$a = 3;
$b = 10;
$c = $a * $b;
$d = $a + $b;
$e = $a - $b;

echo 'Moltiplicazione: ' . $c . '<br>';
echo 'Somma: ' . $d . '<br>';
echo 'Differenza: ' . $e . '<br>';
echo '<hr>';

$conto = 10;

echo $conto . '<br>';

$conto++;

echo $conto . '<br>';





$pranzo = 'oggi voglio lasagne';

echo strlen($pranzo);
echo '<br>';

echo strlen('oggi voglio lasagne');
echo '<br>';





// usare la funzione strtoupper per stampare maiuscola
// la var di prima
echo strtoupper($pranzo);
echo '<br>';


echo strpos($pranzo, 'voglio');
echo '<br>';

echo substr($pranzo, 5, 3);
echo '<br>';

$stringa = 'tag <b>';
echo '<br>';

echo $stringa;
echo '<br>';

echo htmlspecialchars($stringa);
echo '<br>';

echo str_shuffle('arancione');
echo '<br>';

echo levenshtein('ciao', 'miao');
echo '<br>';

// array associativi

$persona = [
    'nome' => 'Christian',
    'cognome' => 'de la Fuente'
];

echo $persona['nome'];
echo '<br>';

var_dump($persona);