<?php

$somacem = 0;
$somaquad = 0;
$somaquadrados = 0;

for ($base = 0; $base <= 10; $base++) {

    $somacem += $base^2; //1^2 + 2^2 + 3^2 ... + 100^2

}

for ($base = 0; $base <= 10; $base++) {

    $somaquad += $base; //1 + 2 + 3 + ... + 100

}

$somaquadrados = $somaquad^2; 

echo 'A diferença entre a soma dos quadrados dos dez primeiros números naturais e o quadrado da soma é igual a: ' . $somaquad - $somacem . "</br>";

?>