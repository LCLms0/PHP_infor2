<!-- Ler uma temperatura em graus Celsius e apresentá-la convertida em graus Fahrenheit. A fórmula de conversão é:
F = C x 1,8 + 32, sendo F a temperatura em Fahrenheit e C a temperatura em Celsius. -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora PHP</title>
</head>
<body>
    <h2>Conversão de temperatura em Fahrenheit</h2>

    <form method="post">
        <input type="number" name="n1" placeholder="Temp. Celsius" required>
        <button type="submit" name="calcular">Calcular</button>
    </form>

    <hr>

<?php
    if (isset($_POST['calcular'])) {
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