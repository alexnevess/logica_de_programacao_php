<?php
// A regra da sequência é:
// Se o número for par, divida-o por 2.
// Se for ímpar, multiplique por 3 e adicione 1.
// Repita esse processo com o novo número até que o valor chegue a 1.

$numero = 7;

while($numero != 1)
{
    $teste = $numero % 2;
    if($teste == 0)
    {
        $numero/=2;
        echo "$numero\n";
    }
    else{
        $numero = ($numero * 3)+1;
        echo "$numero\n";
    }
}
?>