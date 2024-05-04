<?php

function somma(int $a, int $b):int{
    return $a + $b;
}

//var_dump($_GET);
if(!empty($_GET['operazione']) && $_GET['operazione'] == 'somma'){
    echo 'somma = ' . somma($_GET['a'], $_GET['b']);
}

?>

<ul>
    <li><a href="input.php?operazione=somma&a=4&b=5">somma</a></li>
    <li><a href="input.php?q=secondo&a=1">secondo link</a></li>
    <li><a href="input.php?q=terzo&a=2&b=1">terzo link</a></li>
</ul>
