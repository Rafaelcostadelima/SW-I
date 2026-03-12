<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processa dados</title>
</head>
<body>
    
    <?php
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $idade = $_POST['idade'];
        $ano_atual = date('Y');
        $datanascimento = $ano_atual - $idade;
        $dia_atual = date('D');
        switch ($dia_atual){
            case "Mon":
                echo "Segunda-feira";
                break;
            case "Tue":
                echo "Terça-feira";
                break;
            case "Wed":
                echo "Quarta-feira";
                break;
            case "Thu":
                echo "Quinta-feira";
                break;
            case "Fri":
                echo "Sexta-feira";
                break;
            case "Sat":
                echo "Sábado";
                break;
            case "Sun":
                echo "Domingo";
                break;
            default:
                echo "Falha ao ler o dia da semana.";
                break;
        }
        //echo "O nome é: $nome";
    ?>

    <p>O nome digitado é: <?php echo $nome;?></p>
    <p>O email digitado é: <?php echo $email;?></p>
    <p>A idade digitado é: <?php echo $idade;?></p>
    <p>O seu ano de nascimento é: <?php echo $datanascimento;?></p>
</body>
</html>