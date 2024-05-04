<?php

$nome = "Christian";
$cognome = "de la Fuente";
$emails = [
    "christian.delafuente@gmail.com",
    "christian.delafuente@engimtorino.net"
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
    <table>
        <tr>
            <th>Nome</th>
            <th>Cognome</th>
            <th>Emails</th>
        </tr>
        <tr>
            <td><?= $nome ?></td>
            <td><?= $cognome ?></td>
            <td>
                <?php

                foreach($emails as $email){
                    echo $email . '<br>';
                }

                ?>
            </td>
        </tr>
    </table>
</body>
</html>