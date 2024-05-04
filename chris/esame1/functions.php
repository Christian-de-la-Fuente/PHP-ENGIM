<?php




function massimo(int $num1, int $num2){
    $max = 0;
    if($num1 > $num2){
        $max = $num1;
    }else{
        $max = $num2;
    }
    return 'Il numero più grande è: ' . $max;
}

function minimo(int $num1, int $num2){
    $min = 0;
    if($num1 < $num2){
        $min = $num1;
    }else{
        $min = $num2;
    }
    return 'Il numero più piccolo è: ' . $min;
}

function media(int $num1, int $num2){
    $avg = ($num1 + $num2) / 2;
    return 'La media è: ' . $avg;
}

