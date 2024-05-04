<?php

$page = file_get_contents("https://www.elmundotoday.com/2024/03/sanidad-advierte-de-que-llega-la-primavera-y-recomienda-cerrar-las-ventanas-para-no-oir-las-molestas-quejas-de-los-alergicos/");

// echo $page;

file_put_contents("dati/lastampa.html", $page);

$image = file_get_contents("https://m.media-amazon.com/images/I/51tEXq0ZDcL._AC_UF1000,1000_QL80_.jpg");
file_put_contents("dati/spooderman.jpg", $image);
