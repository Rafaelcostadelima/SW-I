<?php
$nomes = ["Ramos", "Enzo", "Carlos"];
foreach($nomes as $nome){
    echo $nome . "<br>";
}
if (in_array("Carlos", $nomes)){
    echo "Sim, existe o nome 'Carlos' na lista.";
} else {
    echo "Não, não existe o nome 'Carlos' na lista.";
}
echo "<br><br>";
$nomes = ["Ramos", "Enzo", "Rafael"];
foreach($nomes as $nome){
    echo $nome . "<br>";
}
if (in_array("Carlos", $nomes)){
    echo "Sim, existe o nome 'Carlos' na lista.";
} else {
    echo "Não, não existe o nome 'Carlos' na lista.";
}