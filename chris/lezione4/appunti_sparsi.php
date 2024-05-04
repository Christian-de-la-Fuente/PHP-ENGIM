<?php
// inserisco le variabili
// il nome delle variabili inizia con il $
// e poi la prima lettera può essere una lettera o 
// seguita da lettere e numeri

// il titolo &title
$titolo = "Chi sono";

// il $document_title
$document_title = "Appunti sparsi";

// definisco un array
$persona = [
    "Christian", 
    "de la Fuente", 
    "Barcellona (Spagna)",
    "31/05/1999"
];

// per accedere all'elemento i-esimo si usa l'indice
// dell'elemento partendo da 0
// esempio per prendere il cognome $persona[1]
/* Potrei anche dichiadare
    $persona[0] = "Roberto" 
    */

// in vecchie versioni di php si usava per la dicchiarazione degli
// array il costrutto array()
$animali = array("Ornitorrinco", "Focche", "Tigre", "Capibara", "Alce");

$table_header = [
    "Giorno", 
    "Perchè è un bel giorno", 
    "Pianeta"
];

// definire un array di array per tenere i giorni
// il livello più esterno tiene i campi della riga
// il 
$giorni = [
    ["Lunedì", "È il primo giorno della settimana", "Luna"],
    ["Martedì", "Ancora si conserva l'energia", "Marte"],
    ["Mercoledì", "È metà settimana", "Mercurio"],
    ["Giovedì", "È il giorno prima del venerdì", "Giove"],
    ["Venerdì", "È l'ultimo giorno lavorativo della settimana", "Venere"],
    ["Sabato", "È il primo giorno del fine settimana", "Saturno"],
    ["Domenica", "È la domenica, cosa si può dire di più", "Sole"]
];

$today = date("d/m/Y H:i:s");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $document_title ?></title>
    <style>
        .border{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h1><?= $titolo ?></h1>
    <label>Nome: </label>
    <span><?= $persona[0] ?></span><br>
    <label>Cognome: </label>
    <span><?= $persona[1] ?></span><br>
    <label>Città di nascita: </label>
    <span><?= $persona[2] ?></span><br>
    <label>Data di nascita: </label>
    <span><?= $persona[3] ?></span><br>
    <section>
        <h2>I miei animali preferiti</h2>
        <ul>
            <?php 
            foreach($animali as $animale){
                echo "<li>" . $animale . "</li>";
            }

            ?>
            
        </ul>
    </section>
    <section>
        <h3>I giorni della settimana</h3>
        <table class="border">
            <tr class="border">
                <?php
                foreach($table_header as $label){
                    echo '<th class="border">' . $label . '</th>';
                }

                ?>

            </tr>

            <?php

            foreach($giorni as $giorno){
                echo '<tr>';
                for($i = 0; $i < count($giorno); $i++){
                    echo '<td class="border">' . $giorno[$i] . '</td>';
                };
                echo ' </tr>';
            }

            ?>

        </table>
    </section>
    <section>
        <h4>I miei link</h4>
        <p><a title="L'enciclopedia libera"
            href="https://www.wikipedia.org/">Wikipedia</a></p>
        <p><a title="Una buona pagina per imparare a programmare"
            href="https://www.w3schools.com">W3schools</a></p>
        <p><a title="Se vuoi cercare gruppi di metal, allora questa è la tua enciclopedia"
            href="https://www.metal-archives.com">Encyclopaedia Metallum</a></p>
    </section>

    <span><?= $today ?></span>
</body>
</html>