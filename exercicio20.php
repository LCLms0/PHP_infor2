

<?php
$veiculos = [
    ["valor" => 10000, "ano" => 1998],
    ["valor" => 20000, "ano" => 2005]
];
$totalAte2000 = 0;

foreach ($veiculos as $v) {
    $percentual = ($v['ano'] <= 2000) ? 0.12 : 0.07;
    $desconto = $v['valor'] * $percentual;
    $valorPago = $v['valor'] - $desconto;
    
    if ($v['ano'] <= 2000) $totalAte2000++;
    
    echo "Ano: " . $v['ano'] . " | Desconto: R$ $desconto | Valor a Pagar: R$ $valorPago\n";
}
echo "Total de carros até o ano 2000: $totalAte2000";
?>