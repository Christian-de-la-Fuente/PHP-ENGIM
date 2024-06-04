<?php

require "connessionedb.php";

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(!empty($_REQUEST['tipo']) && $_REQUEST['tipo'] == 'offerta'){
        $sql = 'INSERT INTO offerta (PREZZO) VALUES (:prezzo)';
        $sth = $db->prepare($sql);
        $data = [
            ':prezzo' => $_POST['prezzo']
        ];
        if (! $sth->execute($data)) {
            throw new Exception(sprintf(
                "Error PDO exec: %s", implode(',', $db->errorInfo())
            ));
        }
        echo "scrittura completata\n";
    } elseif(!empty($_REQUEST['tipo']) && $_REQUEST['tipo'] == 'domanda'){
        $sql = 'INSERT INTO domanda (PREZZO) VALUES (:prezzo)';
        $sth = $db->prepare($sql);
        $data = [
            ':prezzo' => $_POST['prezzo']
        ];
        if (! $sth->execute($data)) {
            throw new Exception(sprintf(
                "Error PDO exec: %s", implode(',', $db->errorInfo())
            ));
        }
        echo "scrittura completata\n";
    }
    
}

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
    <h1>Inserire Offerta o Domanda</h1>
    <form action="" method="post">
        <label for="">Prezzo Unitario</label><br>
        <input type="text" name="prezzo"><br>
        <input type="checkbox" name="tipo" value="offerta">
        <label for="">Offerta</label>
        <input type="checkbox" name="tipo" value="domanda">
        <label for="">Domanda</label><br>
        <button type="submit">Invia</button>
    </form><br>
</body>
</html>