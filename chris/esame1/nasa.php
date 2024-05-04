<?php

// Ottieni il contenuto della pagina web della NASA
$homepage = file('https://www.nasa.gov/');

// Estrai le righe 5 e 12
$row5 = $homepage[4]; // L'indice parte da 0
$row12 = $homepage[11];

// Mostra le righe a video con htmlentities()
echo "Riga 5: " . htmlentities($row5) . "<br>";
echo "Riga 12: " . htmlentities($row12);