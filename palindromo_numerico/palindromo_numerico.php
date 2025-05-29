<?php
//Números palíndromos são aqueles que podem ser lidos igualmente da esquerda para a direita e da direita para a esquerda
//Exemplo: 121, 1331, 202...

$numero = 1331;
$valor = $numero;
$numeroInvertido ='';
while($numero >0)
{
    $resto = $numero % 10;
    $numero = intdiv($numero, 10);
    echo "$resto\n";
    $numeroInvertido .= $resto; 
}
echo "\nValor original: $valor\n";
echo "Valor invertido: $numeroInvertido\n";

$numeroInvertido = (int)$numeroInvertido;

if($valor==$numeroInvertido)
{
    echo "\n$valor é um palíndromo";
}
else
{
    echo "\n$valor não é um palíndromo";
}
?>