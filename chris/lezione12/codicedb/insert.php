<?php
/**
 * Codice sorgente riportato nel libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2017, ISBN 978-88-481-3120-9
 * @see http://www.sviluppareinphp7.it
 */
require "connessionedb.php";

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $sql = 'INSERT INTO speakers (name, title, company, url, twitter) VALUES (:name, :title, :company, :url, :twitter)';
    $sth = $db->prepare($sql);
    $data = [
        ':name' => $_POST['name'],
        ':title' => $_POST['title'],
        ':company' => $_POST['company'],
        ':url' => $_POST['url'],
        ':twitter' => $_POST['twitter']
    ];
    if (! $sth->execute($data)) {
        throw new Exception(sprintf(
            "Error PDO exec: %s", implode(',', $db->errorInfo())
        ));
    }
    printf("Speaker added successfully!\n");
}
?>

<form method='post'>
    nome:<input type="text" name='name'><br>
    title:<input type="text" name='title'><br>
    company:<input type="text" name='company'><br>
    url:<input type="text" name='url'><br>
    twitter:<input type="text" name='twitter'><br>
    <input type="submit">
</form>
 
