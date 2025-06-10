<?php
// Crie um programa que permita ao usuário converter valores entre diferentes unidades de medida. O usuário poderá escolher entre:
// Temperatura: Celsius ⇄ Fahrenheit
// Distância: Km ⇄ Milhas

echo "O que deseja converter?\n 0->Temperatura: Celsius ⇄ Fahrenheit\n 1->Distância: Km ⇄ Milhas\n >";
$escolha = intval(fgets(STDIN));

switch ($escolha) {
    case 0:
        echo "Menu Principal>Temperatura>\n";
        echo "Deseja converter:\n 0->Celsius para Fahrenheit\n 1->Fahrenheit para Celsius\n>";
        $escolha_temperatura = intval(fgets(STDIN));

        switch ($escolha_temperatura) {
            case 0:
                echo "Menu Principal>Temperatura>Celsius ⇄ Fahrenheit\n\n";
                echo "Informe o valor em Celsius:\n >";
                $c = floatval(fgets(STDIN));
                $f = ($c * 9 / 5) + 32;
                echo "O valor convertido é $f";
                break;
            case 1:
                echo "Menu Principal>Temperatura>Celsius ⇄ Fahrenheit\n\n";
                echo "Informe o valor em Fahrenheit:\n >";
                $f = floatval(fgets(STDIN));
                $c = ($f - 32) * 5 / 9;
                echo "O valor convertido é $c";
                break;
            default:
                echo "Opção inválida!\n";
        }
        break;
    case 1:
        echo "Menu Principal>Distância>\n\n";
        echo "Deseja converter:\n 0->Km para Milhas\n 1->Milhas para Km\n>";
        $escolha_distancia = intval(fgets(STDIN));

        switch ($escolha_distancia) {
            case 0:
                echo "Menu Principal>Distância>Km ⇄ Milhas\n\n";
                echo "Informe o valor em Km:\n >";
                $k = floatval(fgets(STDIN));
                $m = $k * 0.621371;
                echo "O valor convertido é $m";
                break;
            case 1:
                echo "Menu Principal>Distância>Milhas ⇄ Km\n\n";
                $m = floatval(fgets(STDIN));
                $k = $m / 0.621371;
                echo "O valor convertido é $k";
                break;
            default:
                echo "Opção inválida!\n";
        }
        break;
    default:
        echo "Opção inválida!\n";
}
?>