<?php
$n = $_POST["numero"];
$cont = count($n); //É necessário para que o for identifique a quantidade de posições do array.
//Ele não reconhece a variável $n
$lido = 0;
$maior = $n[0];

//Faz a comparação de cada número para checagem do maior
for ($i = 0; $i < $cont; $i++) {

    if ($n[$i] > $maior) {
        $maior = $n[$i];
    }
}

for ($i = 0; $i < $cont; $i++) {

    if ($n[$i] == $maior) {
        $lido++;
    }
}

/*Esta forma não deu certo porque acabava substituindo um número já armazenado em $maior por outro menor que ele,
mas que fosse maior que o da próxima posição. Exemplo: 8 4 5 > O 5 era armazenado

for ($i = 0; $i <= $cont; $i++) {
    
    if ($n[$i] > $n[$i + 1]) {

        $maior = $n;

    }
    else if ($maior == $n) {
    }
};*/

echo 'O número ', $maior, ' é o maior e foi lido ', $lido, ' vezes.';
?>