<?php
//Verifica os números primos de 2 a 100

function testa_numero($numero)
{
    for($j = 2; $j<$numero; $j++)
    {
        $resultado = $numero % $j;

        if($resultado == 0)
        {
            return false;
        }
    }
    return true;
}

$max = 100;

for($i = 2; $i<=$max; $i++)
{
  $valor = testa_numero($i);

  if($valor == true)
  {
    echo "$i é primo\n";
  }
}

?>