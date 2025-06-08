<?php
//Calculadora simples utilizando switch case.

echo "Digite o 1° número:";
$numero1 = intval(fgets(STDIN));
echo "Digite o 2° número:";
$numero2 = intval(fgets(STDIN));

echo "Escolha uma opção:\n0->+\n1->-\n2->*\n3->/\n";

$opcao = intval(fgets(STDIN));

switch ($opcao) {
    case 0:
        $resultado = $numero1 + $numero2;
        echo "$numero1 + $numero2 = ";
        break;
    case 1:
        $resultado = $numero1 - $numero2;
        echo "$numero1 - $numero2 = ";
        break;
    case 2:
        $resultado = $numero1 * $numero2;
        echo "$numero1 * $numero2 = ";
        break;
    case 3:
        if ($numero2 != 0) {
            $resultado = $numero1 / $numero2;
            echo "$numero1 / $numero2 = ";
        } else {
            echo "erro: divisão por 0";
        }
        break;
    default:
        echo "Digite um valor válido";
}

if (isset($resultado)) {
    echo $resultado;
}

?>