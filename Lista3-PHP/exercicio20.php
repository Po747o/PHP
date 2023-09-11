<?php
$somacem = 0;
$somabase = 0;
$somaquad = 0;

for ($base = 0; $base <= 100; $base++) {

    $somacem += $base * $base;
}

for ($base = 0; $base <= 100; $base++) {

    $somabase += $base;
}

$somaquad = $somabase * $somabase;

echo 'A diferença entre a soma dos quadrados dos cem primeiros números naturais e o quadrado da soma é igual a: ' . $somaquad - $somacem . "</br>";
?>