<!-- Q16 -->


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

<!-- Q17 -->


<?php
$numeros = [5, 12, 50, 150, 200, 10, 80]; // Simulação de entrada
$totalNoIntervalo = 0;

foreach ($numeros as $n) {
    if ($n >= 10 && $n <= 150) {
        $totalNoIntervalo++;
    }
}
echo "Quantidade de números no intervalo [10, 150]: $totalNoIntervalo";
?>

<!-- Q18 -->

<?php
$idades = [15, 22, 18, 12, 40]; // Simulação de idades
foreach ($idades as $indice => $idade) {
    $status = ($idade >= 18) ? "maior de idade" : "menor de idade";
    echo "Pessoa " . ($indice + 1) . ": $status ($idade anos)\n";
}
?>

<!-- Q19 -->

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

<!-- Q20 -->

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

<!-- Q21 -->

<?php
$pessoas = [
    ["nome" => "João", "sexo" => "M", "idade" => 18, "saude" => "boa"],
    ["nome" => "Maria", "sexo" => "F", "idade" => 19, "saude" => "boa"],
    ["nome" => "José", "sexo" => "M", "idade" => 17, "saude" => "regular"]
];

$aptos = 0; $inaptos = 0;

foreach ($pessoas as $p) {
    // Critério hipotético: Homem, >= 18 anos e saúde boa
    if ($p['sexo'] == "M" && $p['idade'] >= 18 && $p['saude'] == "boa") {
        echo $p['nome'] . " está APTO.\n";
        $aptos++;
    } else {
        echo $p['nome'] . " está INAPTO.\n";
        $inaptos++;
    }
}
echo "Total Aptos: $aptos | Total Inaptos: $inaptos\n";
?>

<!-- Q22 -->

<?php
$produtos = [
    ["custo" => 50, "venda" => 70], // Lucro
    ["custo" => 100, "venda" => 80], // Prejuízo
    ["custo" => 30, "venda" => 30]  // Empate
];

$somaCusto = 0; $somaVenda = 0;

foreach ($produtos as $p) {
    $somaCusto += $p['custo'];
    $somaVenda += $p['venda'];

    if ($p['venda'] > $p['custo']) echo "Lucro\n";
    elseif ($p['venda'] < $p['custo']) echo "Prejuízo\n";
    else echo "Empate\n";
}

echo "Média Custo: " . ($somaCusto / count($produtos)) . "\n";
echo "Média Venda: " . ($somaVenda / count($produtos)) . "\n";
?>

<!-- Q23 -->

<?php
$num = 40;
if ($num > 80) echo "Número maior que 80";
elseif ($num < 25) echo "Número menor que 25";
elseif ($num == 40) echo "Número é igual a 40";
?>

<!-- Q24 -->

<?php
$numeros = [10, -5, 0, 22];
foreach ($numeros as $n) {
    if ($n > 0) echo "$n é Positivo\n";
    elseif ($n < 0) echo "$n é Negativo\n";
    else echo "$n é Zero\n";
}
?>

<!-- Q25 -->

<?php
$n1 = 15; $n2 = 20;
if ($n1 == $n2) {
    echo "Os números são iguais.";
} else {
    echo "São diferentes. O maior é: " . ($n1 > $n2 ? $n1 : $n2);
}
?>

<!-- Q26 -->

<?php
$num = 3;
switch ($num) {
    case 1: echo "Um"; break;
    case 2: echo "Dois"; break;
    case 3: echo "Três"; break;
    case 4: echo "Quatro"; break;
    case 5: echo "Cinco"; break;
    default: echo "Número inválido";
}
?>

<!-- Q27 -->

<?php
$veiculos = [
    ["valor" => 30000, "combustivel" => "gasolina"],
    ["valor" => 25000, "combustivel" => "álcool"],
    ["valor" => 0, "combustivel" => "diesel"] // Encerra
];

$totalDesconto = 0; $totalPago = 0;

foreach ($veiculos as $v) {
    if ($v['valor'] == 0) break;

    $pct = 0;
    if ($v['combustivel'] == "álcool") $pct = 0.25;
    elseif ($v['combustivel'] == "gasolina") $pct = 0.21;
    elseif ($v['combustivel'] == "diesel") $pct = 0.14;

    $desc = $v['valor'] * $pct;
    $pago = $v['valor'] - $desc;
    
    $totalDesconto += $desc;
    $totalPago += $pago;
    
    echo "Valor: {$v['valor']} | Desconto: $desc | Pago: $pago\n";
}
echo "Total de descontos: $totalDesconto | Total pago: $totalPago";
?>

<!-- Q28 -->

<?php
$salarioMinimo = 1412.00;
$funcionario = "Ana";
$salarioAtual = 3000.00;

$qtdSM = $salarioAtual / $salarioMinimo;

if ($qtdSM < 3) $reajuste = 0.50;
elseif ($qtdSM >= 3 && $qtdSM <= 10) $reajuste = 0.20;
elseif ($qtdSM > 10 && $qtdSM <= 20) $reajuste = 0.15;
else $reajuste = 0.10;

$valorReajuste = $salarioAtual * $reajuste;
$novoSalario = $salarioAtual + $valorReajuste;

echo "Funcionário: $funcionario | Reajuste: R$ $valorReajuste | Novo Salário: R$ $novoSalario";
?>

<!-- Q29 -->

<?php
$mes = 5;
switch ($mes) {
    case 1: echo "Janeiro"; break;
    case 2: echo "Fevereiro"; break;
    case 3: echo "Março"; break;
    case 4: echo "Abril"; break;
    case 5: echo "Maio"; break;
    // ... continuar até 12
    default: echo "Mês inválido";
}
?>

<!-- Q30 -->

<?php
$nome = "Ricardo";
$sexo = "M";
$idade = 35;
$salarioFixo = 2000.00;
$abono = 0;

if ($sexo == "M") {
    $abono = ($idade >= 30) ? 100.00 : 50.00; [cite: 64]
} else {
    $abono = ($idade >= 30) ? 200.00 : 80.00; [cite: 64]
}

$salarioLiquido = $salarioFixo + $abono;
echo "Nome: $nome | Salário Líquido: R$ " . number_format($salarioLiquido, 2);
?>

<!-- Q31 -->

<?php
$valores = [30, 10, 20];
sort($valores); // Função nativa que ordena o array
echo "Valores em ordem crescente: " . implode(", ", $valores);
?>

<!-- Q32 -->

<?php
$A = 10; $B = 0; $C = '/';

if ($C == '+') echo $A + $B;
elseif ($C == '-') echo $A - $B;
elseif ($C == '*') echo $A * $B;
elseif ($C == '/') {
    echo ($B == 0) ? "Erro: Divisão por zero" : ($A / $B);
} else {
    echo "Operador não definido";
}
?>

<!-- Q33 -->

<?php
$a = 10; $b = 10; $c = 10;

// Propriedade: cada lado deve ser menor que a soma dos outros dois
if ($a < ($b + $c) && $b < ($a + $c) && $c < ($a + $b)) {
    if ($a == $b && $b == $c) echo "Triângulo Equilátero";
    elseif ($a == $b || $a == $c || $b == $c) echo "Triângulo Isóscele";
    else echo "Triângulo Escaleno";
} else {
    echo "Os valores não podem formar um triângulo";
}
?>

<!-- Q34 -->

<?php
$nivel = 2; // Níveis 1, 2 ou 3
$horasAula = 40;
$valorHora = 0;

if ($nivel == 1) $valorHora = 12.00;
elseif ($nivel == 2) $valorHora = 17.00;
elseif ($nivel == 3) $valorHora = 25.00;

echo "Salário do Professor: R$ " . ($valorHora * $horasAula);
?>

<!-- Q35 -->

<?php
$idade = 12;

if ($idade >= 5 && $idade <= 7) echo "Infantil A";
elseif ($idade >= 8 && $idade <= 10) echo "Infantil B";
elseif ($idade >= 11 && $idade <= 13) echo "Juvenil A";
elseif ($idade >= 14 && $idade <= 17) echo "Juvenil B";
elseif ($idade >= 18 && $idade <= 25) echo "Sênior";
else echo "Idade fora da faixa etária";
?>

<!-- Q36 -->

<?php
$tipoCliente = 1; // 1, 2 ou 3
$consumoKWh = 150;
$valorKWh = 0;

switch($tipoCliente) {
    case 1: $valorKWh = 0.60; break;
    case 2: $valorKWh = 0.48; break;
    case 3: $valorKWh = 1.29; break;
}

echo "Valor da conta de luz: R$ " . ($consumoKWh * $valorKWh);
?>

<!-- Q37 -->

<?php
$sexo = "Masculino"; $h = 1.75; $idade = 25;
$pesoIdeal = 0;

if ($sexo == "Masculino") {
    if ($h > 1.70) {
        if ($idade <= 20) $pesoIdeal = (72.7 * $h) - 58;
        elseif ($idade >= 21 && $idade <= 39) $pesoIdeal = (72.7 * $h) - 53;
        else $pesoIdeal = (72.7 * $h) - 45;
    } else {
        $pesoIdeal = ($idade <= 40) ? (72.7 * $h) - 50 : (72.7 * $h) - 58;
    }
} else { // Feminino
    if ($h > 1.50) $pesoIdeal = (62.1 * $h) - 44.7;
    elseif ($idade >= 35) $pesoIdeal = (62.1 * $h) - 45;
    else $pesoIdeal = (62.1 * $h) - 49;
}

echo "Peso Ideal: " . number_format($pesoIdeal, 2) . " kg";
?>

<!-- Q38  Q39-->

<?php
$nome = "Lucas"; $matricula = "12345";
$nLaboratorio = 8.0; $nSemestral = 7.5; $nExameFinal = 9.0;

$notaFinal = (($nLaboratorio * 2) + ($nSemestral * 3) + ($nExameFinal * 5)) / 10;

if ($notaFinal > 8) $classe = "A";
elseif ($notaFinal > 7) $classe = "B";
elseif ($notaFinal > 6) $classe = "C";
elseif ($notaFinal > 5) $classe = "D";
else $classe = "R";

echo "Estudante: $nome | Nota Final: $notaFinal | Classificação: $classe";
?>

<!-- Q40 -->

<?php
$nome = "Mariana"; $idade = 22; $risco = "Médio"; // Baixo, Médio, Alto
$categoria = "Inválida";

if ($idade < 17 || $idade > 70) {
    echo "Idade fora da faixa necessária";
} else {
    if ($idade <= 20) {
        if ($risco == "Baixo") $categoria = 1;
        elseif ($risco == "Médio") $categoria = 2;
        else $categoria = 3;
    } elseif ($idade <= 24) {
        if ($risco == "Baixo") $categoria = 2;
        elseif ($risco == "Médio") $categoria = 3;
        else $categoria = 4;
    }
    // ... segue a lógica para as outras faixas da tabela [cite: 116]
    echo "Nome: $nome | Idade: $idade | Categoria: $categoria";
}
?>