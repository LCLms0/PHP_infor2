

<?php
$pessoas = [
    ["nome" => "Ana", "sexo" => "F"],
    ["nome" => "Beto", "sexo" => "M"],
    ["nome" => "Clara", "sexo" => "F"]
];
$totalM = 0; $totalF = 0;

foreach ($pessoas as $p) {
    echo "Nome: " . $p['nome'] . " | Sexo: " . ($p['sexo'] == "M" ? "Homem" : "Mulher") . "\n";
    if ($p['sexo'] == "M") $totalM++;
    else $totalF++;
}
echo "Total de Homens: $totalM | Total de Mulheres: $totalF";
?>