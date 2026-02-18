<!-- Escrever um algoritmo para determinar o consumo médio de um automóvel sendo fornecida a distância total
percorrida pelo automóvel e o total de combustível gasto. -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora PHP</title>
</head>
<body>
    <h2>Consumo médio</h2>

    <form method="post">
        <input type="number" name="n1" placeholder="Distância em KM" required>
        <input type="number" name="n2" placeholder="Combustível gasto em L" required>
        <button type="submit" name="calcular">Calcular</button>
    </form>

    <hr>

    
<?php
    if (isset($_POST['calcular'])) {
        $km = $_POST['n1'];
        $l = $_POST['n2'];

        // Cálculos
        $consumo   = $km / $l;
        
        // Verificação para divisão por zero
        $divisao = ($l != 0) ? ($km / $l) : "Erro (Divisão por zero)";

        echo "<h3>Resultado do consumo médio: </h3>";
        echo "<table>
                <tr><td>Consumo:</td><td>$consumo KM/L</td></tr>
              </table>";
    }
    ?>