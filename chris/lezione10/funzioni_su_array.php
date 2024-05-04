<?php

// array_map


$nomi = [
    'Metru nui',
    'Makuta',
    'Vakama'
];

$nomi = array_map('strtolower', $nomi);

print_r($nomi);

// array_reduce

$colori = [
    'giallo',
    'rosso',
    'blu'
];

$lista_colori = array_reduce($colori, 'lista');

function lista($stringa, $item){

    return ($stringa . '<li>' . $item . '</li>');
    
}

echo '<ul>' . $lista_colori . '</ul>';