<?php
    function msg($periodo){
        $periodo = mb_strtolower($periodo, 'UTF-8');
        $saudacao = match ($periodo) {
            "manhã" => "Bom dia!",
            "tarde" => "Boa tarde!",
            "noite" => "Boa noite!",
            default => "Valor inválido",
        };
        echo "$saudacao <br>";
    }

    msg("MAnHÃ");
    msg("tARDe");
    msg("NOiTe");