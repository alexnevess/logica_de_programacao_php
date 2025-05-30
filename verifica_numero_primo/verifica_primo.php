<?php
//Verifica se o número é primo ou não.
//Números primos são divisíveis apenas por 1 e por eles mesmos.
//ou seja, eles não podem ser divisível por qualquer número abaixo dele, que seja diferente de um.

$n = 4;


for ($i = 2; $i < $n; $i++) {
    $resultado = $n / $i;
    $restoDivisao = $n % $i;

    if ($restoDivisao == 0)
    {
        $divisor = $i;
        break;
    }
}

if (!isset($divisor))
    echo "O número $n é primo";
else
    echo "O número $n não é primo";

?>