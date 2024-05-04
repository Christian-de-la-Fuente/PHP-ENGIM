<?php

$prezzi = [
    'mare' => '999',
    'lago' => '790',
    'ghiacciaio' => '3999'
];

$titoli = [
    'mare' => 'Viaggio al mare',
    'lago' => 'Viaggio al lago',
    'ghiacciaio' => 'Viaggio al ghiacciaio'
];

$immagini = [
    'mare' => 'alestorm.jpg',
    'lago' => 'Hoaxed_photo_of_the_Loch_Ness_monster.jpg',
    'ghiacciaio' => 'rammstein.jpg'
];

if(!empty($_GET['dove']) && $_GET['dove'] == 'mare'){
    echo '<h1>' . $titoli['mare'] . '</h1>' . '<br>' . '<img src="./immagini/' . $immagini['mare'] . '" alt="" height=230px>' . '<br> ' . 'Solo ' . $prezzi['mare'] . '€';
} elseif(!empty($_GET['dove']) && $_GET['dove'] == 'lago'){
    echo '<h1>' . $titoli['lago'] . '</h1>' . '<br>'  . '<img src="./immagini/' . $immagini['lago'] . '" alt="" height=230px>' . '<br>' . 'Solo ' . $prezzi['lago'] . '€';
} elseif(!empty($_GET['dove']) && $_GET['dove'] == 'ghiacciaio'){
    echo '<h1>' . $titoli['ghiacciaio'] . '</h1>' . '<br>' . '<img src="./immagini/' . $immagini['ghiacciaio'] . '" alt="" height=230px>' . '<br>' . 'Solo ' . $prezzi['ghiacciaio'] . '€';
}

