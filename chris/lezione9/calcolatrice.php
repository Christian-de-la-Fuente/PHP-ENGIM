<?php

include "functions.php";

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    //var_dump($_REQUEST);

    if(!empty($_REQUEST['operazione']) && $_REQUEST['operazione'] == 'somma'){
        echo 'RISULTATO = ' . somma($_REQUEST['a'], $_REQUEST['b']);
    } elseif(!empty($_REQUEST['operazione']) && $_REQUEST['operazione'] == 'sottrazione'){
        echo 'RISULTATO = ' . sottrazione($_REQUEST['a'], $_REQUEST['b']);
    } elseif(!empty($_REQUEST['operazione']) && $_REQUEST['operazione'] == 'moltiplicazione'){
        echo 'RISULTATO = ' . moltiplicazione($_REQUEST['a'], $_REQUEST['b']);
    }
}

?>


<form action="calcolatrice.php" method="post">
    operazione
    <!-- <select name="operazione" id="">
        <option value="somma">SOMMA</option>
        <option value="sottrazione">SOTTRAZIONE</option>
    </select><br> -->
    <input type="radio" name="operazione" value="somma">somma
    <input type="radio" name="operazione" value="sottrazione">sottrazione
    <input type="radio" name="operazione" value="moltiplicazione">moltiplicazione

    <br>

    a<input type="text" name="a"><br>
    b<input type="text" name="b"><br>
    <input type="submit" value="invia">
</form>

