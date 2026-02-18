<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora PHP</title>
</head>
<body>
    <h2>Dois Números</h2>

    <form method="post">
        <input type="number" name="n1" placeholder="Primeiro número" required>
        <span> + - * / </span>
        <input type="number" name="n2" placeholder="Segundo número" required>
        <button type="submit" name="calcular">Calcular</button>
    </form>

    <hr>

    <?php
    if (isset($_POST['calcular'])) {
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];

        // Cálculos
        $soma          = $n1 + $n2;
        $subtracao     = $n1 - $n2;
        $multiplicacao = $n1 * $n2;
        
        // Verificação para divisão por zero
        $divisao = ($n2 != 0) ? ($n1 / $n2) : "Erro (Divisão por zero)";

        echo "<h3>Resultados para $n1 e $n2:</h3>";
        echo "<table>
                <tr><th>Operação</th><th>Resultado</th></tr>
                <tr><td>Soma</td><td>$soma</td></tr>
                <tr><td>Subtração</td><td>$subtracao</td></tr>
                <tr><td>Multiplicação</td><td>$multiplicacao</td></tr>
                <tr><td>Divisão</td><td>$divisao</td></tr>
              </table>";
    }
    ?>
</body>
</html>
