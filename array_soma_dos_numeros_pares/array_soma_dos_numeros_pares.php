<?php
// Crie um programa que:
// Leia um array (lista) de 10 números inteiros.
// Some apenas os números pares contidos nesse array.
// Exiba a soma final dos números pares.

$numeros = [3, 8, 4, 5, 7, 10, 13, 2, 6, 1];

$soma_pares = 0;

foreach($numeros as $numero)
{
    $resto_div = $numero % 2;

    if($resto_div == 0)
    {
        $soma_pares+=$numero;
    }
}

echo "$soma_pares\n"
?>