<?php

require "connessionedb.php";

function getOfferte($db) {
    $sql = 'SELECT PREZZO FROM offerta';
    $sth = $db->prepare($sql);
    $data = [];
    if (! $sth->execute($data)) {
        throw new Exception(sprintf(
            "Error PDO exec: %s", implode(',', $db->errorInfo())
        ));
    }
    $result = $sth->fetchAll(PDO::FETCH_OBJ);
    //var_dump($result);
    return $result;
}

function getDomande($db) {
    $sql = 'SELECT PREZZO FROM domanda';
    $sth = $db->prepare($sql);
    $data = [];
    if (! $sth->execute($data)) {
        throw new Exception(sprintf(
            "Error PDO exec: %s", implode(',', $db->errorInfo())
        ));
    }
    $result = $sth->fetchAll(PDO::FETCH_OBJ);
    //var_dump($result);
    return $result;
}

$offerte = getOfferte($db);

$domande = getDomande($db);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        th,td {
            border: 1px solid black;
        }
        table {
            border: solid black 1px;
            border-collapse: collapse;
            table-layout: auto;
            height: 100%;
            width: 300px;
        }
        .cell {
            border: solid black 1px;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: stretch;
        }
    </style>
</head>
<body>
    <div class="container">
        <div>
            <h2>Offerta</h2>
            <table>
                <tr>
                    <th>QTA</th>
                    <th>PREZZO</th>
                </tr>
                <?php

                    foreach($offerte as $offerta){
                        echo '<tr>';
                        echo '<td>1</td>';
                        echo '<td>' . $offerta->PREZZO . '</td>';
                        echo '</tr>';
                    }

                    ?>
            </table>
        </div>
        <div>
            <h2>Domanda</h2>
            <table>
                <tr>
                    <th>QTA</th>
                    <th>PREZZO</th>
                </tr>
                <?php

                    foreach($domande as $domanda){
                        echo '<tr>';
                        echo '<td>1</td>';
                        echo '<td>' . $domanda->PREZZO . '</td>';
                        echo '</tr>';
                    }

                    ?>
            </table>
        </div>
    </div>
</body>
</html>