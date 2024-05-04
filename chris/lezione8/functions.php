<?php
declare(strict_types = 1);

/* function somma(int $a, int $b):int{
    return $a + $b;
}
$c = somma(4, 5) . '<br>';

echo $c;
echo somma('3', '5') . '<br>';  */

/* function average(array $values){
    $tot = 0;
    foreach($values as $num){
        $tot += $num;
    }
    return $tot / count($values);
}

$media = average([2, 4, 9]);
echo $media; */

/* function foo(&$param){
    $param = 4;
    echo $param;
}

$a = 3;
foo($a);
echo $a; */

/* $colors_of_fruits = [
    'banana' => 'giallo',
    'mela' => 'rossa',
    'pera' => 'verde'
];

foreach($colors_of_fruits as $fruit => &$color){
    if($color == 'rossa'){
        $color = 'rosso';
    }

    echo 'frutto: ' . $fruit . ', colore: ' . $color . '<br>';
}

var_dump($colors_of_fruits); */



// dato un array di numeri di telefono senza prefisso
/* $phone_numbers = [
    'Mike' => '123456',
    'Tony' => '011654321',
    'Jordan' => '914762'
]; */

// scrivere un funzione add_prefix che ricevendo l'array di cui sopra
// verifica la lunghezza del numero telefonico
// allora si mette il prefisso 011
// la funzione restituisce l'array modificato

/* function add_prefix(array $numbers){
    $arr = [];
    foreach($numbers as $name => $phone){
        if(strlen($phone) === 6){
            $numbers[$name] = '011' . $phone;
            $arr[] = $number;
        }else{
            $arr[] = $number;
        }
    }
    return $numbers;
}

$phone_numbers = add_prefix($phone_numbers);
var_dump($phone_numbers); */

function init(int $value, array $options = []){
    
}
