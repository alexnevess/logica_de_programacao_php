<?php
// Crie um programa que:
// Leia um array de números inteiros com valores repetidos.
// Crie um novo array contendo apenas os valores únicos, ou seja, sem repetições.
// Exiba o novo array com os valores únicos.

$numeros = [4, 7, 4, 3, 7, 1, 2, 3, 5];
$numeros_novo = [];
$i = 0;
foreach ($numeros as $numero) {

    if(!in_array($numero, $numeros_novo))
    {
    $numeros_novo[] = $numero;
    }
}

print_r($numeros_novo);
?>