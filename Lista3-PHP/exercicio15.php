<?php
$soma = 0;
for ($i = 0; $i < 1000; $i++) {

    if ($i % 3 == 0) {
        $soma += $i;
    } else if ($i % 5 == 0)
        $soma += $i;
};
echo 'Esta é a soma de todos os múltiplos de 3 ou 5, sem que se repitam: ' . $soma . "</br>";
?>