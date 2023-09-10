<?php

$S = 0;
$numerador = -1;

for ($denominador = 1; $denominador <= 50; $denominador++) {

    $numerador = $numerador + 2;
    $S += $numerador/$denominador;

echo 'Para ' .$numerador. '/' .$denominador.' o número S é: ' .$S. "</br>";

}

?>