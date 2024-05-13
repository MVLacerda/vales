<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
<?php
function calcularMedia($notas) {
    // Verifica se o array de notas não está vazio
    if (!empty($notas)) {
        // Calcula a soma das notas
        $soma = array_sum($notas);
        
        // Calcula a quantidade de notas
        $quantidade = count($notas);
        
        // Calcula a média
        $media = $soma / $quantidade;
        
        // Retorna a média
        return $media;
    } else {
        // Retorna mensagem de erro se o array de notas estiver vazio
        return "Nenhuma nota foi fornecida.";
    }
}

// Exemplo de uso da função
$notas = array(7.5, 8.0, 9.5, 6.0, 7.0);
echo "A média das notas é: " . calcularMedia($notas);
?>
    <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ex et officia velit ab natus saepe distinctio, doloribus corrupti provident tempora repellendus quasi sit enim autem dolorem voluptatem blanditiis illo eligendi.</p>
    <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia ratione laborum rerum omnis ab! Vero sunt deleniti quo dolore molestiae, praesentium nobis iste architecto, pariatur eius dignissimos quod voluptatum quasi.</P>


</body>
</html>