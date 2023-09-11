<?php
$inicial = $_POST["inicial"];
$final = $_POST["final"];
$soma = 0;

if ($inicial > $final) {

    echo 'Intervalo de valores inválido!' . "</br>";

} else
    for ($inicial; $inicial <= $final; $inicial++) {

        if ($inicial % 2 != 0) {
            $soma += $inicial;
        }
    }

echo 'A soma dos números ímpares do intervalo fornecido por você é igual a: ' . $soma . "</br>";

?>