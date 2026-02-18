<!-- Escrever um algoritmo que leia o nome de um aluno e as notas das três provas que ele obteve no semestre. No final
informar o nome do aluno e a sua média (aritmética). -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora PHP</title>
</head>
<body>
    <h2>Média de um aluno</h2>

    <form method="post">
        <input type="text" name="no" placeholder="Nome do aluno" required>
        <input type="number" name="n1" placeholder="1° Nota" required>
        <input type="number" name="n2" placeholder="2° Nota" required>
        <input type="number" name="n3" placeholder="3° Nota" required>
        <button type="submit" name="calcular">Enviar</button>
    </form>

    <hr>


<?php
    if (isset($_POST['calcular'])) {
        $nome = $_POST['no'];
        $nota1 = $_POST['n1'];
        $nota2 = $_POST['n2'];
        $nota3 = $_POST['n3'];

        // Cálculos
        $media = $nota1 + $nota2 + $nota3;
        $media1 = $media / 3;
        

        echo "<h3>Resultado do aluno: </h3>";
        echo "<table>
                <tr><td>Nome do aluno:</td><td>$nome</td></tr>
                <tr><td>Média:</td><td>$media1</td></tr>
              </table>";
    }
    ?>