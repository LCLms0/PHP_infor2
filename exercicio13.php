<!-- Faça um algoritmo que receba um número e mostre uma mensagem caso este número seja maior que 10. -->


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora PHP</title>
</head>
<body>
    <h2>Valor 10</h2>

    <form method="post">
        <input type="number" name="n1" placeholder="Digite o valor" required>
        <button type="submit" name="enviar">Enviar</button>
    </form>

    <hr>




<?php
    if (isset($_POST['enviar'])) 
// 1. Definimos o número (pode vir de um formulário, URL ou banco de dados)
$numero = $_POST['n1']; // Altere este valor para testar

// 2. Estrutura condicional
if ($numero > 10) {
    // 3. Mensagem exibida apenas se a condição for verdadeira
    echo "O número informado ($numero) é maior que 10!";
}

// Opcional: caso queira mostrar algo quando NÃO for maior que 10
else {
    echo "O número informado ($numero) não é maior que 10.";
}
?>