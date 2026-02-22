<!-- Escrever um algoritmo que leia dois valores inteiro distintos e informe qual é o maior. -->




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Comparador de Números</title>
</head>
<body>
    <h2>Descubra qual número é o maior</h2>
    
    <form method="POST" action="">
        <label for="num1">Primeiro valor:</label>
        <input type="number" name="num1" id="num1" required>
        <br><br>
        
        <label for="num2">Segundo valor:</label>
        <input type="number" name="num2" id="num2" required>
        <br><br>
        
        <button type="submit">Comparar</button>
    </form>

    <hr>

    <?php
    // Verifica se o formulário foi enviado via método POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // Coleta os valores e garante que sejam inteiros
        $n1 = (int)$_POST['num1'];
        $n2 = (int)$_POST['num2'];

        // Lógica de Comparação
        if ($n1 > $n2) {
            echo "<h3>O primeiro valor ($n1) é maior que o segundo ($n2).</h3>";
        } 
        elseif ($n2 > $n1) {
            echo "<h3>O segundo valor ($n2) é maior que o primeiro ($n1).</h3>";
        } 
        else {
            echo "<h3>Atenção: Os valores informados são iguais! Digite valores distintos.</h3>";
        }
    }
    ?>
</body>
</html>