<?php
// O que você deve fazer:
// Liste todos os produtos cujo valor é menor que R$ 25.
// Aumente o preço desses produtos em 10%.
// Exiba o catálogo final com os valores já atualizados, mantendo a estrutura do array associativo.

$catalogo = [
    'arroz' => 10,
    'feijão' => 21,
    'macarrao' => 30,
    'acucar' => 7,
    'biscoito' => 35,
];

foreach($catalogo as $produto => $valor)
{
    if($valor <= 25)
    {
       $catalogo[$produto] = $valor + ($valor*0.10);
    }
}

print_r($catalogo);

?>