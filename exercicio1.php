<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora PHP</title>
</head>
<body>
    <h2>Somar Dois Números</h2>

    <form method="post">
        <input type="number" name="n1" placeholder="Primeiro número" required>
        <span> + </span>
        <input type="number" name="n2" placeholder="Segundo número" required>
        <button type="submit" name="calcular">Calcular</button>
    </form>

    <hr>

    <?php
    // Verifica se o formulário foi enviado via método POST
    if (isset($_POST['calcular'])) {
        // Captura os valores do formulário usando as chaves do atributo 'name'
        $num1 = $_POST['n1'];
        $num2 = $_POST['n2'];

        // Realiza o cálculo
        $soma = $num1 + $num2;

        // Exibe o resultado
        echo "<h3>Resultado: $num1 + $num2 = <strong>$soma</strong></h3>";
    }
    ?>
</body>
</html>
