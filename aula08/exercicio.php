<?php
    //Exercício 1
    $animais = ["Serpente", "Baleia", "Porco", "Cavalo", "Tartaruga"];
    foreach($animais as $animal){
        echo "$animal <br>";
    }
    echo "<hr>";

    //Exercício 2
    array_push($animais, "Axolote");
    foreach($animais as $animal) {
        echo "$animal <br>";
    }
    echo "<hr>";

    //Exercício 3
    $animais[1] = "Macaco";
    foreach($animais as $animal) {
        echo "$animal <br>";
    }
    echo "<hr>";

    //Exercício 4
    $numeros = [10, 8, 11, 34, 2, 3, 1, 9, 6, 20];
    $quantidade = count($numeros);
    $resultado = 0;
    for($i = 0; $i < $quantidade; $i++){
        $resultado = $resultado + $numeros[$i];
    }
    echo $resultado;
    echo "<hr>";

    //Exercício 5
    $dias_da_semana = ["Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado"];
    for($dia = 1; $dia < 6; $dia++){
        echo $dias_da_semana[$dia]. "<br>";
    }

    //Ou pode ser assim também
    echo "<br>";
    $dias_da_semana = ["Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado"];
    $dias_da_semana = array_slice($dias_da_semana, 1, 5);
    foreach($dias_da_semana as $dias_uteis){
        echo $dias_uteis . "<br>";
    }
