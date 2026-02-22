<!-- O custo ao consumidor de um carro novo é a soma do custo de fábrica com a percentagem do distribuidor e dos
impostos (aplicados, primeiro os impostos sobre o custo de fábrica, e depois a percentagem do distribuidor sobre o
resultado). Supondo que a percentagem do distribuidor seja de 28% e os impostos 45%. Escrever um algoritmo que
leia o custo de fábrica de um carro e informe o custo ao consumidor do mesmo. -->



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora PHP</title>
</head>
<body>
    <h2>Valor de um carro novo</h2>

    <form method="post">
        <input type="number" name="n1" placeholder="Digite o valor de custo de fábrica" required>
        <button type="submit" name="enviar">Enviar</button>
    </form>

    <hr>


<?php
    if (isset($_POST['enviar'])) {
        $Fábrica = $_POST['n1'];
        $Imposto = 0.45;
        $Distribuidor = 0.28;

        // Cálculos
        $ValorIm = $Fábrica * $Imposto;
        $ValorDis = $ValorIm * $Distribuidor;
        $Consumidor = $Fábrica + $ValorIm + $ValorDis;

        

        echo "<h3>Resultado do valor do consumidor: </h3>";
        echo "<table>
                <tr><td>Valor de fábrica:</td><td> R$ $Fábrica</td></tr>
                <tr><td>Valor de venda ao consumidor:</td><td>R$ $Consumidor</td></tr>
              </table>";
    }
?>