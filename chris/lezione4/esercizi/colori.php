<?php

$colori = [
    ["Giallo", "Felicità"],
    ["Blu", "Tranquilità"],
    ["Rosso", "Passione"],
    ["Bianco", "Felicità"],
    ["Nero", "Felicità"],
    ["Verde", "Speranza"]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .border{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    
    <table class="border">

        <?php

        foreach($colori as $colore){
            echo '<tr>';
            for($i = 0; $i < count($colore); $i++){
                echo '<td class="border">' . $colore[$i] . '</td>';
            };
            echo '</tr>';
        }

        ?>

    </table>
</body>
</html>