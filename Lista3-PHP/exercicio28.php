<?php
$num = $_POST["num"];
$somaprimo = 0;
$divisores = 0;
$j = 1;

if ($num > -1) {

    for ($i = $num; $i >= $num; $i--) {

        if ($i % $j == 0) {

            $divisores++;

            if ($divisores <= 2) {

                $somaprimo += $i;

            }
        }
    }
}

echo 'A soma de todos os primos anteriores a ' . $num . ' é ' . $somaprimo;

?>