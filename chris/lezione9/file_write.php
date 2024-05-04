<?php

$filename = 'dati/file.txt';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $testo = $_POST['testo'] ?? '';

    file_put_contents($filename, $testo);

    echo "scrittura completata";

}


$testo = file_get_contents($filename);

?>



<h2>Gestione del contenuto di file.txt</h2>
<form method="post">

    <textarea name="testo" cols="80" rows="10"><?= $testo ?></textarea><br>

    <input type="submit">
</form>