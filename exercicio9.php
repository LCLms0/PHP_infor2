<!-- Faça um algoritmo que receba um valor que foi depositado e exiba o valor com rendimento após um mês.
 Considere fixo o juro da poupança em 0,70% a. m. -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora PHP</title>
</head>
<body>
    <h2>Rendimento da Poupança</h2>

    <form method="post">
        <input type="number" name="n1" placeholder="Digite o valor depositado" required>
        <button type="submit" name="enviar">Enviar</button>
    </form>

    <hr>


<?php
    if (isset($_POST['enviar'])) {
        $Deposito = $_POST['n1'];
        $Juros = 0.007;

        // Cálculos
        $Rendimento = $Deposito * $Juros;
        $Valorfinal = $Deposito + $Rendimento;
        

        echo "<h3>Resultado do valor com rendimento: </h3>";
        echo "<table>
                <tr><td>Valor original:</td><td> R$ $Deposito</td></tr>
                <tr><td>Rendimento:</td><td>$Juros a.m</td></tr>
                <tr><td>Valor final:</td><td>R$ $Valorfinal</td></tr>
              </table>";
    }
    ?>
