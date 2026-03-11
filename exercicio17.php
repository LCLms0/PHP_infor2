
<?php
$numeros = [5, 12, 50, 150, 200, 10, 80];
$totalNoIntervalo = 0;

foreach ($numeros as $n) {
    if ($n >= 10 && $n <= 150) {
        $totalNoIntervalo++;
    }
}
echo "Quantidade de números no intervalo [10, 150]: $totalNoIntervalo";
?>