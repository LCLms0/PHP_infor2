<!-- Faça um algoritmo que receba um número e diga se este número está no intervalo entre 100 e 200. -->




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Verificador de Intervalo</title>
</head>
<body>
    <h2>O número está entre 100 e 200?</h2>
    
    <form method="POST" action="">
        <input type="number" name="valor" placeholder="Digite um número" required>
        <button type="submit">Verificar</button>
    </form>

    <hr>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = (int)$_POST['valor'];

        // Lógica de intervalo: inclusivo (inclui o 100 e o 200)
        if ($numero >= 100 && $numero <= 200) {
            echo "<h3 style='color: green;'>O número $numero ESTÁ no intervalo entre 100 e 200.</h3>";
        } else {
            echo "<h3 style='color: red;'>O número $numero NÃO está no intervalo entre 100 e 200.</h3>";
        }
    }
    ?>
</body>
</html>