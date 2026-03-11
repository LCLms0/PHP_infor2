

<?php
$idades = [15, 22, 18, 12, 40];
foreach ($idades as $indice => $idade) {
    $status = ($idade >= 18) ? "maior de idade" : "menor de idade";
    echo "Pessoa " . ($indice + 1) . ": $status ($idade anos)\n";
}
?>