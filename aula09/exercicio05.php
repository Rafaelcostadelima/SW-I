<?php
$cores = ["Laranja", "Preto", "Roxo"];
foreach($cores as $cor){
    echo "$cor <br>";
}
echo "<br>";
array_push($cores, "Amarelo");
foreach($cores as $cor){
    echo "$cor <br>";
}
echo "<br>";
array_shift($cores);
foreach($cores as $cor){
    echo "$cor <br>";
}