<?php
$numeros = [45, 34, 78, 2, 6, 1];
sort($numeros);
echo "Em ordem crescente fica: ";
foreach($numeros as $numero){
    echo "$numero ";
}
echo "<br>Em ordem decrescente fica: ";
rsort($numeros);
foreach($numeros as $numero){
    echo "$numero ";
}