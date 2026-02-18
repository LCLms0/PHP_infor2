<!-- Elaborar um algoritmo que efetue a apresentação do valor da conversão em real (R$) de um valor lido em dólar (US$).
O algoritmo deverá solicitar o valor da cotação do dólar e também a quantidade de dólares disponíveis com o usuário. -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora PHP</title>
</head>
<body>
    <h2>Conversão de Dólar para Real</h2>

    <form method="post">
        <input type="number" name="n1" placeholder="Cotação do dólar" required>
        <input type="number" name="n2" placeholder="Quantidade de dólares disponíveis" required>
        <button type="submit" name="enviar">Enviar</button>
    </form>

    <hr>

<?php
    if (isset($_POST['enviar'])) {
        $Celsius = $_POST['n1'];
        $Celsius = $_POST['n1'];

        // Cálculos
        $Fahrenheit = $Celsius * 1.8 + 32;
        

        echo "<h3>Resultado da conversão: </h3>";
        echo "<table>
                <tr><td>Temperatura em Celsius:</td><td>$Celsius °C</td></tr>
                <tr><td>Temperatura em Fahrenheit:</td><td>$Fahrenheit °F</td></tr>
              </table>";
    }
    ?>