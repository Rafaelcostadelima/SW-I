<?php
    $frutas = ["Banana", "Maçã", "Laranja", "Abacaxi", "Pêssego"];

    // echo "<br>" . $frutas;  <----- dá erro
    // echo "<br>" . $frutas[0]; <--- dá certo

    // foreach ($frutas as $indice => $valor) {
    //     echo "Índice: $indice ==> $valor <br>";
    // };

    // foreach ($frutas as $fruta) {
    //     echo "Fruta: $fruta <br>";
    // };

    // $quantidade = count($frutas);
    // for ($i = 0; $i < $quantidade; $i++){
    //     echo $frutas[$i] . "<br>";
    // };

    $animais = ["Gato", "Papagaio", "Cachorro"];

    foreach ($animais as $indice => $animal) {
        echo "Índice: $indice => $animal <br>";
    };

    echo "<hr>";
    $animais[] = "Peixe";

    foreach ($animais as $indice => $animal) {
        echo "Índice: $indice => $animal <br>";
    };

    echo "<hr>";
    $animais[1] = "Tartaruga";

    foreach ($animais as $indice => $animal) {
        echo "Índice: $indice => $animal <br>";
    };

    echo "<hr>";
    array_push($animais, "Axolote");

    foreach ($animais as $indice => $animal) {
        echo "Índice: $indice => $animal <br>";
    };

    echo "<hr>";
    array_pop($animais);

    foreach ($animais as $indice => $animal) {
        echo "Índice: $indice => $animal <br>";
    };

    echo "<hr>";
    array_unshift($animais, "Baleia", "Porco");

    foreach ($animais as $indice => $animal) {
        echo "Índice: $indice => $animal <br>";
    };