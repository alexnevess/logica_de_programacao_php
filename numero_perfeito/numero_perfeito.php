<?php
// Um número perfeito é um número inteiro positivo que é igual à soma de seus divisores próprios positivos (excluindo ele mesmo).
// Exemplos:
// 6 é perfeito, pois seus divisores são 1, 2, 3 e 1 + 2 + 3 = 6
// 12 não é perfeito (1 + 2 + 3 + 4 + 6 = 16 ≠ 12)

//1. descobrir os divisores
//2. somar os divisores
//3. testar se é igual a origem

function testa_numero($numero, $i)
{
    $resultado = $numero % $i;
    if ($resultado == 0) {
        return true;
    } else
        return false;
}

$numero = 496;
$soma = 0;

$max = intdiv($numero, 2);

for ($i = 1; $i <= $max; $i++) {
    $teste = testa_numero($numero, $i);
    if ($teste == true) {
        $soma += $i;

        if ($i == $max)
            echo "$i=";
        else
            echo "$i+";
    }
}
echo "$soma";

if ($soma == $numero)
    echo "\n$numero é um número perfeito";
else
    echo "\n$numero não é um número perfeito";

?>