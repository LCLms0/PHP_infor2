

<?php
$nome = "Bernardo";
$n1 = 6.0; $n2 = 5.5; $n3 = 7.0;
$media = ($n1 + $n2 + $n3) / 3;

echo "Aluno: $nome | Média: " . number_format($media, 1) . "\n";
if ($media >= 7) {
    echo "Situação: Aprovado";
} elseif ($media <= 5) {
    echo "Situação: Reprovado";
} else {
    echo "Situação: Recuperação";
}
?>