<?php
$aleatorio = rand(1, 10);
$chute = $_POST["chute"];

do {

    if (!is_numeric($chute) || $chute < 1 || $chute > 10) {

        echo 'Você deve fornecer um valor válido, ou seja, apenas números no intervalo de 1 a 1000.' . "</br>";
        continue;

    }

    $chute++;

    if ($chute < $aleatorio) {

        echo 'Não foi dessa vez! Chute um número maior!';
        $chute++;

    } else if ($chute > $aleatorio) {

        echo 'Não foi dessa vez! Chute um número menor!';
        $chute++;

    } else {

        echo 'Eba! Na mosca!';

    }

} while ($chute != $aleatorio)

?>