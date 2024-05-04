<?php

session_start();

if (!isset($_SESSION['contatore'])){
    $_SESSION['contatore'] = 1;
}

echo 'hai visto questa pagina ' . $_SESSION['contatore'] . ' volte';

$_SESSION['contatore']++;