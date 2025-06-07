<?php
// O que fazer:
// Gera automaticamente um número inteiro aleatório entre 1 e 100
// O jogador tem no máximo 7 tentativas para adivinhar o número
// A cada tentativa, informe:
// "Muito alto" se o chute for maior que o número
// "Muito baixo" se for menor
// "Acertou" se for igual
// Se acertar, encerre o jogo com uma mensagem de vitória 
// Se errar todas as 7, informe que perdeu e mostre o número secreto

$numero = rand(1, 100);

$i=1;
$acertou = false;

while($i < 8)
{
echo "$i\° tentativa:";
$valor_usuario = intval(fgets(STDIN));

if($valor_usuario>$numero)
{
  echo "Muito Alto\n";
}elseif($valor_usuario<$numero)
{
    echo "Muito Baixo\n";
}elseif($valor_usuario==$numero){
    echo "***Acertou***\n";
    $acertou = true;
    break;
}
$i++;
}

if(!$acertou){
    echo "***Você Perdeu***";
}

?>