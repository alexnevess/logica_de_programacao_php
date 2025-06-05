<?php
// Crie um programa que:
// Receba um array com vários números inteiros, podendo haver repetições.
// Conte quantas vezes cada número aparece no array.
// Exiba o resultado como um array associativo, onde a chave é o número e o valor é a quantidade de vezes que ele aparece.

$numeros = [3, 1, 2, 4, 3, 1, 5, 6, 5, 3];

$array = [];

foreach ($numeros as $numero) {

    if (isset($array[$numero])) {
        $array[$numero] += 1;
    } else {
        $array[$numero] = 1;
    }
}
print_r($array);
?>