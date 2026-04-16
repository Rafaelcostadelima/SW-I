<?php
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    

    if ($email == "adm@gmail.com" && $senha == "1234") {
        $username = $_POST["username"];
        header('Location: restrita.php?username='. $username);
        exit;

    } else {
        header('Location: erro.php');
        exit;
    }
?>