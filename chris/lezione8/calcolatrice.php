<?php

function somma(int $a, int $b):int{
    return $a + $b;
}

function sottrazione(int $a, int $b):int{
    return $a - $b;
}

function moltiplicazione(int $a, int $b):int{
    return $a * $b;
}

//var_dump($_REQUEST);

if(!empty($_REQUEST['operazione']) && $_REQUEST['operazione'] == 'somma'){
    echo 'somma = ' . somma($_REQUEST['a'], $_REQUEST['b']);
} elseif(!empty($_REQUEST['operazione']) && $_REQUEST['operazione'] == 'sottrazione'){
    echo 'sottrazione = ' . sottrazione($_REQUEST['a'], $_REQUEST['b']);
} elseif(!empty($_REQUEST['operazione']) && $_REQUEST['operazione'] == 'moltiplicazione'){
    echo 'moltiplicazione = ' . moltiplicazione($_REQUEST['a'], $_REQUEST['b']);
}

