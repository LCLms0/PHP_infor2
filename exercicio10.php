<!-- A Loja Mamão com Açúcar está vendendo seus produtos em 5 (cinco) prestações sem juros. Faça um algoritmo que
receba um valor de uma compra e mostre o valor das prestações. -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora PHP</title>
</head>
<body>
    <h2>Valor das prestações</h2>

    <form method="post">
        <input type="number" name="n1" placeholder="Digite o valor da compra" required>
        <button type="submit" name="enviar">Enviar</button>
    </form>

    <hr>


<?php
    if (isset($_POST['enviar'])) {
        $Valor = $_POST['n1'];

        // Cálculos
        $Prestação = $Valor / 5;
        

        echo "<h3>Resultado do valor das prestações: </h3>";
        echo "<table>
                <tr><td>Valor original:</td><td> R$ $Valor</td></tr>
                <tr><td>Valor das prestações:</td><td>R$ $Prestação</td></tr>
              </table>";
    }
?>