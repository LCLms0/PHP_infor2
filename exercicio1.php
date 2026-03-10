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
    if (isset($_POST['calcular'])) {
     
        $num1 = $_POST['n1'];
        $num2 = $_POST['n2'];

        $soma = $num1 + $num2;


        echo "<h3>Resultado: $num1 + $num2 = <strong>$soma</strong></h3>";
    }
    ?>
</body>
</html>
