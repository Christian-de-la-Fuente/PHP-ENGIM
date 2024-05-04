<?php

$elenco_file = glob("dati/*.jpg");

var_dump($elenco_file);
echo '<h2>le immagini nel dir dati</h2>';
foreach($elenco_file as $file){
    echo '<img src="' . $file . '" >';
}

