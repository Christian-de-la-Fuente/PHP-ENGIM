<?php
session_start();

$parole = ['cane', 'squalo', 'rana'];
$articoli = ['il', 'lo', 'la'];
$verbi = ['mangia', 'saluta', 'cavalca'];

// Funzione per stampare le parole, articoli e verbi
function stampaArray($array) {
    foreach ($array as $elemento) {
        echo "<span class='parola'>$elemento</span> ";
    }
}

// Inizializzazione della frase
$frase = isset($_SESSION['frase']) ? $_SESSION['frase'] : '';

// Se è stato cliccato un elemento, aggiungilo alla frase
if(isset($_GET['elemento'])) {
    $elemento = $_GET['elemento'];
    $frase .= ($frase ? ' ' : '') . $elemento;
    $_SESSION['frase'] = $frase;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Componi Frase</title>
<style>
.parola {
    cursor: pointer;
    text-decoration: underline;
}
</style>
</head>
<body>

<h2>Componi Frase</h2>

<!-- Visualizza parole, articoli e verbi -->
<p>
    <?php stampaArray($articoli); ?>
    <?php stampaArray($parole); ?>
    <?php stampaArray($verbi); ?>
</p>

<!-- Visualizza la frase composta -->
<p>Frase: <?php echo $frase; ?></p>

<script>
// Funzione per gestire il click sulla parola
document.querySelectorAll('.parola').forEach(item => {
    item.addEventListener('click', event => {
        var parola = event.target.textContent;
        window.location.href = 'frase.php?elemento=' + parola;
    });
});
</script>

</body>
</html>
