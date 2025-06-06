<?php
// O que você deve fazer:
// Para cada aluno, calcule a média das três notas.
// Classifique o aluno de acordo com a média:
// Média ≥ 7.0 → "Aprovado"
// Média ≥ 5.0 e < 7.0 → "Recuperação"
// Média < 5.0 → "Reprovado"

// Monte um novo array com:
// Nome do aluno como chave.

// Valor sendo um array com:
// 'media' => valor da média
// 'situacao' => classificação (Aprovado, Recuperação ou Reprovado)
// Exiba esse novo array.

$alunos = [
    "joão" => [7, 3, 10],
    "Carlos" => [9, 10, 8],
    "Jonas" => [2, 3, 4],
];

$novo_alunos = [];

foreach ($alunos as $nome => $notas) {
    $media = 0;

    foreach ($alunos[$nome] as $nota) {
        $media += $nota;
    }
    $media /= 3;

    if ($media >= 7)
        $situacao = "Aprovado";
    else if ($media < 7 && $media >= 5)
        $situacao = "Recuperação";
    else
    {
        $situacao = "Reprovado";
    }

    $novo_alunos[$nome] = ['media' => $media, 'situação' =>$situacao];
}
print_r($novo_alunos);
?>