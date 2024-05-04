<?php

include 'Employer.php';

$user = new Employer();

$user->setName('John');

$user->setSurname('Doe');

echo $user->getName() . ' ';

echo $user->getSurname() . '<br>';

$user->promotion();

echo $user->getSalary();


