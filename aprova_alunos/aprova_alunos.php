<?php
// O que você deve fazer:
// Classifique os alunos da seguinte forma:
// Nota ≥ 7: "Aprovado"
// Nota entre 5 e 6.9: "Recuperação"
// Nota < 5: "Reprovado"
// Crie um novo array associativo com o nome do aluno como chave e a classificação ("Aprovado", "Recuperação" ou "Reprovado") como valor.
// Exiba o novo array com as classificações.

$alunos = [
    "João" => 7,
    "Douglas" => 5.5,
    "Mateus" => 4,
];

$aprova = [];

foreach ($alunos as $aluno => $nota) {
    if ($nota >= 7)
        $aprova[$aluno] = "Aprovado";
    else if ($nota < 7 && $nota >= 5)
        $aprova[$aluno] = "Recuperação";
    else
        $aprova[$aluno] = "Reprovado";
}
print_r($aprova);
?>