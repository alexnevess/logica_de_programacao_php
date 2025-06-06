<?php
// Aumentar em 10% o preço de produtos com estoque entre 1 e 5.
// Marcar produtos como:
// "indisponivel" se o estoque for 0
// "disponivel" nos demais casos
// Criar um novo array ($novo_produtos) com:
// nome
// preco (atualizado, se necessário)
// categoria (Custo alto, médio e baixo)
// situacao (disponivel ou indisponivel)


$produtos = [
    ['nome' => "Notebook", 'preco' => 2400, 'estoque' => 3],
    ['nome' => "Mouse", 'preco' => 60, 'estoque' => 0],
    ['nome' => "Monitor", 'preco' => 700, 'estoque' => 10],
];
$novo_produtos = [];
$i = 0;
foreach ($produtos as $produto) {

    if ($produto['estoque'] >= 1 && $produto['estoque'] <= 5) {
        $preco = $produto['preco'] + ($produto['preco'] * 0.1);
        $situacao = "disponivel";

    } elseif ($produto['estoque'] == 0) {
        $situacao = "indisponivel";
        $preco = $produto['preco'];
    } else {
        $situacao = "disponivel";
        $preco = $produto['preco'];
    }

    if ($preco > 1500)
        $categoria = "Alto Custo";
    elseif ($preco > 500 && $preco < 1500)
        $categoria = "Custo Médio";
    else
        $categoria = "Baixo Custo";

    $novo_produtos[$i] = ['nome' => $produto['nome'], 'preco' => $preco, 'categoria' => $categoria, 'situacao' => $situacao];
    $i++;
}
print_r($novo_produtos);
?>