<?php
$notas = [0, 5, 5, 10];
$media = array_sum($notas)/count($notas);
foreach($notas as $nota){
    echo "$nota <br>";
}
echo "<br>";
echo "Com essas notas, a média é de $media.";