<?php
$aleatorio = rand(1, 10);
$chute = $_POST["chute"];
$tentativas = 0;
$exec = 1;

if (exec)


    if ($chute > 10 | $chute < 1) {

        echo 'Você deve fornecer um valor válido, ou seja, apenas números no intervalo de 1 a 1000.' . "</br>";
        echo "\n";
        include 'exercicio23include.html';
    }
    else {

        if ($chute == $aleatorio) {

            echo 'Eba! Na mosca! Você adivinhou o número ' .$aleatorio. " em " .$tentativas. " tentativas! \n";
        }
        else {
    
            if ($chute < $aleatorio) {
    
                echo 'Não foi dessa vez! Chute um número maior!';
                include 'exercicio23include.html';
                $tentativas++;
            }
            else {
    
                echo 'Não foi dessa vez! Chute um número menor!';
                include 'exercicio23include.html';
                $tentativas++;
            }
            
        }
    }
    echo 'Você tentou ' .$tentativas. ' vezes';
?>