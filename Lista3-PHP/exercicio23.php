<?php
$aleatorio = rand(1, 10);
$chute = $_POST["chute"];
$tentativas;

while ($chute != $aleatorio) {

    if (!is_numeric($chute) || $chute != $aleatorio) {

        echo 'Você deve fornecer um valor válido, ou seja, apenas números no intervalo de 1 a 1000.' . "</br>";
        echo "\n";
    }

    if ($chute == $aleatorio) {

        echo 'Eba! Na mosca! Você adivinhou o número ' .$aleatorio. " em " .$tentativas. " tentativas! \n";
        break;
    }
    else {

        if ($chute < $aleatorio) {

            echo 'Não foi dessa vez! Chute um número maior!';
            $tentativas++;
        }
        else {

            echo 'Não foi dessa vez! Chute um número menor!';
            $tentativas++;

        }
    }
    echo "Você tentou " .$tentativas. " vezes.";
}
?>