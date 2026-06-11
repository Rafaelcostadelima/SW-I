<?php

$temperaturas = [22.5, 24.0, 25.5, 23.0];

function calcularMediaTemperatura($listaDeTemperaturas){
    return "A temperatura média é de: " . (array_sum($listaDeTemperaturas))/count($listaDeTemperaturas);
}

echo calcularMediaTemperatura($temperaturas);