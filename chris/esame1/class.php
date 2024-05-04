<?php

include 'User.php';

$user = new User();

$user->setName('Christian');

$user->setSurname('de la Fuente');

echo $user->getName() . ' ';

echo $user->getSurname() . '<br>';

if(isset($_GET['action']) && $_GET['action'] === 'save') {
    $user->save();
}

?>



<form method="get" action="class.php">
    <input type="hidden" name="action" value="save">
    <input type="submit" value="Salva">
</form>

