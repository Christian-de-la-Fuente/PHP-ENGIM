<?php

$filename = 'data/data.txt';

if (!file_exists($filename)) {
    touch($filename);
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $testo = $_POST['testo'] ?? '';

    file_put_contents($filename, $testo);

    echo "scrittura completata";

}


// $testo = file_get_contents($filename);

?>



<h2>Form</h2>
<form method="post">

    <textarea name="testo" cols="80" rows="10"><?= $testo ?></textarea><br>

    <input type="submit">
</form>