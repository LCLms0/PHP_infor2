<!-- Escrever um algoritmo que leia o nome de um vendedor, o seu salário fixo e o total de vendas efetuadas por ele no
mês (em dinheiro). Sabendo que este vendedor ganha 15% de comissão sobre suas vendas efetuadas, informar o
seu nome, o salário fixo e salário no final do mês. -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora PHP</title>
</head>
<body>
    <h2>Vendas de um vendedor</h2>

    <form method="post">
        <input type="text" name="n1" placeholder="Nome do vendedor" required>
        <input type="number" name="n2" placeholder="Salário fixo" required>
        <input type="number" name="n3" placeholder="Total de vendas no mês" required>
        <button type="submit" name="calcular">Enviar</button>
    </form>

    <hr>

<?php
    if (isset($_POST['calcular'])) {
        $nome = $_POST['n1'];
        $fixo = $_POST['n2'];
        $vendas = $_POST['n3'];

        // Cálculos
        $porcentagem = 0.15;
        $comissão =  $porcentagem * $vendas;
        $salariofinal = $fixo + $comissão;
        

        echo "<h3>Resultado do vendedor: </h3>";
        echo "<table>
                <tr><td>Nome:</td><td>$nome</td></tr>
                <tr><td>Salário fixo:</td><td>R$ $fixo</td></tr>
                <tr><td>Salário final:</td><td>R$ $salariofinal</td></tr>
              </table>";
    }
    ?>