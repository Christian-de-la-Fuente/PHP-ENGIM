<?php

date_default_timezone_set('CET');

$minuto = date("i");

echo date('H:i');

echo '<br>';

switch($minuto % 5){
    case 1:
        printf("mmm, siamo proprio all’inizio del settore dei 5 minuti");
        break;
    case 2:
        printf("mmm, siamo già un poco avanti nella nostra marcia verso il minuto 5");
        break;
    case 3:
        printf("mmm, abbiamo superato la metà");
        break;
    case 4:
        printf("mmm, quasi alla fine");
        break;
    case 0:
        printf("mmm, abbiamo praticamente finito!");
        break;
}