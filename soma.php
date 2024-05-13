<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Soma</title>
</head>
<body>
    <h2>Resultado da Soma</h2>
    <?php
        // Verifica se os campos foram preenchidos
        if(isset($_POST['numero1']) && isset($_POST['numero2'])) {
            // Recebe os números do formulário
            $numero1 = $_POST['numero1'];
            $numero2 = $_POST['numero2'];
            
            // Calcula a soma
            $soma = $numero1 + $numero2;
            
            // Exibe o resultado
            echo "A soma de $numero1 e $numero2 é: $soma";
        } else {
            echo "Por favor, preencha ambos os campos.";
        }
    ?>
</body>
</html>
