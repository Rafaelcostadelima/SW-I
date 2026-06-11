<?php

function calcularAutonomia($capacidadeBateria, $consumoPorMinuto){
    $resultado = $capacidadeBateria / $consumoPorMinuto;
    return "Tempo estimado de voo: $resultado minutos.";
}

echo calcularAutonomia(100, 0.1);