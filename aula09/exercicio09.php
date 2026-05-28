<?php
$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$pares = [];
foreach($numeros as $numero){
    if ($numero %2 == 0){
        array_push($pares, $numero);
    }
}
foreach($pares as $numero){
    echo "$numero <br>";
}