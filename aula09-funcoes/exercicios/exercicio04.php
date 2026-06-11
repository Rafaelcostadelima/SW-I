<?php

function verificarAcesso($senhaDigitada){
    if ($senhaDigitada == "123456"){
        return "Acesso liberado.<br>";
    } else {
        return "Acesso negado. <br>";
    }
}

echo verificarAcesso("123456");
echo verificarAcesso("Senha teste");