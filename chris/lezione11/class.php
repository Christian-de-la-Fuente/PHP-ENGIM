<?php

include 'user.php';
include 'calcoli.php';
include 'utility.php';

$user1 = new User();

$user1->setName('Carl');

echo $user1->getName();

// questo da errore
// echo $user1->name

echo '<hr>';

$operazioni = new Calcolo(5, 3);

$massimo = $operazioni->massimo();

echo $massimo;

echo '<hr>';

$update = $operazioni->update(10, 5);

$massimo = $operazioni->massimo();

echo $massimo;

echo '<hr>';

echo Utility::listItems(['cane', 'gatto']);