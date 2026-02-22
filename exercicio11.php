<!-- Faça um algoritmo que receba o preço de custo de um produto e mostre o valor de venda. Sabe-se que o preço de
custo receberá um acréscimo de acordo com um percentual informado pelo usuário. -->


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora PHP</title>
</head>
<body>
    <h2>Valor de custo e venda</h2>

    <form method="post">
        <input type="number" name="n1" placeholder="Digite o valor de custo" required>
        <input type="number" name="n2" placeholder="Digite o valor do percentual" required>
        <button type="submit" name="enviar">Enviar</button>
    </form>

    <hr>


<?php
    if (isset($_POST['enviar'])) {
        $Custo = $_POST['n1'];
        $Percentual = $_POST['n2'];

        // Cálculos
        $Valorper = $Custo * $Percentual;
        $Venda = $Custo + $Valorper;
        

        echo "<h3>Resultado do valor de venda: </h3>";
        echo "<table>
                <tr><td>Valor de custo:</td><td> R$ $Custo</td></tr>
                <tr><td>Valor de venda:</td><td>R$ $Venda</td></tr>
              </table>";
    }
?>
