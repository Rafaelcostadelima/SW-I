<?php
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // email: adm@gmail.com
    // senha: 1234

    if ($email == 'adm@gmail.com' && $senha == '1234') {
        // Vamos para a página restrita...
        // echo "Vamos para a página restrita...";
        $nome = "Rafael";
        header('Location: restrita.php?nome='.$nome);
        exit;

    } else {
        // Volte para o formulário
        // echo "Volte para o formulário";
        echo "<script>
                alert('Email ou senha incorretos...')
                window.location.href = 'formulario.php';
             </script>";
        exit;
    }
?>
