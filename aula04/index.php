<?php
    $a = 10;
    $b = "10";

    //Declara a variável resultado em comparação entre as variáveis $a e $b em questão de valores brutos, logo, verdadeiro
    $resultado = ($a == $b);
    //Mostra o resultado dizendo que é verdadeiro (1)
    echo "Resultado de 10 é igual a '10' = $resultado";
    echo "<br>";

    //Aqui está o IF e ELSE para mostrar ao usuário, de forma mais clara e explícita a TODOS que verem o programa
    if ($resultado){
        echo "Resultado de 10 é igual a '10' = verdadeiro.";
    } else {
        echo "Resultado de 10 é igual a '10' = falso";
    }

    echo "<br>";
    echo "<br>";
    
    //Declara a variável resultado em comparação entre as variáveis $a e $b em questão de tipos da variável e de valores brutos, logo, falso. 10 é igual a "10", mas o primeiro é número inteiro, o outro é um número DENTRO de uma string
    $resultado = ($a === $b);
    echo "Resultado de 10 é idêntico a '10' = $resultado";
    echo "<br>";

    //Aqui está o IF e ELSE para mostrar ao usuário, de forma mais clara e explícita a TODOS que verem o programa
    if ($resultado){
        echo "Resultado de 10 é idêntico a '10' = verdadeiro.";
    } else {
        echo "Resultado de 10 é idêntico a '10' = falso";
    }
?>