<!-- Ler dois valores para as variáveis A e B, e efetuar as trocas dos valores de forma que a variável A passe a possuir o
valor da variável B e a variável B passe a possuir o valor da variável A. Apresentar os valores trocados.
 -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora PHP</title>
</head>
<body>
    <h2>Troca dos valores</h2>

    <form method="post">
        <input type="text" name="ValA" placeholder="Valor A" required>
        <input type="number" name="ValB" placeholder="Valor B" required>
        <button type="submit" name="trocar">Efetuar troca</button>
    </form>

    <hr>


<?php
    if (isset($_POST['trocar'])) {
        $A = $_POST['ValA'];
        $B = $_POST['ValB'];

        // Exibir antes da troca
        echo "Antes da Troca: ";
        echo "A = $A | B = $B";

        // Troca
        $aux = $A;
        $A = $B;
        $B = $aux;
        
        // Exibir depois da troca
        echo "<h3>Resultado da troca: </h3>";
        echo "<table>
                <tr><td>Troca:</td><td>A = $A | B = $B</td></tr>
              </table>";
    }
    ?>