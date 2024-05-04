<?php

$animali = [
    "Ornitorinco",
    "Alce",
    "Tigre",
    "Foca",
    "Capibara",
    "Criceto",
    "Aquila",
    "Tapiro",
    "Celacanto",
    "Condor",
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ol>
        <?php

        foreach($animali as $animale){
            echo '<li>' . $animale . '</li>';
        }
        
        ?>
    </ol>
</body>
</html>